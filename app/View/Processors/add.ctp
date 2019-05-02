<div class="processor add">
  <!-- PROCESSOR DETAILS PANEL -->
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <h3><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Processor</h3>
        </div>
      </div>
      <?php echo $this->Form->create('Processor', array('role' => 'form', 'class' => 'inline-form')); ?>
      <ul class="list-group">
        <div class="form-group mb-0">
        <li class="card-title bg-info text-white list-group-item border-primary">
          <h4>Details</h4>
        </li>
        <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
          <div class="form-group mb-0 col-12 row">
            <div class="col-3 text-right form-label">Name</div>
            <div class="col-9">
              <?php echo $this->Form->input('name', array('class' => 'form-control', 'div' => '', 'label' => false));?>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Website</div>
              <div class="col-9">
                <?php echo $this->Form->input('homepage', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add link to processor website'));?>
              </div>
            </div>
          </li>          
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Supplier</div>
              <div class="col-9">
                <?php echo $this->Form->input('supplier_id', array('class' => 'form-control', 'div' => '', 'label' => false, 'empty' => '--- Select Supplier ---'));?>
              </div>
            </div>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
              <div class="row col-12">  
                <div class="col-3 text-right form-label">GPDR Compliant?</div>
                <div id="compliantcheck" class="col-9">
                  <div class="d-flex justify-content-start mb-0">
                <?php
                echo $this->Form->checkbox('gdprcompliant', array(
                  'id' => 'editviewcompliant',
                ))
                ;?>
                <label for="editviewcompliant">
                  <span id="true" class="text-left ml-3">GDPR COMPLIANT&nbsp;&nbsp;<i class="fas fa-check"></i></span>
                  <span id="false" class="text-left ml-3">NOT COMPLIANT&nbsp;&nbsp;<i class="fas fa-times"></i></span>
                </label>
              </div>
            </div>
          </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Basis for Processing</div>
              <div class="col-9">
                <?php echo $this->Form->input('lawfulreason_id', array('class' => 'form-control', 'div' => '', 'label' => false, 'empty' => '--- Select Lawful Basis ---'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Data Transfer Method</div>
              <div class="col-9">
                <?php echo $this->Form->input('datatransfermethod_id', array('class' => 'form-control', 'div' => '', 'label' => false, 'empty' => '--- Select Data Transfer Method ---'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Purpose of Processing</div>
              <div class="col-9">
                <?php echo $this->Form->input('purpose', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add details of purpose why data is processed'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Where is Data Stored</div>
              <div class="col-9">
                <?php echo $this->Form->input('processinglocation', array('class' => 'form-control', 'div' => '', 'label' => false, 
                  'placeholder' => 'Add details of where data is stored.  List the following where possible:
                  • Server location (city, county, country)
                  • Physical security (secure locked buildings)
                  • Digital security (encryption standards etc)'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Frequency of Processing</div>
              <div class="col-9">
                <?php echo $this->Form->input('processingfrequency', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add details to indicate how often data is transferred and processed.  Daily, Weekly, Monty, Termly etc'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Retention Details</div>
              <div class="col-9">
                <?php echo $this->Form->input('retention', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'What is the retention period and deletion process'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Data Processing Agreement</div>
              <div class="col-9">
                <?php echo $this->Form->input('gdprcontractinfo', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add link to data processing agreement / contract'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">GDPR Statement</div>
              <div class="col-9">
                <?php echo $this->Form->input('gdprstatement', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add link to Data Protection / GDPR statement on processor website'));?>
              </div>
            </div>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-3 text-right form-label">Contact Us Page</div>
              <div class="col-9">
                <?php echo $this->Form->input('contactuspage', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add link to Data Protection / GDPR statement on processor website'));?>
              </div>
            </div>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Data Accessed By</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Dataaccessgroup', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'editviewaccessgroups',
              'label' => false            
            ))
            ;?>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Data Access Notes</h4>
          </li>
          <li class="list-group-item card-list-item border-primary d-flex justify-content-start">
            <div class="form-group mb-0 col-12 row">
              <div class="col-12">
                <?php echo $this->Form->input('accessnotes', array('class' => 'form-control', 'div' => '', 'label' => false, 'placeholder' => 'Add information relating to access of specific groups. For example some groups may have full access while others have limited or restricted access permissions.'));?>
              </div>
            </div>
          </li>          
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Schools</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('School', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'editviewschools',
              'label' => false            
            ))
            ;?>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Student Data Elements</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Studentelement', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'editviewstudents',
              'label' => false            
            ))
            ;?>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Staff Data Elements</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Staffelement', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'editviewstaff',
              'label' => false            
            ))
            ;?>
          </li>
          <li class="card-title bg-info text-white list-group-item border-primary">
            <h4>Parent Elements</h4>
          </li>
          <li id="editview" class="list-group-item card-list-item border-primary">
            <?php 
            echo $this->Form->input('Parentelement', array(
              'multiple' => 'checkbox', 
              'div' => 'col-12', 
              'class' => 'd-flex justify-content-start mb-0',
              'id' => 'editviewparents',
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
