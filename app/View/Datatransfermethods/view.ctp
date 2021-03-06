<div class="datatransfermethods view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Datatransfermethod'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Datatransfermethod'), array('action' => 'edit', $datatransfermethod['Datatransfermethod']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Datatransfermethod'), array('action' => 'delete', $datatransfermethod['Datatransfermethod']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $datatransfermethod['Datatransfermethod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Datatransfermethods'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Datatransfermethod'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($datatransfermethod['Datatransfermethod']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Method'); ?></th>
		<td>
			<?php echo h($datatransfermethod['Datatransfermethod']['method']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Processors'); ?></h3>
	<?php if (!empty($datatransfermethod['Processor'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Purpose'); ?></th>
		<th><?php echo __('Lawfulreason Id'); ?></th>
		<th><?php echo __('Processingfrequency'); ?></th>
		<th><?php echo __('Accessedby'); ?></th>
		<th><?php echo __('Retention'); ?></th>
		<th><?php echo __('Processinglocation'); ?></th>
		<th><?php echo __('Gdprcontractinfo'); ?></th>
		<th><?php echo __('Gdprcompliant'); ?></th>
		<th><?php echo __('Privacystatement'); ?></th>
		<th><?php echo __('Gdprstatement'); ?></th>
		<th><?php echo __('Datatransfermethod Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($datatransfermethod['Processor'] as $processor): ?>
		<tr>
			<td><?php echo $processor['id']; ?></td>
			<td><?php echo $processor['name']; ?></td>
			<td><?php echo $processor['supplier_id']; ?></td>
			<td><?php echo $processor['purpose']; ?></td>
			<td><?php echo $processor['lawfulreason_id']; ?></td>
			<td><?php echo $processor['processingfrequency']; ?></td>
			<td><?php echo $processor['accessedby']; ?></td>
			<td><?php echo $processor['retention']; ?></td>
			<td><?php echo $processor['processinglocation']; ?></td>
			<td><?php echo $processor['gdprcontractinfo']; ?></td>
			<td><?php echo $processor['gdprcompliant']; ?></td>
			<td><?php echo $processor['privacystatement']; ?></td>
			<td><?php echo $processor['gdprstatement']; ?></td>
			<td><?php echo $processor['datatransfermethod_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'processors', 'action' => 'view', $processor['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'processors', 'action' => 'edit', $processor['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'processors', 'action' => 'delete', $processor['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $processor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Processor'), array('controller' => 'processors', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
