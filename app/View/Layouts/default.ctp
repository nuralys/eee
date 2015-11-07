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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script('ckeditor/ckeditor.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<nav>
	<ul>
		
			
				<li><a href="/admin/pages/edit/8">Главная</a></li>
				<li><a href="/admin/pages/edit/1">О компании</a>
					<ul>
						<li><a href="/admin/pages/edit/3">Миссия</a>
							<ul>
								<li><a href="/admin/pages/edit/5">Охрана окружающей среды</a></li>
								<li><a href="/admin/pages/edit/6">Изменения в климате</a></li>
								<li><a href="/admin/pages/edit/7">Будущие риски</a></li>
							</ul>	
						</li>
						<li><a href="/admin/pages/edit/4">Руководство</a></li>
						<li><a href="/admin/pages/edit/2">Контакты</a></li>
						
					</ul>
				</li>
				
		
		<li>
			<a href="/admin/services">Услуги</a>
		
		</li>
		<li><a href="/admin/products">Продукция</a></li>
		<li><a href="/admin/projects">Проекты</a></li>
		<li><a href="/admin/news">Новости</a></li>
		<li><a href="/admin/reviews">Отзывы</a></li>
	</ul>
</nav>
		<div id="content">

			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
