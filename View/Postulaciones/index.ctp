<div class="postulaciones index">
	<h2><?php echo __('Postulaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaPostulacion'); ?></th>
			<th><?php echo $this->Paginator->sort('FechaSeleccion'); ?></th>
			<th><?php echo $this->Paginator->sort('CumpleRequisitosAcademicos'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('oferta_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($postulaciones as $postulacion): ?>
	<tr>
		<td><?php echo h($postulacion['Postulacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($postulacion['Postulacione']['FechaPostulacion']); ?>&nbsp;</td>
		<td><?php echo h($postulacion['Postulacione']['FechaSeleccion']); ?>&nbsp;</td>
		<td><?php echo h($postulacion['Postulacione']['CumpleRequisitosAcademicos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($postulacion['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $postulacion['Alumno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($postulacion['Oferta']['id'], array('controller' => 'ofertas', 'action' => 'view', $postulacion['Oferta']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $postulacion['Postulacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $postulacion['Postulacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $postulacion['Postulacione']['id']), array(), __('Are you sure you want to delete # %s?', $postulacion['Postulacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Postulacione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
