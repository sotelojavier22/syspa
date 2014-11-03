<div class="requisitosmaterias index">
	<h2><?php echo __('Requisitosmaterias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('RequisitoMateriaCondicion'); ?></th>
			<th><?php echo __('ofertascarreras_id'); ?></th>
			<th><?php echo __('materia_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $requisitosmateria): ?>
	<tr>
		<td><?php echo h($requisitosmateria['Requisitosmateria']['id']); ?>&nbsp;</td>
		<td><?php echo h($requisitosmateria['Requisitosmateria']['RequisitoMateriaCondicion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisitosmateria['Ofertascarreras']['id'], array('controller' => 'ofertascarreras', 'action' => 'view', $requisitosmateria['Ofertascarreras']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisitosmateria['Materia']['id'], array('controller' => 'materias', 'action' => 'view', $requisitosmateria['Materia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requisitosmateria['Requisitosmateria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requisitosmateria['Requisitosmateria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requisitosmateria['Requisitosmateria']['id']), array(), __('Are you sure you want to delete # %s?', $requisitosmateria['Requisitosmateria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Requisitosmateria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ofertascarreras'), array('controller' => 'ofertascarreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
