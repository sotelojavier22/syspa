<div class="ofertascarreras index">
    <h2><?php echo __('Ofertascarreras'); ?></h2>
    <td> <?php echo $OfertaDescripcion ?></td>
<!--
        <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('oferta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ofertascarreras as $ofertascarrera): ?>
	<tr>
		<td><?php echo h($ofertascarrera['Ofertascarrera']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ofertascarrera['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $ofertascarrera['Oferta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ofertascarrera['Carrera']['id'], array('controller' => 'carreras', 'action' => 'view', $ofertascarrera['Carrera']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ofertascarrera['Ofertascarrera']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ofertascarrera['Ofertascarrera']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ofertascarrera['Ofertascarrera']['id']), array(), __('Are you sure you want to delete # %s?', $ofertascarrera['Ofertascarrera']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ofertascarrera'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
	</ul>
-->
</div>
