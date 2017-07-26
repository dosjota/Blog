<div class="form-signin">

	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>

	<h2 class="form-signin-heading">
		<?php echo __('Autenticación'); ?>
	</h2>


	<?php
		echo $this->Form->input(
			'username',
			array(
				'label' => 'Usuario',
				'class' => 'form-control'
			)
		);

		echo $this->Form->input(
			'password',
			array(
				'label' => 'Contraseña',
				'class' => 'form-control'
			)
		);

	?>
	<?php

		$options = array(
			'label' => 'Login',
			'class' => 'btn btn-lg btn-primary btn-block',
			'div' => false
		);

		echo $this->Form->end($options);
	?>

</div>
