<div class="tutores view">
<h2><?php echo __('Tutore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DNI'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['DNI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TutorEmail'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['TutorEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TutorTelefono'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['TutorTelefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TutorCargo'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['TutorCargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ApellidoNombre'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['ApellidoNombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CUIL'); ?></dt>
		<dd>
			<?php echo h($tutore['Tutore']['CUIL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tutore'), array('action' => 'edit', $tutore['Tutore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tutore'), array('action' => 'delete', $tutore['Tutore']['id']), array(), __('Are you sure you want to delete # %s?', $tutore['Tutore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tutores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tutore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conveniosparticulares'); ?></h3>
	<?php if (!empty($tutore['Conveniosparticulare'])): ?>
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
	<?php foreach ($tutore['Conveniosparticulare'] as $conveniosparticulare): ?>
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
