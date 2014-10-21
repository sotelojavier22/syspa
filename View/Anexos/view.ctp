<div class="anexos view">
<h2><?php echo __('Anexo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AnexoConvenioMarco'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['AnexoConvenioMarco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anexo['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $anexo['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmpresaCUIT'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['EmpresaCUIT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ConvenioFechaAnterior'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['ConvenioFechaAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PorcentajeGastoAnterior'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['PorcentajeGastoAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PagaObraSocialAnterior'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['PagaObraSocialAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PagaSeguroTrabajoAnterior'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['PagaSeguroTrabajoAnterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PagaAsignacionEstimuloAnterior'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['PagaAsignacionEstimuloAnterior']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anexo'), array('action' => 'edit', $anexo['Anexo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anexo'), array('action' => 'delete', $anexo['Anexo']['id']), array(), __('Are you sure you want to delete # %s?', $anexo['Anexo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmantes'), array('controller' => 'firmantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmante'), array('controller' => 'firmantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Firmantes'); ?></h3>
	<?php if (!empty($anexo['Firmante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FirmanteCUIL'); ?></th>
		<th><?php echo __('EmpresaCUIT'); ?></th>
		<th><?php echo __('FirmanteNombre'); ?></th>
		<th><?php echo __('FirmanteApellido'); ?></th>
		<th><?php echo __('FirmanteTelefono'); ?></th>
		<th><?php echo __('FirmanteDireccion'); ?></th>
		<th><?php echo __('FirmanteCorreo'); ?></th>
		<th><?php echo __('FirmanteCargo'); ?></th>
		<th><?php echo __('FirmanteFechaBaja'); ?></th>
		<th><?php echo __('FirmanteDNI'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Anexo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($anexo['Firmante'] as $firmante): ?>
		<tr>
			<td><?php echo $firmante['id']; ?></td>
			<td><?php echo $firmante['FirmanteCUIL']; ?></td>
			<td><?php echo $firmante['EmpresaCUIT']; ?></td>
			<td><?php echo $firmante['FirmanteNombre']; ?></td>
			<td><?php echo $firmante['FirmanteApellido']; ?></td>
			<td><?php echo $firmante['FirmanteTelefono']; ?></td>
			<td><?php echo $firmante['FirmanteDireccion']; ?></td>
			<td><?php echo $firmante['FirmanteCorreo']; ?></td>
			<td><?php echo $firmante['FirmanteCargo']; ?></td>
			<td><?php echo $firmante['FirmanteFechaBaja']; ?></td>
			<td><?php echo $firmante['FirmanteDNI']; ?></td>
			<td><?php echo $firmante['empresa_id']; ?></td>
			<td><?php echo $firmante['anexo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'firmantes', 'action' => 'view', $firmante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'firmantes', 'action' => 'edit', $firmante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'firmantes', 'action' => 'delete', $firmante['id']), array(), __('Are you sure you want to delete # %s?', $firmante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Firmante'), array('controller' => 'firmantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
