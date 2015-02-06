<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/clean-blog.min.js" type="text/javascript"></script>
  </head>
  <body>
      <?php
           //include_partial('global/_navigation');
           include_partial('global/header');
        ?>
    <?php echo $sf_content ?>
      
      <?php
           include_partial('global/footer');
        ?>
      
          

  </body>
</html>
