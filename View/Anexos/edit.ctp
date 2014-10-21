<div class="anexos form">
<?php echo $this->Form->create('Anexo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Anexo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('AnexoConvenioMarco');
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('EmpresaCUIT');
		echo $this->Form->input('ConvenioFechaAnterior');
		echo $this->Form->input('PorcentajeGastoAnterior');
		echo $this->Form->input('PagaObraSocialAnterior');
		echo $this->Form->input('PagaSeguroTrabajoAnterior');
		echo $this->Form->input('PagaAsignacionEstimuloAnterior');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Anexo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Anexo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmantes'), array('controller' => 'firmantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmante'), array('controller' => 'firmantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
