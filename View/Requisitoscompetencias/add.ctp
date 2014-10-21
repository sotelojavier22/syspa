<div class="requisitoscompetencias form">
    <?php echo $this->Form->create('Requisitoscompetencia'); ?>
	<fieldset>
            <legend><?php echo __('Add Requisitoscompetencia'); ?></legend>
            <?php
                echo $this->Form->input('oferta_id');
                echo $this->Form->input('competencia_id');
            ?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
    </ul>
</div>
