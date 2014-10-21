<div class="requisitoscompetencias index">
	<h2><?php echo __('Requisitoscompetencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('oferta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('competencia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($requisitoscompetencias as $requisitoscompetencia): ?>
	<tr>
		<td><?php echo h($requisitoscompetencia['Requisitoscompetencia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisitoscompetencia['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $requisitoscompetencia['Oferta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($requisitoscompetencia['Competencia']['id'], array('controller' => 'competencias', 'action' => 'view', $requisitoscompetencia['Competencia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requisitoscompetencia['Requisitoscompetencia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requisitoscompetencia['Requisitoscompetencia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requisitoscompetencia['Requisitoscompetencia']['id']), array(), __('Are you sure you want to delete # %s?', $requisitoscompetencia['Requisitoscompetencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
