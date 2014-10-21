<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), array('action' => 'index')); ?> </td>    
    <br>
</div>
<div class="areas view">
    <h3><?php echo __('Area'); ?></h3>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd><?php echo h($area['Area']['id']); ?>&nbsp;</dd>
	<dt><?php echo __('Descripción'); ?></dt>
	<dd><?php echo h($area['Area']['AreaDescripcion']); ?>&nbsp;</dd>
    </dl>
</div>
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Competencias'), array('controller' => 'competencias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Actividades'); ?></h3>
    <?php if (!empty($area['Actividade'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('ActividadDescripcion'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($area['Actividade'] as $actividade): ?>
		<tr>
                    <td><?php echo $actividade['id']; ?></td>
                    <td><?php echo $actividade['ActividadDescripcion']; ?></td>
                    <td><?php echo $actividade['area_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'actividades', 'action' => 'view', $actividade['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades', 'action' => 'edit', $actividade['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividades', 'action' => 'delete', $actividade['id']), array(), __('Are you sure you want to delete # %s?', $actividade['id'])); ?>
                    </td>
		</tr>
            <?php endforeach; ?>
	</table>
    <?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

<div class="related">
    <h3><?php echo __('Related Competencias'); ?></h3>
    <?php if (!empty($area['Competencia'])): ?>
    <table cellpadding = "0" cellspacing = "0">
	<tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('CompetenciaNombre'); ?></th>
            <th><?php echo __('Area Id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($area['Competencia'] as $competencia): ?>
        <tr>
            <td><?php echo $competencia['id']; ?></td>
            <td><?php echo $competencia['CompetenciaNombre']; ?></td>
            <td><?php echo $competencia['area_id']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'competencias', 'action' => 'view', $competencia['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'competencias', 'action' => 'edit', $competencia['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'competencias', 'action' => 'delete', $competencia['id']), array(), __('Are you sure you want to delete # %s?', $competencia['id'])); ?>
            </td>
	</tr>
	<?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Competencia'), array('controller' => 'competencias', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
-->