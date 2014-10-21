<div class="alumnos index">
	<h2><?php echo __('Alumnos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('NroLegajo'); ?></th>
			<th><?php echo $this->Paginator->sort('Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaNacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('DNI'); ?></th>
			<th><?php echo $this->Paginator->sort('Direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('CorreoElectronico'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('Suscripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('AlumnoCV'); ?></th>
			<th><?php echo $this->Paginator->sort('Password'); ?></th>
			<th><?php echo $this->Paginator->sort('CUIL'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['id']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['NroLegajo']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Apellido']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['FechaNacimiento']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['DNI']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Direccion']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['CorreoElectronico']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Telefono']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Suscripcion']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['AlumnoCV']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['Password']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['CUIL']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alumno['Carrera']['id'], array('controller' => 'carreras', 'action' => 'view', $alumno['Carrera']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumno['Alumno']['id']), array(), __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('controller' => 'alumnosmaterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postulaciones'), array('controller' => 'postulaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
