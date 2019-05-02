<div class="processors view">
  <!-- PROCESSOR DETAILS PANEL -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card-header bg-primary text-white">
            <div class="card-title">
              <div class="row">
                <div class="col-md-3 order-md-9">
                  <?php echo $this->Html->link(__('<i class="fas fa-plus"></i>&nbsp&nbsp;Add New'), array('controller' => 'processors', 'action' => 'add'), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
                </div>
                <div class="col-md-9 order-md-3">
                  <h3><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Data Processor Systems</h3>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item justify-content-between bg-secondary text-white card-list-item border-primary hidden">
              <div class="col-4"><strong><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Sofware / System</strong></div>
              <div class="col-4"><strong>Supplier</strong></div>
              <div class="col-2"><strong></strong></div>            
              <div class="col-2"><strong></strong></div>            
            </li>
            <?php 
            $x =0;
            foreach ($processors as $processor):
              ?>
              <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
                <div class="col-4 mb-2">
                  <?php if($processor['Processor']['gdprcompliant'] == 1) {
                    echo '<span class="badge badge-success badge-sm badge-block">COMPLIANT</span>';
                  } else {
                    echo '<span class="badge badge-danger">NON COMPLIANT</span>' ;
                  }?>
                  <br>
                  <i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $this->Html->link($processor['Processor']['name'], array('controller' => 'processors', 'action' => 'view', $processor['Processor']['id'])); ?>&nbsp;&nbsp;
                </div>
                <div class="col-4"><br>
                  <?php echo $this->Html->link($processor['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $processor['Supplier']['id'])); ?>
                </div>
                <div class="col-2"><br>
                  <?php 
                  if (!empty($processor['Supplier']['dpoemail'])) {
                  echo $this->Html->link(__('<i class="far fa-envelope"></i>&nbsp;&nbsp;Contact DPO'), 'mailto:' . $processor['Supplier']['dpoemail'], array('target' => '_blank', 'class' => 'btn btn-info btn-block btn-sm', 'escape' => false));
                  }                  
                  ;?>
                </div>
                <div class="col-2"><br>
                  <?php echo $this->Html->link(__('<i class="fas fa-search"></i>&nbsp;&nbsp;View Details'), array('controller' => 'processors', 'action' => 'view', $processor['Processor']['id']), array('class' => 'btn btn-sm btn-info btn-block float-right', 'escape' => false)); ?>
                </div>           
              </li>
              <?php 
              $x++;
            endforeach;
            if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Linked Schools</li>';}
            ?>
          </ul>
        </div>
      </div>
</div><!-- end containing of content -->