<div class="firmantes view">
<table>
	<tr>
		<td class="mitdBotton">
				<?php 
				echo $this->html->image("mi_form/edit.png", array(
			    		"alt" => "Agregar",
			    		'title'=>"Editar Firmante",
			    		'url' => array('action' => 'edit', $firmante['Firmante']['id']))); ?>	

		
	</tr>
</table>

<fieldset>
<legend><?php echo "Firmante" ?></legend>
<legend><?php echo h($firmante['Empresa']['EmpresaRazonSocial']); ?></legend>
<dl>
<table cellspacing="2" >
<tr >
	<td class="mitdLeft">
		<dt><?php echo __('CUIL'); ?></dt>
		<dd><h3>
			<?php echo h($firmante['Firmante']['FirmanteCUIL']); ?>
			</h3>
		</dd>
		<br>
	</td>
<tr>
	<td class="mitdLeft">
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteNombre']); ?>
			
		</dd>

		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteTelefono']); ?>
			
		</dd>

		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteCorreo']); ?>
			
		</dd>

		<dt><?php echo __('Fecha de Baja'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteFechaBaja']); ?>
		
		</dd>
	</td>
	</td>
	<td class="mitdLeft">
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteApellido']); ?>
			
		</dd>

		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteDireccion']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteCargo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('DNI'); ?></dt>
		<dd>
			<?php echo h($firmante['Firmante']['FirmanteDNI']); ?>
			&nbsp;
		</dd>
	</td>
</tr>
</table>		
</dl>
</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firmante'), array('action' => 'edit', $firmante['Firmante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firmante'), array('action' => 'delete', $firmante['Firmante']['id']), array(), __('Are you sure you want to delete # %s?', $firmante['Firmante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Firmantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firmante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('controller' => 'anexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('controller' => 'anexos', 'action' => 'add')); ?> </li>
	</ul>
</div>
