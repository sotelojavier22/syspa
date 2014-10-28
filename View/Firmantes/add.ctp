<div class="firmantes form">
<?php echo $this->Form->create('Firmante'); ?>
	<h2><?php echo 'Registrar Firmante'?></h2>

	<br>
	<fieldset>
		<legend><?php echo __('Datos del Firmante'); ?></legend>
		<table>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('FirmanteCUIL',array('label'=>'CUIL: ','style'=>"width:107px;"));?>
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
			 	<?php echo $this->Form->hidden('empresa_id',array('value'=>$empresa_id,'default'=>$empresa_id)); ?>
				
			</td>
			<td class="mitd">
				<?php //echo $this->Form->input('EmpresaCUIT',array('value'=>$empresa_id)); ?>
			</td>
		</tr>
		</table>

	</fieldset>
<?php echo $this->Form->end(__('Registrar')); ?>
<br>
<br>
<br>
<br>
<br>
</div>

