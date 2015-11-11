<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>EEE</title>
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('reset', 'style', 'fonts', 'slide'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-2.1.4.js', 'jquery.fancybox.pack', 'app'));
	 ?>
</head>
<body>
	<div class="page">
		<header>
			<div class="top_line">
				<div class="cr">
					<div class="top_phone">
						<span>+77758312504</span>
						<span>+77078332504</span>
					</div>
					<div class="search">
						<form action="/search/">
							<input placeholder="Что вы искали?" type="text" name="q">
							<div class="sub_b">
								<button type="submit">Поиск</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="cr rel">
				<div class="logo_menu">
					<div class="logo">
						<a href="/">
							<img src="/img/logo.png" alt=""></a>
					</div>
					<div class="menu">
						<ul class="top_menu">
							<li>
								<a href="/" class="active" >Главная</a>
							</li>
							<li>
								<a href="/pages/about" >О компании</a>
									<ul >
										<li><a href="/pages/mission" >Mиссия</a>
											<ul  class="comp_menu" >
											    <li><a href="/pages/environmental_protection">Охрана окружающей среды </a></li>
											    <li><a href="/pages/changes_in_climate">Изменения в климате</a></li>
												<li><a href="/pages/future_risks">Будущие риски </a></li>
											</ul>
										</li>
										<li><a href="/pages/direction">Pуководство</a>
										</li>
										<li><a href="/pages/contacts">Контакты</a>
										</li>
									</ul>
							</li>
							<?php echo $servicesMainMenu ?>
							<li>
								<a href="/products" >Каталог товаров</a>
									<ul class="product_menu">
										<?php foreach($products as $product): ?>
										<li><a href="/product/<?php echo $product['Product']['alias'] ?>" ><?php echo $product['Product']['title'] ?></a></li>
										<?php endforeach ?>
									</ul>
							</li>
							<li>
								<a href="/projects" >Проекты</a>
									<ul>
										<?php foreach($projects_menu as $projects_menu_item): ?>
											<li><a href="/project/<?=$projects_menu_item['Project']['alias']?>"><?=$projects_menu_item['Project']['title']?></a></li>
										<?php endforeach; ?>
									</ul>
							</li>
							<li>
								<a href="/news" >Новости</a>
									<ul>
										<li><a href="/news" >Все</a>
										</li>
										<li><a href="/news/local">Местные</a>
										</li>
										<li><a href="/news/world">Международные</a>
										</li>
									</ul>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</header>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content') ?>
		<footer>
			<div class="cr">
				<div class="footer">
					<div class="logo">
						<a href="/">
							<img src="/img/logo.png" alt=""></a>
					</div>
					<div class="razrabotano">
						<p>© Energy Ecology Engineering 2015</p>
						<p>Разработано в AstanaСreative.kz</p>
					</div>
					<div class="yandex_metrika">
						<img src="/img/yandex.jpg"/>
					</div>
					</div>
			</div>
		</footer>
	</div>
	<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">Оставить отзыв</span>

	<?php 

echo $this->Form->create('Review', array('action' => '/add'));
echo $this->Form->input('fio', array('placeholder' => 'ФИО...', 'class' => 'modal_f', 'label' => '', 'required' => 'required'));
echo $this->Form->input('place_of_work', array('placeholder' => 'Компания...', 'class' => 'modal_f', 'label' => '', 'required' => 'required'));
echo $this->Form->input('position', array('placeholder' => 'Должность...', 'class' => 'modal_f', 'label' => '', 'required' => 'required'));
echo $this->Form->input('body', array('placeholder' => 'Ваш отзыв...', 'class' => 'modal_f', 'label' => '', 'required' => 'required'));
echo $this->Form->end('Оставить отзыв');
?>

       <!--  <form method="POST" name="form1" action="/review/add" >
			<input  name="name1"  maxlength="200" class="modal_f" type="text"  required placeholder="ФИО..."/>
			<input   name="phone1"  maxlength="200" class="modal_f " type="text"  required placeholder="Компания..."/>
			<input   name="phone1"  maxlength="200" class="modal_f " type="text"   required placeholder="Должность..."/>
			<textarea name="text"  type="text"  class="modal_f " placeholder="Ваш отзыв..."></textarea>
			<button type="submit" name="submit1" >Оставить отзыв</button>
		</form> -->
	</div>
	<div id="overlay"></div>
</body>
</html>