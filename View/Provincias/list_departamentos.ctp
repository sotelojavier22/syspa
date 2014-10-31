<?php $this->Html->script('views/Provincias/list_models.js', array('inline' => FALSE)); ?>

<?php
  echo $this->Form->input('Car.name', array('empty' => 'Select One', 'options' => $nombre, 'id' => 'car-name'));
?>

<div id=&quot;car-models&quot; style=&quot;display: none;&quot;>
  <?php echo $this->Form->input('Departamento.nombre', array('type' => 'select', 'id' => 'car-model-name')); ?>
</div>