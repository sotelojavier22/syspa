<div class="alumnosmaterias index">
	<h2><?php echo __('Alumnosmaterias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('EstadoMateria'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaRegularizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaAprobacion'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alumnosmaterias as $alumnosmateria): ?>
	<tr>
		<td><?php echo h($alumnosmateria['Alumnosmateria']['id']); ?>&nbsp;</td>
		<td><?php echo h($alumnosmateria['Alumnosmateria']['EstadoMateria']); ?>&nbsp;</td>
		<td><?php echo h($alumnosmateria['Alumnosmateria']['FechaRegularizacion']); ?>&nbsp;</td>
		<td><?php echo h($alumnosmateria['Alumnosmateria']['FechaAprobacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alumnosmateria['Materia']['id'], array('controller' => 'materias', 'action' => 'view', $alumnosmateria['Materia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alumnosmateria['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $alumnosmateria['Alumno']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumnosmateria['Alumnosmateria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumnosmateria['Alumnosmateria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumnosmateria['Alumnosmateria']['id']), array(), __('Are you sure you want to delete # %s?', $alumnosmateria['Alumnosmateria']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
