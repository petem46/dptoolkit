<div class="studentelements index">
  <!-- PROCESSOR DETAILS PANEL -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card-header bg-primary text-white">
            <div class="card-title">
              <div class="row">
                <div class="col-md-3 order-md-9">
                  <?php echo $this->Html->link(__('<i class="fas fa-plus"></i>&nbsp&nbsp;Add New'), array('controller' => 'studentelements', 'action' => 'add'), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
                </div>
                <div class="col-md-9 order-md-3">
                  <h3><i class="fas fa-building"></i>&nbsp;&nbsp;Student Data Elements</h3>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-group">
            <?php foreach ($studentelements as $studentelement): ?>
              <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
                <div class="col-5 mb-0">
                  <i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $studentelement['Studentelement']['name']; ?>&nbsp;&nbsp;
                </div>
                <div class="col-5">
                  <?php if(!empty($studentelement['Studentelement']['sensitivedata'])) { ;?>
                    <span class="badge badge-danger">SENSITIVE</span>
                  <?php } ;?>
                </div>
                <div class="text-right "> 
              <?php echo $this->Html->link('<i class="fas fa-edit"></i>', array('action' => 'edit', $studentelement['Studentelement']['id']), array('class' => 'btn btn-sm btn-info','escape' => false)); ?>
                <?php echo $this->Form->postLink('<i class="fas fa-trash-alt"></i>', array('action' => 'delete', $studentelement['Studentelement']['id']), array('class' => 'btn btn-sm btn-warning','escape' => false), __('Are you sure you want to delete %s?', $studentelement['Studentelement']['name'])); ?>
                </div>
              </li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
</div><!-- end containing of content -->