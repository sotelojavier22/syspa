<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), array('action' => 'index')); ?></td>
    <br>
</div>
<div class="areas form">
    <?php echo $this->Form->create('Area'); ?>
    <fieldset>
	<legend><?php echo __('Editar Area'); ?></legend>
        <br>
	<?php
            echo $this->Form->input('id');
            echo $this->Form->input('AreaDescripcion');
	?>
        <br>
    </fieldset>
    <?php echo $this->Form->end(__('Registrar')); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Area.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Area.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
    </ul>
</div>
-->
