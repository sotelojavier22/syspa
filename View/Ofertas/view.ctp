<div align="right">
    <br>
    <td><?php echo $this->Html->link(__('<< Volver'), array('action' => 'index')); ?> </td>
</div>
<div class="ofertas view">
    <br>
    <h3><?php echo __('Oferta'); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vigencia Desde'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['OfertaVigenciaDesde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vigencia Hasta'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['OfertaVigenciaHasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['OfertaDescripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($oferta['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<hr>
<!--Ofertas-->
<div class="related">
    <h3><?php echo __('Carreras'); ?></h3>    
    <td valign="bottom" >
	<p align="right"> Agregar 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Carrera",'url' => 
                    array('controller' => 'ofertascarreras','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>

    <?php if (!empty($oferta['Ofertascarrera'])): ?>
    <table cellpadding = "0" cellspacing = "0">
	<tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Oferta Id'); ?></th>
            <th><?php echo __('Carrera Id'); ?></th>
            <th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($oferta['Ofertascarrera'] as $ofertascarrera): ?>
            <tr>
                <td><?php echo $ofertascarrera['id']; ?></td>
                <td><?php echo $ofertascarrera['oferta_id']; ?></td>
                <td><?php echo $ofertascarrera['carrera_id']; ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('controller' => 'ofertascarreras', 'action' => 'view', $ofertascarrera['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'ofertascarreras', 'action' => 'edit', $ofertascarrera['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ofertascarreras', 'action' => 'delete', $ofertascarrera['id']), array(), __('Are you sure you want to delete # %s?', $ofertascarrera['id'])); ?>
                </td>
            </tr>
	<?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
<!--
<div class="related">
	<h3><?php echo __('Related Postulaciones'); ?></h3>
	<?php if (!empty($oferta['Postulacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaPostulacion'); ?></th>
		<th><?php echo __('FechaSeleccion'); ?></th>
		<th><?php echo __('CumpleRequisitosAcademicos'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($oferta['Postulacione'] as $postulacione): ?>
		<tr>
			<td><?php echo $postulacione['id']; ?></td>
			<td><?php echo $postulacione['FechaPostulacion']; ?></td>
			<td><?php echo $postulacione['FechaSeleccion']; ?></td>
			<td><?php echo $postulacione['CumpleRequisitosAcademicos']; ?></td>
			<td><?php echo $postulacione['alumno_id']; ?></td>
			<td><?php echo $postulacione['oferta_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postulaciones', 'action' => 'view', $postulacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postulaciones', 'action' => 'edit', $postulacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postulaciones', 'action' => 'delete', $postulacione['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->
<div class="related">
    <h3><?php echo __('Requisitos'); ?></h3>
    <td valign="bottom" >
	<p align="right"> Agregar 
            <?php echo $this->html->image("mi_form/Add.png", 
                array('alt' => 'Agregar', 'title' =>"Agregar Requisito",'url' => 
                    array('controller' => 'requisitoscompetencias','action' => 'add')
		)
                    );
            ?>
	</p>
    </td>

        <?php if (!empty($oferta['Requisitoscompetencia'])): ?>
        <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Oferta Id'); ?></th>
            <th><?php echo __('Competencia Id'); ?></th>
            <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
            <?php foreach ($oferta['Requisitoscompetencia'] as $requisitoscompetencia): ?>
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
</div>
