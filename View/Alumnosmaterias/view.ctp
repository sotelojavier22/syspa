<div class="alumnosmaterias view">
<h2><?php echo __('Alumnosmateria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alumnosmateria['Alumnosmateria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EstadoMateria'); ?></dt>
		<dd>
			<?php echo h($alumnosmateria['Alumnosmateria']['EstadoMateria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaRegularizacion'); ?></dt>
		<dd>
			<?php echo h($alumnosmateria['Alumnosmateria']['FechaRegularizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAprobacion'); ?></dt>
		<dd>
			<?php echo h($alumnosmateria['Alumnosmateria']['FechaAprobacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alumnosmateria['Materia']['id'], array('controller' => 'materias', 'action' => 'view', $alumnosmateria['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alumnosmateria['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $alumnosmateria['Alumno']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alumnosmateria'), array('action' => 'edit', $alumnosmateria['Alumnosmateria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alumnosmateria'), array('action' => 'delete', $alumnosmateria['Alumnosmateria']['id']), array(), __('Are you sure you want to delete # %s?', $alumnosmateria['Alumnosmateria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnosmaterias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
