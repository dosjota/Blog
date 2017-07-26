<?php
	$opciones = $this->Html->link( 'Acceder', '/admin/login', array('class' => 'button') );
	$this->assign( 'autentication', $opciones );
?>


	<div class="blog-header">
		<h1 class="blog-title">Blog eCLass</h1>
	</div>

	<div class="row">

		<div class="col-sm-8 blog-main">
			<?php foreach ($posts as $post): ?>
			<div class="blog-post">
				<h2 class="blog-post-title"><?php echo $post['Post']['title']; ?></h2>
				<p class="blog-post-meta fecha"><?php echo $post['Post']['created']; ?></p>
				<p><?php echo $post['Post']['body']; ?></p>
			</div><!-- /.blog-post -->
			<div class="clearfix"></div>
			<?php endforeach; ?>


		</div><!-- /.blog-main -->

		<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

			<div class="sidebar-module">
				<h4>Publicaciones</h4>
				<ol class="list-unstyled">
					<?php foreach ($posts as $post): ?>
					<li><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></li>
					<?php endforeach; ?>

				</ol>
			</div>
		</div><!-- /.blog-sidebar -->

	</div><!-- /.row -->
