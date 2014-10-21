<div class="alumnosmaterias form">
<?php echo $this->Form->create('Alumnosmateria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alumnosmateria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('EstadoMateria');
		echo $this->Form->input('FechaRegularizacion');
		echo $this->Form->input('FechaAprobacion');
		echo $this->Form->input('materia_id');
		echo $this->Form->input('alumno_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alumnosmateria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Alumnosmateria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
