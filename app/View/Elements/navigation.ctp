<?php
$this->Setting = ClassRegistry::init('Setting');

$settings = $this->Setting->query("
  SELECT * FROM settings where id = 1;
");
$this->set(compact('sitename'));

// echo '<pre>';
// print_r($settings);
// echo "</pre>";

?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $this->webroot; ?>"><i class="fab fa-expeditedssl"></i>&nbsp;&nbsp;<?php echo $settings[0]['settings']['sitename']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <?php echo $this->Html->link(__('<i class="fas fa-exchange-alt"></i>&nbsp;&nbsp' . $settings[0]['settings']['processorslabel']), array('controller' => 'processors', 'action' => 'index'), array('class' =>'nav-link', 'escape' => false)); ?>
        </li>
        <li class="nav-item">
          <?php echo $this->Html->link(__('<i class="fas fa-warehouse"></i>&nbsp;&nbsp' . $settings[0]['settings']['supplierslabel']), array('controller' => 'suppliers', 'action' => 'index'), array('class' =>'nav-link', 'escape' => false)); ?>
        </li>
        <li class="nav-item">
          <span class="nav-link not-allowed disabled"><i class="fas fa-tasks"></i>&nbsp;&nbsp;Audits</span>
        </li>
        <li class="nav-item">
          <?php echo $this->Html->link(__('<i class="fas fa-file-alt"></i>&nbsp;&nbsp;Policy Docs'), array('controller' => 'pages', 'action' => 'policydocs'), array('class' =>'nav-link', 'escape' => false)); ?>
        </li>
        <li class="nav-item">
          <?php echo $this->Html->link(__('<i class="fas fa-cogs"></i>&nbsp;&nbsp;Admin'), array('controller' => 'pages', 'action' => 'adminsettings'), array('class' =>'nav-link', 'escape' => false)); ?>
        </li>
      </ul>

    </div>
  </div>
</nav>