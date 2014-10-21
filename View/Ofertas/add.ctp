<div class="actions" align="right">    
    <td>
        <?php echo $this->Html->link(__('<< Volver'), 
            array('controller' => 'Empresas', 'action' => 'index')); ?>
    </td>
</div>

<div class="ofertas form">
    <?php echo $this->Form->create('Oferta'); ?>
	<fieldset>
            <legend><?php echo __('Agregar Oferta'); ?></legend>
            <br>
            <td><?php echo $this->Form->input('OfertaVigenciaDesde',
                    array('label' => 'Vigencia Desde',
                          'dateFormat' => 'DMY'
                    ));?></td>
            <br>
            <td><?php echo $this->Form->input('OfertaVigenciaHasta',
                    array('label' => 'Vigencia Hasta',
                         'dateFormat' => 'DMY'  
                        ));?></td>
            <br>
            <td><?php echo $this->Form->input('OfertaDescripcion',array('label' => 'Descripción','rows' => 3));?></td>
            <br>
            <td><?php echo $this->Form->input('empresa_id');?></td>
            <br>
	</fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarrera'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postulaciones'), array('controller' => 'postulaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('controller' => 'requisitoscompetencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
