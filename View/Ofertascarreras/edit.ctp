<div class="ofertascarreras form">
<?php echo $this->Form->create('Ofertascarrera'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ofertascarrera'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('oferta_id');
		echo $this->Form->input('carrera_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ofertascarrera.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ofertascarrera.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
	</ul>
</div>
