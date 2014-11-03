<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?></td>
    <br>
</div>
<div class="ofertas form">
    <?php echo $this->Form->create('Oferta'); ?>
    <fieldset>
        <legend><?php echo __('Editar Oferta'); ?></legend>
	<?php echo $this->Form->input('empresa_id');?>
        <br>        
        <?php echo $this->Form->input('id');?>
           <td>
            	<?php 
                    echo "Vigencia desde: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('OfertaVigenciaDesde',array(
			'label' => 'OfertaVigenciaDesde',
			'class'=>'datepicker',
			'style'=>"width:76px;"
                                )
                            );
		?>
            </td>    
            <br>
            <br>
            <td>
                <?php 
                    echo "Vigencia hasta: <b>(YYYY-MM-DD)</b> ".$this->Form->inputText('OfertaVigenciaHasta',array(
			'label' => 'OfertaVigenciaHasta',
			'class'=>'datepicker',
			'style'=>"width:76px;"
                                )
                            );
		?>
            </td>
            <br>
         <br>
	<?php echo $this->Form->input('OfertaDescripcion',array('rows' => 3));?>
        <br>
    </fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
   <script>
        $(function() {
        $( "#datepicker" ).datepicker();
        });
    </script>    
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
