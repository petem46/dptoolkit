<html>
<head>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootlint/0.14.2/bootlint.min.js" integrity="sha384-SLfe/wBrCVfyGjtLhfUmA5cYQLnNVTRmwMUJ11s7x5HxXCKom2oeEwX9bvY74CAs" crossorigin="anonymous"></script> -->

  <?php // echo $this->Html->css('bootstrap.min.css');?>

  <?php echo $this->Html->javascript('jquery.js');?>

  <?php echo $this->Html->javascript('bootstrap.min.js');?> -->


  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet">


</head>
<body>
  <?php echo $content_for_layout;?>

  <?php echo $this->element('sql_dump'); ?>
</body>
</html>

</body>
</html>