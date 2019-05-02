<div class="adminsettings">

  <div class="row mb-4">
    <div class="col-md-12">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h3><i class="fas fa-cogs"></i>&nbsp;&nbsp;Admin &amp; Settings</h3>
        </div>
      </div>
      <ul class="list-group">
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-cogs"></i>&nbsp;&nbsp;Manage Site Settings'), array('controller' => 'settings', 'action' => 'edit',1), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-users"></i>&nbsp;&nbsp;Manage Data Access Groups'), array('controller' => 'dataaccessgroups', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-list"></i>&nbsp;&nbsp;Manage Student Elements'), array('controller' => 'studentelements', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-list"></i>&nbsp;&nbsp;Manage Staff Elements'), array('controller' => 'staffelements', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-list"></i>&nbsp;&nbsp;Manage Parent Elements'), array('controller' => 'parentelements', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-list"></i>&nbsp;&nbsp;Manage Schools'), array('controller' => 'schools', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <?php echo $this->Html->link(__('<i class="fas fa-list"></i>&nbsp;&nbsp;Manage Lawful Basis'), array('controller' => 'lawfulreasons', 'action' => 'index'), array('class' => 'btn btn-info btn-block','escape' => false)); ?>
        </li>
      </ul>
    </div>
  </div>
</div>