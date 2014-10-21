<div align="right">
    <br>
    <?php echo $this->Html->link(__('<<Volver'), array('action' => 'index')); ?>
    <br>
</div>
<div class="competencias form">
    <?php echo $this->Form->create('Competencia'); ?>
    <fieldset>
        <legend><?php echo __('Editar Competencia'); ?></legend>
        <br>
        <?php echo $this->Form->input('id');?>
        <td><?php echo $this->Form->input('CompetenciaNombre');?></td> 
        <br>
        <td><?php echo $this->Form->input('area_id');?></td>
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
        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competencia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Competencia.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('controller' => 'requisitoscompetencias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
    </ul>
</div>
-->
