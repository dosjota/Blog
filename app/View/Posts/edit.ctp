<?php
	$opciones = $this->Html->link( 'Salir', '/admin/logout', array('class' => 'button') );
	$this->assign( 'autentication', $opciones );
?>

<ul class="nav nav-pills">
	<li role="presentation"><?php echo $this->Html->link('Inicio', array('action' => 'index')); ?></li>
	<li role="presentation"><?php echo $this->Html->link('Publicaciones', array('action' => 'admin')); ?></li>
	<li role="presentation"><?php echo $this->Html->link('Nueva Publicación', array('action' => 'add')); ?></li>
</ul>

<div class="form-signin">
	<?php
		echo $this->Form->create('Post', array(
			'url'   => array(
				'controller' => 'posts','action' => 'edit'
			))
		);
	?>
	<h2 class="form-signin-heading">
		<?php echo __('Editar Publicación'); ?>
	</h2>

	<?php
	echo $this->Form->input('title', array('label' => 'Titulo', 'class' => 'form-control') );
	echo $this->Form->input('body', array('label' => 'Contenido', 'class' => 'form-control', 'rows' => '5'));
	echo $this->Form->input('id', array('type' => 'hidden'));

		$options = array(
			'label' => 'Guardar',
			'class' => 'btn btn-lg btn-primary btn-block',
			'div' => false
		);
		echo $this->Form->end($options);
	?>
</div>
