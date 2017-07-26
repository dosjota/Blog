<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = __d('layoutDefault', 'Demo');

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<?php
	echo $this->Html->meta('icon');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');

	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('blog');
	?>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link( 'eClass Blog', '/', array('class' => 'navbar-brand') ); ?>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php echo $this->fetch('autentication'); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<?php echo $this->Flash->render(); ?>

		<?php echo $this->fetch('content'); ?>

	</div>

	<?php echo $this->Html->script('//code.jquery.com/jquery-2.2.4.min.js'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script('moment'); ?>
	<?php echo $this->Html->script('moment-with-locales'); ?>
	<?php echo $this->Html->script('blog'); ?>


</body>
</html>
