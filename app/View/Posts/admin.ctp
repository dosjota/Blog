<?php
	$opciones = $this->Html->link( 'Salir', '/admin/logout', array('class' => 'button') );
	$this->assign( 'autentication', $opciones );
?>

<ul class="nav nav-pills">
	<li role="presentation"><?php echo $this->Html->link('Inicio', array('action' => 'index')); ?></li>
	<li role="presentation" class="active"><?php echo $this->Html->link('Publicaciones', array('action' => 'admin')); ?></li>
	<li role="presentation"><?php echo $this->Html->link('Nueva Publicación', array('action' => 'add')); ?></li>
</ul>


<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Fecha Creación</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
		<tr>
			<th scope="row">
				<?php echo $post['Post']['id']; ?>
			</th>
			<td>
				<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
			</td>
			<td>
				<?php echo $post['Post']['created']; ?>
			</td>
			<td>
				<?php
				echo $this->Form->postLink(
					$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')). " ",
					array('action' => 'delete', $post['Post']['id']),
					array('escape'=>false),
					__('¿Seguro que desea eliminar "%s"?', $post['Post']['title']),
					array('class' => 'btn btn-mini')
				)
				?>
			</td>
			<td>
				<?php
					echo $this->Html->link(
						'',
						array('action' => 'edit', $post['Post']['id']),
						array('class' => ' glyphicon glyphicon-edit')
					);?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
