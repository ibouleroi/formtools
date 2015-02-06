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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
        <script>
            function suggest(inputString) {
                if (inputString.length == 0) {
                    $('#suggestions').fadeOut();
                } else {
                    $.ajax({
                        url: "autosuggest.php",
                        data: 'act=autoSuggestUser&queryString=' + inputString,
                        success: function (msg) {
                            if (msg.length > 0) {
                                $('#suggestions').fadeIn();
                                $('#suggestionsList').html(msg);
                                $('#suggestionsList ul li').css('list-style','none');
                                $('#country').removeClass('load');
                            }
                        }
                    });
                }
            }
            function fill(thisValue) {
                $('#country').val(thisValue);
                setTimeout("$('#suggestions').fadeOut();", 600);
            }
            function fillId(thisValue) {
                $('#country_id').val(thisValue);
                setTimeout("$('#suggestions').fadeOut();", 600);
            }

        </script>

        <div id="suggest">Start to type a country: <br />
            <input style="text-decoration: none;" type="text" size="25" value="" id="country" onkeyup="suggest(this.value);" onblur="fill();
                    fillId();" class="" />
            <input type="hidden" name="country_id" id="country_id" value="" />
            <div id="suggestions" style="display: none;"> <div id="suggestionsList"> &nbsp; </div>
            </div>
        </div>
    </body>
</html>
