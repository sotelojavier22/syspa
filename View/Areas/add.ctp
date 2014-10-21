<div class="actions" align="right">
    <br>
    <ul>
	<td><?php echo $this->Html->link(__('<<Volver'), array('action' => 'index')); ?></td>
    </ul>
</div>
<div class="areas form">
    <?php echo $this->Form->create('Area'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Area'); ?></legend>
        <br>
        <?php echo $this->Form->input('AreaDescripcion');?>
        <br>
    </fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>	
    <br>
    <br>
    <br>
    <br>	
</div>
