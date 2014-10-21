<div class="firmantes form">
<h2>Editar Firmante</h2>
<?php echo $this->Form->create('Firmante'); ?>
<?php
					echo $this->Form->hidden('id');?>
<fieldset>
		<legend><?php echo __('Nuevo Firmante'); ?></legend>
		<table>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('FirmanteCUIL',array('label'=>'CUIL: '));?>
			</td>
			<td class="mitd">
				<?php
					echo $this->Form->input('FirmanteCargo',array('label'=>'Cargo '));?>
					
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FirmanteNombre',array('label'=>'Nombre'));?>

				
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FirmanteApellido',array('label'=>'Apellido '));?>

			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FirmanteTelefono',array('label'=>'Teléfono'));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FirmanteDireccion',array('label'=>'Dirección '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FirmanteCorreo',array('label'=>'E-mail '));?>
			</td>
			<td class="mitd">
				
			</td>
		</tr>
		<tr>
			<td class="mitd">
			 	<?php echo $this->Form->input('empresa_id');?>
				
			</td>
			<td class="mitd">
				<?php //echo $this->Form->input('anexo_id');?>
			</td>
		</tr>
		</table>
</fieldset>
<fieldset></fieldset>
	
<?php echo $this->Form->end(__('Registrar')); ?>
<br>
<br>
<br>
<br>
<br>
</div>
