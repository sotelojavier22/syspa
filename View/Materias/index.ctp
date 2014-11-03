<div class="materias index">
	<h2><?php echo __('Materias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo h($materia['Materia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($materia['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $materia['Carrera']['id'])); ?>
		</td>
		<td><?php echo h($materia['Materia']['materia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materia['Materia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materia['Materia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materia['Materia']['id']), array(), __('Are you sure you want to delete # %s?', $materia['Materia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('controller' => 'alumnosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitosmaterias'), array('controller' => 'requisitosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('controller' => 'requisitosmaterias', 'action' => 'add')); ?> </li>
	</ul>
</div>
