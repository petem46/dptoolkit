<div class="suppliers add">
  <!-- PROCESSOR DETAILS PANEL -->
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h3><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Supplier</h3>
        </div>
      </div>
      <?php echo $this->Form->create('Supplier', array('role' => 'form', 'class' => 'inline-form')); ?>
      <ul class="list-group">
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>Name</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>Adress</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('address', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>Phone</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('phone', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>Contact Us Link</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('contactuspage', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>General Email</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('email', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>DPO Contact</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('dponame', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right"><strong>DPO Email</strong></div>
            <div class="col-9">
              <?php echo $this->Form->input('dpoemail', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </div>
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
