<div class="staffelements edit">
  <!-- PROCESSOR DETAILS PANEL -->
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h3><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Staff Data Element</h3>
        </div>
      </div>
      <?php echo $this->Form->create('Staffelement', array('role' => 'form', 'class' => 'inline-form')); ?>
        <div class="form-group">
          <?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
        </div>
      <ul class="list-group">
        <div class="form-group mb-0">
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-2 text-right form-label">Name</div>
            <div class="col-10">
              <?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </li>
        <li id="editview" class="list-group-item card-list-item border-primary">
            <div class="row col-12">  
              <div class="col-2 text-right form-label">Sensitive?</div>
              <div id="sensitivecheck" class="col-10">
                <div class="d-flex justify-content-start mb-0">
              <?php
              echo $this->Form->checkbox('sensitivedata', array(
                'id' => 'editstaffdata',
              ))
              ;?>
              <label for="editstaffdata">
                <span id="true">Sensitive Data&nbsp;&nbsp;<i class="fas fa-lock"></i></span>
                <span id="false">Not Sensitve Data&nbsp;&nbsp;<i class="fas fa-unlock"></i></span>
              </label>
            </div>
          </div>
        </div>
        </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4><i class="fas fa-share-alt"></i>&nbsp;&nbsp;Software &amp; Systems Sharing</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Processor', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'addstaffdataelements',
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
