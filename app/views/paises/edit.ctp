<div class="paises form">
<?php echo $this->Form->create('Pais');?>
	<fieldset>
		<legend><?php __('Modificar Pais'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array("label"=>"Pais"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Pais.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pais.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Paises', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>