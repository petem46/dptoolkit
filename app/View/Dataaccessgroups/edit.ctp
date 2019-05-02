<div class="Dataaccessgroup edit">
  <!-- PROCESSOR DETAILS PANEL -->
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h3><i class="fas fa-plus"></i>&nbsp;&nbsp;Edit Data Access Group</h3>
        </div>
      </div>
      <?php echo $this->Form->create('Dataaccessgroup', array('role' => 'form', 'class' => 'inline-form')); ?>
      <ul class="list-group">
        <div class="form-group">
          <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
        </div>
        <div class="form-group mb-0">
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-1 text-right"><strong>Name</strong></div>
            <div class="col-11">
              <?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Linked Software &amp; Systems</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Processor', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'addschool',
              'label' => false            
            ))
            ;?>
          </li>
        </ul>
        <div class="mb-0 row">
          <div class="col-md-4 offset-md-4 order-md-5">
            <?php echo $this->Form->button('<i class="fas fa-download"></i>&nbsp;&nbsp;Save', array(
                'type' => 'submit', 
                'class' => 'btn btn-success btn-block mt-3', 
                'escape' => false
            )); ?>
          </div>
          <?php echo $this->Form->end() ?>
          <div class="col-md-4 order-md-1">
            <div class="btn btn-secondary btn-block mt-3" onclick="goBack()"><i class="fas fa-arrow-circle-left"></i>&nbsp;&nbsp;Cancel</div>
          </div>

        </div><!-- end col md 12 -->
  </div><!-- end row -->
</div>
