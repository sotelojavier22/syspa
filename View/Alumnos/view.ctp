<div class="alumnos view">
<h2><?php echo __('Alumno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NroLegajo'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['NroLegajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['FechaNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DNI'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['DNI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorreoElectronico'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['CorreoElectronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suscripcion'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Suscripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AlumnoCV'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['AlumnoCV']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CUIL'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['CUIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alumno['Carrera']['id'], array('controller' => 'carreras', 'action' => 'view', $alumno['Carrera']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alumno'), array('action' => 'edit', $alumno['Alumno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alumno'), array('action' => 'delete', $alumno['Alumno']['id']), array(), __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Alumnosmaterias'); ?></h3>
	<?php if (!empty($alumno['Alumnosmateria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('EstadoMateria'); ?></th>
		<th><?php echo __('FechaRegularizacion'); ?></th>
		<th><?php echo __('FechaAprobacion'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumno['Alumnosmateria'] as $alumnosmateria): ?>
		<tr>
			<td><?php echo $alumnosmateria['id']; ?></td>
			<td><?php echo $alumnosmateria['EstadoMateria']; ?></td>
			<td><?php echo $alumnosmateria['FechaRegularizacion']; ?></td>
			<td><?php echo $alumnosmateria['FechaAprobacion']; ?></td>
			<td><?php echo $alumnosmateria['materia_id']; ?></td>
			<td><?php echo $alumnosmateria['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnosmaterias', 'action' => 'view', $alumnosmateria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnosmaterias', 'action' => 'edit', $alumnosmateria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnosmaterias', 'action' => 'delete', $alumnosmateria['id']), array(), __('Are you sure you want to delete # %s?', $alumnosmateria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumnosmateria'), array('controller' => 'alumnosmaterias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Conveniosparticulares'); ?></h3>
	<?php if (!empty($alumno['Conveniosparticulare'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaInicio'); ?></th>
		<th><?php echo __('FechaFin'); ?></th>
		<th><?php echo __('ImporteAsignacionEstimulo'); ?></th>
		<th><?php echo __('NombreART'); ?></th>
		<th><?php echo __('ImporteArt'); ?></th>
		<th><?php echo __('NombreObraSocial'); ?></th>
		<th><?php echo __('ImporteObraSocial'); ?></th>
		<th><?php echo __('FechaCancelacion'); ?></th>
		<th><?php echo __('MotivoCancelacion'); ?></th>
		<th><?php echo __('EvaluacionAlumno'); ?></th>
		<th><?php echo __('FechaFirmaConvenio'); ?></th>
		<th><?php echo __('ArchivoCP'); ?></th>
		<th><?php echo __('FechaAltaObraSocial'); ?></th>
		<th><?php echo __('PagaAsignacionEstumulo'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th><?php echo __('Tutore Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumno['Conveniosparticulare'] as $conveniosparticulare): ?>
		<tr>
			<td><?php echo $conveniosparticulare['id']; ?></td>
			<td><?php echo $conveniosparticulare['FechaInicio']; ?></td>
			<td><?php echo $conveniosparticulare['FechaFin']; ?></td>
			<td><?php echo $conveniosparticulare['ImporteAsignacionEstimulo']; ?></td>
			<td><?php echo $conveniosparticulare['NombreART']; ?></td>
			<td><?php echo $conveniosparticulare['ImporteArt']; ?></td>
			<td><?php echo $conveniosparticulare['NombreObraSocial']; ?></td>
			<td><?php echo $conveniosparticulare['ImporteObraSocial']; ?></td>
			<td><?php echo $conveniosparticulare['FechaCancelacion']; ?></td>
			<td><?php echo $conveniosparticulare['MotivoCancelacion']; ?></td>
			<td><?php echo $conveniosparticulare['EvaluacionAlumno']; ?></td>
			<td><?php echo $conveniosparticulare['FechaFirmaConvenio']; ?></td>
			<td><?php echo $conveniosparticulare['ArchivoCP']; ?></td>
			<td><?php echo $conveniosparticulare['FechaAltaObraSocial']; ?></td>
			<td><?php echo $conveniosparticulare['PagaAsignacionEstumulo']; ?></td>
			<td><?php echo $conveniosparticulare['oferta_id']; ?></td>
			<td><?php echo $conveniosparticulare['empresa_id']; ?></td>
			<td><?php echo $conveniosparticulare['alumno_id']; ?></td>
			<td><?php echo $conveniosparticulare['carrera_id']; ?></td>
			<td><?php echo $conveniosparticulare['tutore_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conveniosparticulares', 'action' => 'view', $conveniosparticulare['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conveniosparticulares', 'action' => 'edit', $conveniosparticulare['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conveniosparticulares', 'action' => 'delete', $conveniosparticulare['id']), array(), __('Are you sure you want to delete # %s?', $conveniosparticulare['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Postulaciones'); ?></h3>
	<?php if (!empty($alumno['Postulacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaPostulacion'); ?></th>
		<th><?php echo __('FechaSeleccion'); ?></th>
		<th><?php echo __('CumpleRequisitosAcademicos'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumno['Postulacione'] as $postulacione): ?>
		<tr>
			<td><?php echo $postulacione['id']; ?></td>
			<td><?php echo $postulacione['FechaPostulacion']; ?></td>
			<td><?php echo $postulacione['FechaSeleccion']; ?></td>
			<td><?php echo $postulacione['CumpleRequisitosAcademicos']; ?></td>
			<td><?php echo $postulacione['alumno_id']; ?></td>
			<td><?php echo $postulacione['oferta_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postulaciones', 'action' => 'view', $postulacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postulaciones', 'action' => 'edit', $postulacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postulaciones', 'action' => 'delete', $postulacione['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
