﻿<div class="estados view">
<h2><?php  __('Estado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Número'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($estado['Pais']['title'], array('controller' => 'paises', 'action' => 'view', $estado['Pais']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
<<<<<<< HEAD
		<li><?php echo $this->Html->link(__('Edit Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
=======
		<li><?php echo $this->Html->link(__('Modificar Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
>>>>>>> ea8d05d238d46380b4442ef7fb43dfcd305d1de1
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Casas');?></h3>
	<?php if (!empty($estado['Casa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Casa'] as $casa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $casa['id'];?></td>
			<td><?php echo $casa['pais_id'];?></td>
			<td><?php echo $casa['estado_id'];?></td>
			<td><?php echo $casa['municipio_id'];?></td>
			<td><?php echo $casa['direccion'];?></td>
			<td><?php echo $casa['telefono'];?></td>
			<td><?php echo $casa['created'];?></td>
			<td><?php echo $casa['modified'];?></td>
			<td><?php echo $casa['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'casas', 'action' => 'view', $casa['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'casas', 'action' => 'edit', $casa['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'casas', 'action' => 'delete', $casa['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $casa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Municipios');?></h3>
	<?php if (!empty($estado['Municipio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Municipio'] as $municipio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $municipio['id'];?></td>
			<td><?php echo $municipio['title'];?></td>
			<td><?php echo $municipio['estado_id'];?></td>
			<td><?php echo $municipio['created'];?></td>
			<td><?php echo $municipio['modified'];?></td>
			<td><?php echo $municipio['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'municipios', 'action' => 'view', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'municipios', 'action' => 'edit', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'municipios', 'action' => 'delete', $municipio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Nacimientos');?></h3>
	<?php if (!empty($estado['Nacimiento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Fecha Nacimiento'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Nacimiento'] as $nacimiento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $nacimiento['id'];?></td>
			<td><?php echo $nacimiento['persona_id'];?></td>
			<td><?php echo $nacimiento['fecha_nacimiento'];?></td>
			<td><?php echo $nacimiento['pais_id'];?></td>
			<td><?php echo $nacimiento['estado_id'];?></td>
			<td><?php echo $nacimiento['municipio_id'];?></td>
			<td><?php echo $nacimiento['created'];?></td>
			<td><?php echo $nacimiento['modified'];?></td>
			<td><?php echo $nacimiento['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'nacimientos', 'action' => 'view', $nacimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'nacimientos', 'action' => 'edit', $nacimiento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'nacimientos', 'action' => 'delete', $nacimiento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nacimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
