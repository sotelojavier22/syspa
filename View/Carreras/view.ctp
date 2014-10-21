<div class="carreras view">
<h2><?php echo __('Carrera'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carrera['Carrera']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($carrera['Carrera']['carrera']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carrera'), array('action' => 'delete', $carrera['Carrera']['id']), array(), __('Are you sure you want to delete # %s?', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarrera'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($carrera['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NroLegajo'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('FechaNacimiento'); ?></th>
		<th><?php echo __('DNI'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('CorreoElectronico'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Suscripcion'); ?></th>
		<th><?php echo __('AlumnoCV'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('CUIL'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($carrera['Alumno'] as $alumno): ?>
		<tr>
			<td><?php echo $alumno['id']; ?></td>
			<td><?php echo $alumno['NroLegajo']; ?></td>
			<td><?php echo $alumno['Apellido']; ?></td>
			<td><?php echo $alumno['Nombre']; ?></td>
			<td><?php echo $alumno['FechaNacimiento']; ?></td>
			<td><?php echo $alumno['DNI']; ?></td>
			<td><?php echo $alumno['Direccion']; ?></td>
			<td><?php echo $alumno['CorreoElectronico']; ?></td>
			<td><?php echo $alumno['Telefono']; ?></td>
			<td><?php echo $alumno['Suscripcion']; ?></td>
			<td><?php echo $alumno['AlumnoCV']; ?></td>
			<td><?php echo $alumno['Password']; ?></td>
			<td><?php echo $alumno['CUIL']; ?></td>
			<td><?php echo $alumno['carrera_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), array(), __('Are you sure you want to delete # %s?', $alumno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Conveniosparticulares'); ?></h3>
	<?php if (!empty($carrera['Conveniosparticulare'])): ?>
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
	<?php foreach ($carrera['Conveniosparticulare'] as $conveniosparticulare): ?>
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
	<h3><?php echo __('Related Ofertascarreras'); ?></h3>
	<?php if (!empty($carrera['Ofertascarrera'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($carrera['Ofertascarrera'] as $ofertascarrera): ?>
		<tr>
			<td><?php echo $ofertascarrera['id']; ?></td>
			<td><?php echo $ofertascarrera['oferta_id']; ?></td>
			<td><?php echo $ofertascarrera['carrera_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ofertascarreras', 'action' => 'view', $ofertascarrera['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ofertascarreras', 'action' => 'edit', $ofertascarrera['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ofertascarreras', 'action' => 'delete', $ofertascarrera['id']), array(), __('Are you sure you want to delete # %s?', $ofertascarrera['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ofertascarrera'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
