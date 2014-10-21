<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<<Volver'), array('action' => 'index')); ?> </td>
</div>
<div class="competencias view">
    <br>
    <h3><?php echo __('Competencia'); ?></h3>
    <br>
    <dl>
        <dt><?php echo __('Código'); ?></dt>
        <dd>
            <?php echo h($competencia['Competencia']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nombre'); ?></dt>
        <dd>
            <?php echo h($competencia['Competencia']['CompetenciaNombre']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Area'); ?></dt>
        <dd>
            <?php echo $this->Html->link($competencia['Area']['id'], array('controller' => 'areas', 'action' => 'view', $competencia['Area']['id'])); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Competencia'), array('action' => 'edit', $competencia['Competencia']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Competencia'), array('action' => 'delete', $competencia['Competencia']['id']), array(), __('Are you sure you want to delete # %s?', $competencia['Competencia']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('New Competencia'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Requisitoscompetencias'), array('controller' => 'requisitoscompetencias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Requisitoscompetencias'); ?></h3>
    <?php if (!empty($competencia['Requisitoscompetencia'])): ?>
    <table cellpadding = "0" cellspacing = "0">
	<tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Oferta Id'); ?></th>
            <th><?php echo __('Competencia Id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competencia['Requisitoscompetencia'] as $requisitoscompetencia): ?>
            <tr>
                <td><?php echo $requisitoscompetencia['id']; ?></td>
                <td><?php echo $requisitoscompetencia['oferta_id']; ?></td>
                <td><?php echo $requisitoscompetencia['competencia_id']; ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('controller' => 'requisitoscompetencias', 'action' => 'view', $requisitoscompetencia['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'requisitoscompetencias', 'action' => 'edit', $requisitoscompetencia['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'requisitoscompetencias', 'action' => 'delete', $requisitoscompetencia['id']), array(), __('Are you sure you want to delete # %s?', $requisitoscompetencia['id'])); ?>
                </td>
            </tr>
	<?php endforeach; ?>
    </table>
    <?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Requisitoscompetencia'), array('controller' => 'requisitoscompetencias', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
-->