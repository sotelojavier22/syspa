<div class="requisitoscompetencias view">
<h2><?php echo __('Requisitoscompetencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requisitoscompetencia['Requisitoscompetencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oferta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisitoscompetencia['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $requisitoscompetencia['Oferta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competencia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($requisitoscompetencia['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $requisitoscompetencia['Competencia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisitoscompetencia'), array('action' => 'edit', $requisitoscompetencia['Requisitoscompetencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisitoscompetencia'), array('action' => 'delete', $requisitoscompetencia['Requisitoscompetencia']['id']), array(), __('Are you sure you want to delete # %s?', $requisitoscompetencia['Requisitoscompetencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
