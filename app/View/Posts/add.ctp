<?php
	$opciones = $this->Html->link( 'Salir', '/admin/logout', array('class' => 'button') );
	$this->assign( 'autentication', $opciones );
?>

<ul class="nav nav-pills">
	<li role="presentation"><?php echo $this->Html->link('Inicio', array('action' => 'index')); ?></li>
	<li role="presentation"><?php echo $this->Html->link('Publicaciones', array('action' => 'admin')); ?></li>
	<li role="presentation" class="active"><?php echo $this->Html->link('Nueva Publicación', array('action' => 'add')); ?></li>
</ul>

<div class="form-signin">
	<?php echo $this->Form->create('Post'); ?>
	<h2 class="form-signin-heading">
		<?php echo __('Nueva Publicación'); ?>
	</h2>

	<?php
	echo $this->Form->input('title', array('label' => 'Titulo', 'class' => 'form-control') );
	echo $this->Form->input('body', array('label' => 'Contenido', 'class' => 'form-control', 'rows' => '5'));

		$options = array(
			'label' => 'Guardar',
			'class' => 'btn btn-lg btn-primary btn-block',
			'div' => false
		);
		echo $this->Form->end($options);
	?>
</div>
