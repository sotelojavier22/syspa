<div class="empresas form">
<?php echo $this->Form->create('Empresa'); 


?>
<script>
  $(function() {
    
 //Array para dar formato en español
		  $.datepicker.regional['es'] = 
		  {
		  closeText: 'Cerrar', 
		  prevText: 'Previo', 
		  nextText: 'Próximo',
		  
		  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		  'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		  monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		  'Jul','Ago','Sep','Oct','Nov','Dic'],
		  monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
		  dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		  dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
		  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
		  dateFormat: 'yy-mm-dd', firstDay: 0, 
		  initStatus: 'Selecciona la fecha', isRTL: false};
 		$.datepicker.setDefaults($.datepicker.regional['es']);
 
 		//miDate: fecha de comienzo D=días | M=mes | Y=año
 		//maxDate: fecha tope D=días | M=mes | Y=año
    $( "#datepicker" ).datepicker({ minDate: "-1D", maxDate: "+1M +10D" });
  });
  </script>
 
<h1><?php echo __('Nueva Empresa'); ?></h1>
<br>
	<fieldset >
		<legend><b>Datos de la empresa</b></legend>
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
		</fieldset>
		
		<br>
		<fieldset>
		<legend ><b>Datos del contácto </b></legend>
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
		</fieldset>	
		<br>
		<?php   ?>
		<fieldset>	
				<br>
		
		<table>
		<legend >Datos del Convenio Marco</legend>
			<tr>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteNombre',array('label'=>'Representante Nombre: '));?>
				</td>
				<td class="mitd">
					<?php echo $this->Form->input('RepresentanteDNI',array('label'=>' Representante DNI: ',  'style'=>"width:87px;"));?>
				</td>
			

			</tr>
			<tr>
				<td class="mitd">
				
				
				<?php 
				echo "Fecha del convenio: ".$this->Form->inputText('ConvenioFecha',array(
					'label'=>' ConvenioFecha ',
					'id'=>'datepicker',

					));
				?>
				<Script> 
					$(function () { 
       				$("#datepicker")datepicker();. 
					}); 
				</script>
				</div>	
				       
				</div>


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
	</fieldset>


<?php echo $this->Form->end(__('Registrar')); ?>
		


		
<br>
<br>
<br>
<br>
<br>
</div>

