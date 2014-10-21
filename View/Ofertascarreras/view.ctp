<div class="ofertascarreras view">
<h2><?php echo __('Ofertascarrera'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ofertascarrera['Ofertascarrera']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oferta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ofertascarrera['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $ofertascarrera['Oferta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ofertascarrera['Carrera']['id'], array('controller' => 'carreras', 'action' => 'view', $ofertascarrera['Carrera']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ofertascarrera'), array('action' => 'edit', $ofertascarrera['Ofertascarrera']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ofertascarrera'), array('action' => 'delete', $ofertascarrera['Ofertascarrera']['id']), array(), __('Are you sure you want to delete # %s?', $ofertascarrera['Ofertascarrera']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarrera'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
	</ul>
</div>
