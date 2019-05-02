<div class="suppliers view">
  <!-- PROCESSOR DETAILS PANEL -->
    <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title">
          <div class="row">
          <div class="col-md-3 order-md-9">
              <?php echo $this->Html->link(__('<i class="fas fa-edit"></i>&nbsp&nbsp;Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id']), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
              </div>
              <div class="col-md-9 order-md-3">
                <h3><?php echo $supplier['Supplier']['name'];?></h3>
              </div>
            </div>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>Address:&nbsp;</strong></div>
            <div class="col-10 displaytextproperly"><?php echo h($supplier['Supplier']['address']); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>Phone:&nbsp;</strong></div>
            <div class="col-10"><?php echo h($supplier['Supplier']['phone']); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>Contact Us Page:&nbsp;</strong></div>
            <div class="col-10">
              <?php if (!empty($supplier['Supplier']['contactuspage'])) { ?>
              <a href="<?php echo h($supplier['Supplier']['contactuspage']); ?>" target="_blank"><?php echo h($supplier['Supplier']['contactuspage']); ?>&nbsp;&nbsp;<i class="fas fa-sm fa-external-link-alt"></i></a>
              <?php ;} ?>
            </div>
          </li>
          <?php if(!empty($supplier['Supplier']['email'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>Email:&nbsp;</strong></div>
            <div class="col-10"><?php echo $this->Html->link($supplier['Supplier']['email'], 'mailto:' . $supplier['Supplier']['email'], array('target' => '_blank')); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($supplier['Supplier']['dponame'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>DPO Name:&nbsp;</strong></div>
            <div class="col-10"><?php echo h($supplier['Supplier']['dponame']); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($supplier['Supplier']['dpoemail'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-2 text-right"><strong>DPO Email:&nbsp;</strong></div>
            <div class="col-10"><?php echo $this->Html->link($supplier['Supplier']['dpoemail'], 'mailto:' . $supplier['Supplier']['dpoemail'], array('target' => '_blank')); ?></div>
          </li>
          <?php ;} ?>
        </ul>
    </div>
  </div>
<!-- LINKED SYSTEMS PANEL -->
<div class="row mb-3">
  <div class="col-md-12">
    <div class="card-header bg-primary text-white">
      <div class="card-title">
          <div class="row">
          <div class="col-md-3 order-md-9">
              <?php echo $this->Html->link(__('<i class="fas fa-plus"></i>&nbsp&nbsp;Add New'), array('controller' => 'processors', 'action' => 'add'), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
              </div>
              <div class="col-md-9 order-md-3">
                <h4>Software & Systems</h4>
              </div>
            </div>
      </div>
    </div>
    <ul class="list-group">
      <?php 
      $x =0;
      if (!empty($supplier['Processor'])): ?>
      <li class="list-group-item justify-content-between text-primary card-list-item border-primary bg-lightblue">
        <div class="col-3"><strong>Name</strong></div>
        <div class="col-7"><strong>Purpose</strong></div>
        <div class="col-2"><strong></strong></div>            
      </li>
      <?php 
        foreach ($supplier['Processor'] as $processor):
          ?>
              <li class="list-group-item justify-content-between text-primary card-list-item border-primary">
                <div class="col-3 mb-4">
                  <?php if($processor['gdprcompliant'] == 1) {
                    echo '<span class="badge badge-success badge-sm badge-block">COMPLIANT</span>';
                  } else {
                    echo '<span class="badge badge-danger">NON COMPLIANT</span>' ;
                  }?>
                  <br>
                  <i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $this->Html->link($processor['name'], array('controller' => 'processors', 'action' => 'view', $processor['id'])); ?>&nbsp;&nbsp;
                </div>
                <div class="col-7 displaytextproperly"><br><?php echo $processor['purpose']; ?></div>
                <div class="col-2"><br>
                  <?php echo $this->Html->link(__('<i class="fas fa-search"></i>&nbsp&nbsp;View details'), array('controller' => 'processors', 'action' => 'view', $processor['id']), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
                </div>           
              </li>

          <?php 
          $x++;
        endforeach;
      endif;
      if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Linked Software or Systems</li>';}
      ?>
    </ul>
  </div>
</div>
<!-- END OF LINKED SYSTEMS PANEL -->

</div>
