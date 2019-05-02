<div class="settings form">
  <!-- SETIINGS DETAILS PANEL -->
  <!-- FROM HERE WE CAN SET KEY WORDS AND SITE TITLE -->
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h1>Edit Site Setting</h1>
        </div>
      </div>
      <?php echo $this->Form->create('Setting', array('role' => 'form')); ?>
      <ul class="list-group mb-3">
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary hidden">
          <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id', 'label' => false));?>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <label class="col-2 text-right">Site Name:</label>
          <div class="col-10"><?php echo $this->Form->input('sitename', array('class' => 'form-control', 'label' => false));?></div>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <label class="col-2 text-right">Processor Label</label>
          <div class="col-10"><?php echo $this->Form->input('processorslabel', array('class' => 'form-control', 'label' => false));?></div>
        </li>
        <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
          <label class="col-2 text-right">Supplier Label</label>
          <div class="col-10"><?php echo $this->Form->input('supplierslabel', array('class' => 'form-control', 'label' => false));?></div>
        </li>
      </ul>
      <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default btn-success btn-block')); ?>
      <?php echo $this->Form->end() ?>

    </div><!-- end row -->
  </div>
</div>