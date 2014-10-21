<div class="alumnos form">
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend><?php echo __('Add Alumno'); ?></legend>
	<?php
		echo $this->Form->input('NroLegajo');
		echo $this->Form->input('Apellido');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('FechaNacimiento');
		echo $this->Form->input('DNI');
		echo $this->Form->input('Direccion');
		echo $this->Form->input('CorreoElectronico');
		echo $this->Form->input('Telefono');
		echo $this->Form->input('Suscripcion');
		echo $this->Form->input('AlumnoCV');
		echo $this->Form->input('Password');
		echo $this->Form->input('CUIL');
		echo $this->Form->input('carrera_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?></li>
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
