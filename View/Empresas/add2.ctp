<div class="empresas form">

<h1><?php echo __('Nueva Empresa'); ?></h1>

<?php echo $this->Form->create('Empresa'); 


?>

 <div id="accordion">
  <h3>Datos de la empresa</h3>
  <div>
    <table>
		<tr>
			<td class="mitd">
				<?php
					echo $this->Form->input('EmpresaCUIT',array('label'=>'CUIT: ', 'style'=>"width:107px;"));?>
			</td>
			<td class="mitd">
				<?php
					echo $this->Form->input('EmpresaRazonSocial',array('label'=>'Razón Social: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaActividad',array('label'=>'Actividad: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaDireccion',array('label'=>'Dirección: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaCorreo',array('label'=>'Correo: ')); ?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('EmpresaTelefono',array('label'=>'Teléfono: '));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('PorcentajeGasto',array('label'=>'Porcentaje Gasto: (%)', 'default' =>5, 'min'=>0, 'max'=>5));?>
			</td>
			
		</tr>
		</table>
  </div>
  <h3>Datos del Contacto</h3>
  <div>
   <table>
			<tr>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoNombre',array('label'=>'Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoTelefono',array('label'=>'Teléfono: '));?>
				</td>
			</tr>
			<tr>
				<td class="mitd">
					<?php ?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('ContactoCorreo',array('label'=>'Correo: '));?>
				</td>
			</tr>
		</table>
  </div>
  <h3>Datos del Convenio</h3>
  <div>
    <tr>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteNombre',array('label'=>'Representante Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteDNI',array('label'=>' Representante DNI: ',  'style'=>"width:76px;"));?>
				</td>
			

			</tr>
			<tr>
				<td class="mitd">
				
				
				<?php 
				echo "Fecha del convenio: ".$this->Form->inputText('ConvenioFecha',array(
					'label'=>' ConvenioFecha ',
					'id'=>'datepicker',
					'style'=>"width:76px;",

					));
				?>
				<Script> 
					$(function () { 
       				$("#datepicker")datepicker();. 
					}); 
				</script>
				</td>	
							
			</tr>	
		</table>
		<table>
		<tr>	
						<td class="mitd">
							<small>¿Paga obra social?</small><?php echo $this->Form->checkbox('PagaObraSocial');?>
							
						</td>
						<td class="mitd">

							<small>¿Paga seguro de trabajo?</small><?php echo $this->Form->checkbox('PagaSeguroTrabajo');?>
							
						</td>

						<td class="mitd">
							<small>¿Paga ellos Asignacion estímilo?</small><?php echo $this->Form->checkbox('PagaAsignacionEstimulo');?>
						</td>	
				</tr>
				</table>
  </div>
</div>
 
<script>
$( "#accordion" ).accordion();
</script>

<?php echo $this->Form->end(__('Registrar')); ?>


		


		
<br>
<br>
<br>
<br>
<br>
</div>

