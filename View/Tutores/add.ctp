<div class="tutores form">
<?php echo $this->Form->create('Tutore'); ?>
	<fieldset>
		<legend><?php echo __('Add Tutore'); ?></legend>
	<?php
		echo $this->Form->input('DNI');
		echo $this->Form->input('TutorEmail');
		echo $this->Form->input('TutorTelefono');
		echo $this->Form->input('TutorCargo');
		echo $this->Form->input('ApellidoNombre');
		echo $this->Form->input('CUIL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tutores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conveniosparticulares'), array('controller' => 'conveniosparticulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conveniosparticulare'), array('controller' => 'conveniosparticulares', 'action' => 'add')); ?> </li>
	</ul>
</div>
