<div class="documentos view">
<h2><?php  __('Documento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Persona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($documento['Persona']['primer_nombre'], array('controller' => 'personas', 'action' => 'view', $documento['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero Documento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['numero_documento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tramitada Por Cm'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['tramitada_por_cm']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documento['Documento']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documento', true), array('action' => 'edit', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Documento', true), array('action' => 'delete', $documento['Documento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentaciones', true), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documentacion', true), array('controller' => 'documentaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Documentaciones');?></h3>
	<?php if (!empty($documento['Documentacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($documento['Documentacion'] as $documentacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $documentacion['id'];?></td>
			<td><?php echo $documentacion['title'];?></td>
			<td><?php echo $documentacion['created'];?></td>
			<td><?php echo $documentacion['modified'];?></td>
			<td><?php echo $documentacion['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'documentaciones', 'action' => 'view', $documentacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'documentaciones', 'action' => 'edit', $documentacion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'documentaciones', 'action' => 'delete', $documentacion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documentacion', true), array('controller' => 'documentaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
