<div class="tutores index">
	<h2><?php echo __('Tutores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('DNI'); ?></th>
			<th><?php echo $this->Paginator->sort('TutorEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('TutorTelefono'); ?></th>
			<th><?php echo $this->Paginator->sort('TutorCargo'); ?></th>
			<th><?php echo $this->Paginator->sort('ApellidoNombre'); ?></th>
			<th><?php echo $this->Paginator->sort('CUIL'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tutores as $tutore): ?>
	<tr>
		<td><?php echo h($tutore['Tutore']['id']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['DNI']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['TutorEmail']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['TutorTelefono']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['TutorCargo']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['ApellidoNombre']); ?>&nbsp;</td>
		<td><?php echo h($tutore['Tutore']['CUIL']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tutore['Tutore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tutore['Tutore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tutore['Tutore']['id']), array(), __('Are you sure you want to delete # %s?', $tutore['Tutore']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tutore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
