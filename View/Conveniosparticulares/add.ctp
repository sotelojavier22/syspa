<div class="conveniosparticulares form">
<?php echo $this->Form->create('Conveniosparticulare'); ?>

<h1><?php echo __('Nuevo Convenio'); ?></h1>
<br>

<table>
<tr >
	<td class="mitd2">
		 					<p><b>Seleccionar</b></p>
	</td>	
		 				
		 	<td class="mitd2">
		 					<?php 
							
		 						echo $this->Form->input('empresa_id');
							?>
		 				</td>
		 				<td class="mitd2" >
		 					<?php 
		 						echo $this->Form->input('alumno_id',array('label'=>'Legajo Alumno'));
		 					?>
		 				</td>		
			<td class="mitd2" >
		 					<?php 
		 						echo $this->Form->input('carrera_id');
		 					?>
		 				</td>	
						
	
	</tr>
</table>

	
<br>	
	<fieldset>
		<legend><?php echo __('Datos Convenio particular'); ?></legend>
	<table>	
	
		
	</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FechaFirmaConvenio');?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FechaAltaObraSocial');?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('FechaInicio',array('label'=>'Fecha de inicio: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('FechaFin',array('label'=>'Fecha de fin: '));?>
			</td>
		</tr>
	    <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreObraSocial',array('label'=>'Obra social: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteObraSocial',array('label'=>'Importe obra social: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
		 <tr>
			<td class="mitd">
				<?php echo $this->Form->input('NombreART',array('label'=>'ART: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteArt',array('label'=>'Importe ART: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
		<tr>
			<td class="mitd">
				<?php echo $this->Form->input('PagaAsignacionEstumulo',array('label'=>'Paga asignacion estimulo: '));?>
			</td>
			<td class="mitd">
				<?php echo $this->Form->input('ImporteAsignacionEstimulo',array('label'=>'Importe asignacion estimulo: ', 'style'=>"width:107px;"));?>
			</td>
		</tr>
			
			<?php
			
				
				
				
			
				
				
				
				//echo $this->Form->input('EvaluacionAlumno'); VER DONDE LO PONGO
				
				//echo $this->Form->input('ArchivoCP'); VER PARA QUE ES ESTO
				
				
				echo $this->Form->input('oferta_id');
				//echo $this->Form->input('empresa_id');
				//echo $this->Form->input('alumno_id');
				//echo $this->Form->input('carrera_id');
				echo $this->Form->input('tutore_id');
			?>
		
	</table>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
