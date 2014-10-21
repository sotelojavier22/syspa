<div class="anexos index">
	<h2><?php echo __('Anexos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('AnexoConvenioMarco'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('EmpresaCUIT'); ?></th>
			<th><?php echo $this->Paginator->sort('ConvenioFechaAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('PorcentajeGastoAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('PagaObraSocialAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('PagaSeguroTrabajoAnterior'); ?></th>
			<th><?php echo $this->Paginator->sort('PagaAsignacionEstimuloAnterior'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($anexos as $anexo): ?>
	<tr>
		<td><?php echo h($anexo['Anexo']['id']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['AnexoConvenioMarco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($anexo['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $anexo['Empresa']['id'])); ?>
		</td>
		<td><?php echo h($anexo['Anexo']['EmpresaCUIT']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['ConvenioFechaAnterior']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['PorcentajeGastoAnterior']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['PagaObraSocialAnterior']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['PagaSeguroTrabajoAnterior']); ?>&nbsp;</td>
		<td><?php echo h($anexo['Anexo']['PagaAsignacionEstimuloAnterior']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $anexo['Anexo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $anexo['Anexo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $anexo['Anexo']['id']), array(), __('Are you sure you want to delete # %s?', $anexo['Anexo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Anexo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmantes'), array('controller' => 'firmantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmante'), array('controller' => 'firmantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
