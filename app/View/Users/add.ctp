<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Nuevo Usuario'); ?></legend>
		<?php
			echo $this->Form->input( 'username', array('label' => 'Usuario') );
			echo $this->Form->input( 'password', array('label' => 'Contraseña') );
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Agregar')); ?>
</div>
