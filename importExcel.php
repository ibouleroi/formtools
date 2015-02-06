<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        define("DB_HOST", "localhost"); // set database host
        define("DB_USER", "root"); // set database user
        define("DB_PASS", "12345"); // set database password
        define("DB_NAME", "jsdb"); // set database name

        $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
        $db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

        $databasetable = "YOUR_TABLE";

        /*         * ********************** YOUR DATABASE CONNECTION END HERE  *************************** */


        set_include_path(get_include_path() . PATH_SEPARATOR . '/');
        include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
        $inputFileName = 'discussdesk.xlsx';

        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        
        $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

        for ($i = 2; $i <= $arrayCount; $i++) {
            $Name = trim($allDataInSheet[$i]["A"]);
            $code = trim($allDataInSheet[$i]["B"]);

            $query = "SELECT name FROM countries WHERE name = '" . $Name . "' and email = '" . $code . "'";
            $sql = mysql_query($query);
            $recResult = mysql_fetch_array($sql);
            $existName = $recResult["name"];
            if ($existName == "") {
                $insertTable = mysql_query("insert into countries (id,name, code) values(NULL,'" . $Name . "', '" . $code . "');");

                $msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm" target="_blank">Go Back to tutorial</a></div>';
            } else {
                $msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm" target="_blank">Go Back to tutorial</a></div>';
            }
        }
        echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>" . $msg . "</div>";
        ?>
    </body>
</html>
