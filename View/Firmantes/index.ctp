<div class="firmantes index">
	<h2><?php echo __('Firmantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteCUIL'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpresaCUIT'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteNombre'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteApellido'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteTelefono'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteDireccion'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteCorreo'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteCargo'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteFechaBaja'); ?></th>
			<th><?php echo $this->Paginator->sort('FirmanteDNI'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($firmantes as $firmante): ?>
	<tr>
		<td><?php echo h($firmante['Firmante']['id']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteCUIL']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['EmpresaCUIT']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteNombre']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteApellido']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteTelefono']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteDireccion']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteCorreo']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteCargo']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteFechaBaja']); ?>&nbsp;</td>
		<td><?php echo h($firmante['Firmante']['FirmanteDNI']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($firmante['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $firmante['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($firmante['Anexo']['id'], array('controller' => 'anexos', 'action' => 'view', $firmante['Anexo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $firmante['Firmante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $firmante['Firmante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $firmante['Firmante']['id']), array(), __('Are you sure you want to delete # %s?', $firmante['Firmante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Firmante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('controller' => 'anexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('controller' => 'anexos', 'action' => 'add')); ?> </li>
	</ul>
</div>
