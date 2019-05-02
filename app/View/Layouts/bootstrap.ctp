<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php // echo $title_for_layout; ?>
    Data Protection Toolkit
	</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->script('bootstrap.min'); 
    echo $this->Html->script('bootstrap-toggle.min'); 


    ?>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>  
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/flatly/bootstrap.min.css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <?php
    echo $this->Html->css('custom'); 

    echo $this->Html->css('bootstrap-toggle.min'); 
    echo $this->Html->css('checkboxes'); 

    ?>

  </head>

  <body>
    <?php echo $this->Element('navigation'); ?>

    <div class="container">


      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

    <?php echo $this->element('sql_dump'); ?>
    
    <?php echo $this->Html->script('custom'); ?>
</div>
  </body>

<footer class="navbar navbar-expand-lg navbar-dark bg-primary text-white footer d-flex justify-content-between">
  <div class="col-3 footer reveal">
    <?php echo $this->Html->image('whitemonkey64.png', array('style' => 'height: 46px;', 'class' => '')); ?><br>
    <div class="overlay">
      <div class="overlaytext">
        Made by<br>
        <a href="mailto:petem46@gmail.com" target="_blank">petem46</a>
      </div>
    </div>
  </div>
  <div class="col-3 text-center">Data Protection Toolkit<br>for MATs, Academies &amp; Schools</div>
  <div class="col-3 text-right">© 2018 <a href="mailto:petem46@gmail.com" target="_blank">thedatamonkeys</a></div>
</footer>
  
  </html>

