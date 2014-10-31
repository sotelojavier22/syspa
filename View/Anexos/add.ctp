<div class="anexos form">
<?php echo $this->Form->create('Anexo'); ?>
	<fieldset>
		<legend><?php echo __('Add Anexo'); ?></legend>
	<?php
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
