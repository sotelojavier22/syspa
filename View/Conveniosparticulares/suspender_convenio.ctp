<h1>Suspender Convenio Particular</h1>
<?php echo $this->Form->create('Conveniosparticulare'); ?>
<br>
<?php
					echo $this->Form->hidden('id');?>
<table>
<tr>
<td class="mitdLeft">
<dl>
		<dt><?php echo __('Empresa'); ?></dt>
			<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Empresa']['EmpresaRazonSocial']); ?>&nbsp;</dd>
		<dt><?php echo __('Legajo alumno'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Alumno']['NroLegajo']); ?>&nbsp;</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp	<?php echo h($conveniosparticulare['Carrera']['carrera']); ?>&nbsp;</dd>
		<dt><?php echo __('Fecha del convenio'); ?></dt>
		<dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<?php echo h($conveniosparticulare['Conveniosparticulare']['FechaFirmaConvenio']); ?>
			&nbsp;
		</dd>
</dl>
</td>
</tr>
</table>

<fieldset>
<legend>Suspención</legend>

<?php 
	echo $this->Form->input('FechaCancelacion',array('label'=>'Fecha de baja'));
	?><h4>Motivo: </h4>	<?php
	echo $this->Form->textarea('MotivoCancelacion'); ?>
	
	
</fieldset>
<?php echo $this->Form->end('suspender');
	
?>
<br>
<br>
<br>
<br>
<br>
