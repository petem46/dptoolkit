<div class="dataaccessgroupsProcessors view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Dataaccessgroups Processor'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Dataaccessgroups Processor'), array('action' => 'edit', $dataaccessgroupsProcessor['DataaccessgroupsProcessor']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Dataaccessgroups Processor'), array('action' => 'delete', $dataaccessgroupsProcessor['DataaccessgroupsProcessor']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $dataaccessgroupsProcessor['DataaccessgroupsProcessor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Dataaccessgroups Processors'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Dataaccessgroups Processor'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Dataaccessgroups'), array('controller' => 'dataaccessgroups', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Dataaccessgroup'), array('controller' => 'dataaccessgroups', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Processors'), array('controller' => 'processors', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Processor'), array('controller' => 'processors', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Dataaccessgroup'); ?></th>
		<td>
			<?php echo $this->Html->link($dataaccessgroupsProcessor['Dataaccessgroup']['name'], array('controller' => 'dataaccessgroups', 'action' => 'view', $dataaccessgroupsProcessor['Dataaccessgroup']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Processor'); ?></th>
		<td>
			<?php echo $this->Html->link($dataaccessgroupsProcessor['Processor']['name'], array('controller' => 'processors', 'action' => 'view', $dataaccessgroupsProcessor['Processor']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

