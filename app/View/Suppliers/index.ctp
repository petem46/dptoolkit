<div class="processors view">
  <!-- PROCESSOR DETAILS PANEL -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card-header bg-primary text-white">
            <div class="card-title">
              <div class="row">
                <div class="col-md-3 order-md-9">
                  <?php echo $this->Html->link(__('<i class="fas fa-plus"></i>&nbsp&nbsp;Add New'), array('controller' => 'suppliers', 'action' => 'add'), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
                </div>
                <div class="col-md-9 order-md-3">
                  <h3><i class="fas fa-warehouse"></i>&nbsp;&nbsp;Suppliers</h3>
                </div>
              </div>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item justify-content-between text-white card-list-item border-primary bg-secondary">
              <div class="col-4"><strong><i class="fas fa-warehouse"></i>&nbsp;&nbsp;Supplier Name</strong></div>
              <div class="col-4"><strong><i class="fas fa-user-secret"></i>&nbsp;&nbsp;DPO Contact</strong></div>
              <div class="col-2"><strong></strong></div>
              <div class="col-2"><strong></strong></div>            
            </li>
            <?php 
            $x =0;
            foreach ($suppliers as $supplier):
              ?>
              <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
                <div class="col-4 mb-2">
                  <i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $this->Html->link($supplier['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $supplier['Supplier']['id'])); ?>&nbsp;&nbsp;
                </div>
                <div class="col-4 displaytextproperly"><?php echo $supplier['Supplier']['dponame']; ?></div>
                <div class="col-2">
                  <?php 
                  if (!empty($supplier['Supplier']['dpoemail'])) {
                  echo $this->Html->link(__('<i class="far fa-envelope"></i>&nbsp;&nbsp;Contact DPO'), 'mailto:' . $supplier['Supplier']['dpoemail'], array('target' => '_blank', 'class' => 'btn btn-info btn-block btn-sm', 'escape' => false));
                  }                  
                  ;?>
                </div>
                <div class="col-2">
                  <?php echo $this->Html->link(__('<i class="fas fa-search"></i>&nbsp&nbsp;View details'), array('controller' => 'suppliers', 'action' => 'view', $supplier['Supplier']['id']), array('class' => 'btn btn-sm btn-info btn-block', 'escape' => false)); ?>
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