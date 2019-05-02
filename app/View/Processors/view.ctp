<div class="suppliers view">
  <!-- PROCESSOR DETAILS PANEL -->
  <div class="row">
    <div class="col-md-12 mb-3">
        <div class="card-header bg-primary text-white">
          <div class="card-title">
            <div class="row">
              <div class="col-md-3 order-md-9">
                <?php echo $this->Html->link(__('<i class="fas fa-edit"></i>&nbsp&nbsp;Edit Processor'), array('action' => 'edit', $processor['Processor']['id'], $processor['Processor']['name']), array('class' => 'btn btn-sm btn-info float-right', 'escape' => false)); ?>
              </div>
              <div class="col-md-9 order-md-3">
                <h3><?php echo $processor['Processor']['name'];?></h3>
              </div>
            </div>
          </div>
        </div>
        <ul class="list-group ">
          <?php if($processor['Processor']['gdprcompliant'] == 1) { 
            echo '<li class="list-group-item text-white text-center card-list-item border-primary bg-success">GDPR COMPLIANT&nbsp&nbsp;<i class="fas fa-check"></i></li>';
          } else {
            echo '<li class="list-group-item text-white text-center card-list-item border-primary bg-danger">NOT GDPR COMPLIANT&nbsp&nbsp;<i class="fas fa-times"></i></li>';
          } ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Website</strong></div>
            <div class="col-9"><a href="<?php echo h($processor['Processor']['homepage']); ?>" target="_blank"><?php echo h($processor['Processor']['homepage']); ?>&nbsp;&nbsp;<i class="fas fa-sm fa-external-link-alt"></i></a></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>DPO Email</strong></div>
            <div class="col-9"><?php echo $this->Html->link($processor['Supplier']['dpoemail'], 'mailto:' . $processor['Supplier']['dpoemail'],array('target' => '_blank')); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Supplier</strong></div>
            <div class="col-9"><?php echo $this->Html->link($processor['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $processor['Supplier']['id'])); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Suppiler Address</strong></div>
            <div class="col-9 displaytextproperly"><?php echo h($processor['Supplier']['address']); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Supplier Email</strong></div>
            <div class="col-9"><?php echo $this->Html->link($processor['Supplier']['email'], 'mailto:' . $processor['Supplier']['email'], array('target' => '_blank')); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Supplier Phone</strong></div>
            <div class="col-9"><?php echo $this->Html->link($processor['Supplier']['phone'], array('controller' => 'suppliers', 'action' => 'view', $processor['Supplier']['id'])); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Basis for Processing</strong></div>
            <div class="col-9"><?php echo $this->Html->link($processor['Lawfulreason']['reason'], array('controller' => 'lawfulreasons', 'action' => 'view', $processor['Lawfulreason']['id'])); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Purpose of Processing</strong></div>
            <div class="col-9 displaytextproperly"><?php echo h($processor['Processor']['purpose']); ?></div>
          </li>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Frequency of Processing</strong></div>
            <div class="col-9"><?php echo h($processor['Processor']['processingfrequency']); ?></div>
          </li>
          <?php if(!empty($processor['Datatransfermethod']['method'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Data Transfer Method</strong></div>
            <div class="col-9"><?php echo h($processor['Datatransfermethod']['method']); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($processor['Processor']['retention'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Retention Period</strong></div>
            <div class="col-9 displaytextproperly"><?php echo h($processor['Processor']['retention']); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($processor['Processor']['processinglocation'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Location of Processing</strong></div>
            <div class="col-9"><?php echo h($processor['Processor']['processinglocation']); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($processor['Processor']['gdprstatement'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>GDPR Statement</strong></div>
            <div class="col-9"><a href="<?php echo h($processor['Processor']['gdprstatement']); ?>" target="_blank"><?php echo h($processor['Processor']['gdprstatement']); ?>&nbsp;&nbsp;<i class="fas fa-sm fa-external-link-alt"></i></a></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($processor['Processor']['gdprcontractinfo'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Data Processing Agreement</strong></div>
            <div class="col-9 displaytextproperly"><?php echo h($processor['Processor']['gdprcontractinfo']); ?></div>
          </li>
          <?php ;} ?>
          <?php if(!empty($processor['Processor']['contactuspage'])) { ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <div class="col-3 text-right"><strong>Processor Contact Us Page</strong></div>
            <div class="col-9"><a href="<?php echo h($processor['Processor']['contactuspage']); ?>" target="_blank"><?php echo h($processor['Processor']['contactuspage']); ?>&nbsp;&nbsp;<i class="fas fa-sm fa-external-link-alt"></i></a></div>
          </li>
          <?php ;} ?>
        </ul>
    </div>
  </div>
</div>
  <!-- END OF PROCESSOR DETAILS PANEL -->

  <!-- LINKED SCHOOLS PANEL -->
<div class="row">
  <div class="col-md-12 mb-3">
    <div class="card-header bg-primary text-white">
      <div class="card-title">
        <h4>Used by</h4>
      </div>
    </div>
    <ul class="list-group">
      <?php 
      $x =0;
      if (!empty($processor['School'])):
        foreach ($processor['School'] as $school):
          ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <span><i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $school['name']; ?></span>
          </li>
          <?php 
          $x++;
        endforeach;
      endif;
      if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Linked Schools</li>';}
      ?>
    </ul>
  </div>
</div>
<!-- END OF LINKED SCHOOLS PANEL -->
  <!-- ACCESS BY GROUP PANEL -->
<div class="row">
  <div class="col-md-12 mb-3">
    <div class="card-header bg-primary text-white">
      <div class="card-title">
        <h4>Accessed by</h4>
      </div>
    </div>
    <ul class="list-group">
      <?php 
      $x =0;
      if (!empty($processor['Dataaccessgroup'])):
        foreach ($processor['Dataaccessgroup'] as $group):
          ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <span><i class="fas fa-check-circle text-primary"></i>&nbsp;&nbsp;<?php echo $group['name']; ?></span>
          </li>
          <?php 
          $x++;
        endforeach;
      endif;
      if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Access Groups Defined</li>';}
      ?>
    <li class="card-header bg-primary text-white">
      <div class="card-title">
        <h4>Access notes</h4>
      </div>
    </li>
      <li class="list-group-item justify-content-between text-black card-list-item border-primary">
        <span class="displaytextproperly"><?php echo h($processor['Processor']['accessnotes']); ?></span>
      </li>
    </ul>
  </div>
</div>

<!-- END OF ACCESS BY GROUP PANEL -->

<!-- START OF STUDENT DATA ELEMENTS PANEL -->
<div class="row">
  <div class="col-md-6 mb-3">
    <div class="card-header bg-primary text-white">
      <div class="card-title ">
        <h4>Students: Personal Data</h4>
      </div>
    </div>
    <ul class="list-group">
      <?php 
      $x =0;
      if (!empty($processor['Studentelement'])):
        foreach ($processor['Studentelement'] as $studentelement):
          if($studentelement['sensitivedata'] != 0) {continue;} 
          ?>
          <li class="list-group-item justify-content-between text-black card-list-item border-primary">
            <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $studentelement['name']; ?></span>
          </li>
          <?php 
          $x++; endforeach;
        endif;
        if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Personal Data Processed</span></li>';} 
        ?>
      </ul>
    </div><!-- end col md 6 -->
    <!-- SENSITIVE STUDENT DATA -->
    <div class="col-md-6 mb-3">
      <div class="card-header bg-danger text-white">
        <div class="card-title ">
          <h4>Students: Sensitive Data</h4>
        </div>
      </div>
      <ul class="list-group justify-content-between">
        <?php $x =0; //counters ?>
        <?php if (!empty($processor['Studentelement'])): ?>
          <?php foreach ($processor['Studentelement'] as $studentelement): ?>
            <?php if($studentelement['sensitivedata'] != 1) {continue;} ?>
            <li class="list-group-item justify-content-between card-list-item border-danger">
              <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $studentelement['name']; ?></span>
              <span class="text-yellow"><i class="fas fa-exclamation-triangle"></i></span>
            </li>
            <?php 
            $x++;
          endforeach;
        endif;
        if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-danger"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Sensitive Data Processed</span></li>';} 
        ?>
      </ul>
    </div><!-- end col md 6 -->
  </div>
  <!-- END OF STUDENT DATA ELEMENT PANEL -->

  <!-- LINKED PARENT DATA ELEMENTS -->
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card-header bg-primary text-white">
        <div class="card-title ">
          <h4>Parents: Personal Data</h4>
        </div>
      </div>
      <ul class="list-group">
        <?php 
        $x =0;
        if (!empty($processor['Parentelement'])):
          foreach ($processor['Parentelement'] as $parentelement):
            if($parentelement['sensitivedata'] != 0) {continue;}
            ?>
            <li class="list-group-item justify-content-between text-black card-list-item border-primary">
              <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $parentelement['name']; ?></span>
            </li>
            <?php 
            $x++;
          endforeach;
        endif;
        if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Personal Data Processed</span></li>';} 
        ?>
      </div><!-- end col md 6 -->
      <!-- SENSTIVE PARENT DATA -->
      <div class="col-md-6 mb-3">
        <div class="card-header bg-danger text-white">
          <div class="card-title ">
            <h4>Parents: Sensitive Data</h4>
          </div>
        </div>
        <ul class="list-group">
          <?php 
          $x =0;
          if (!empty($processor['Parentelement'])):
            foreach ($processor['Parentelement'] as $parentelement):
              if($parentelement['sensitivedata'] != 1) {continue;}
              ?>
              <li class="list-group-item justify-content-between card-list-item border-danger">
                <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $parentelement['name']; ?></span>
                <span class="text-yellow"><i class="fas fa-exclamation-triangle"></i></span>
              </li>
              <?php 
              $x++;
            endforeach;
          endif;
          if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-danger"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Sensitive Data Processed</span></li>';} 
          ?>
        </div><!-- end col md 6 -->
      </div>
      <!-- END OF PARENT DATA ELEMENT PANEL -->

      <!-- LINKED STAFF DATA ELEMENTS -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card-header bg-primary text-white">
            <div class="card-title ">
              <h4>Staff: Personal Data</h4>
            </div>
          </div>
          <ul class="list-group">
            <?php 
            $x =0;
            if (!empty($processor['Staffelement'])):
              foreach ($processor['Staffelement'] as $staffelement):
                if($staffelement['sensitivedata'] != 0) {continue;}
                ?>
                <li class="list-group-item justify-content-between text-black card-list-item border-primary">
                  <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $staffelement['name']; ?></span>
                </li>
                <?php 
                $x++;
              endforeach;
            endif;
            if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-primary"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Personal Data Processed</span></li>';} 
            ?>
          </div><!-- end col md 6 -->
          <!-- SENSTIVE PARENT DATA -->
          <div class="col-md-6 mb-3">
            <div class="card-header bg-danger text-white">
              <div class="card-title ">
                <h4>Staff: Sensitive Data</h4>
              </div>
            </div>
            <ul class="list-group">
              <?php 
              $x =0;
              if (!empty($processor['Staffelement'])):
                foreach ($processor['Staffelement'] as $staffelement):
                  if($staffelement['sensitivedata'] != 1) {continue;}
                  ?>
                  <li class="list-group-item justify-content-between card-list-item border-danger">
                    <span><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;<?php echo $staffelement['name']; ?></span>
                    <span class="text-yellow"><i class="fas fa-exclamation-triangle"></i></span>
                  </li>
                  <?php 
                  $x++;
                endforeach;
              endif;
              if($x == 0) {echo '<li class="list-group-item justify-content-between card-list-item border-danger"><span><i class="fas fa-info-circle"></i>&nbsp;&nbsp;No Sensitive Data Processed</span></li>';} 
              ?>
            </div><!-- end col md 6 -->
          </div>
<!-- END OF STAFF DATA ELEMENT PANEL -->