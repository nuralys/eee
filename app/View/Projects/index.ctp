<div class="container">
	<div class="cr">
		<div class="left_side_bar">
			<div class="content_des_title">Навигация</div>
			<div class="title_side_bar">
				
			</div>
			<div class="mini-menu">
				<ul>
					<?php foreach($projects as $project_item): ?>
					<li class="sub">
						<a href="/project/<?=$project_item['Project']['alias']?>"><?=$project_item['Project']['title'] ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="side_bar">
			<div class="news">
				<div class="content_des_title">Новости</div>
				<?php foreach($news as $news_item): ?>
				<div class="news_item">
					<div class="news_item_img">
						<img src="/img/news.jpg" alt="">
					</div>
					<div class="news_item_title">
						<a href="/news/<?=$news_item['News']['id']?>"><?=$news_item['News']['title'] ?></a>
					</div>
					<p><?= $this->Text->truncate(strip_tags($news_item['News']['body']), 55, array('ellipsis' => '...', 'exact' => true)) ?></p>
				</div>
				<?php endforeach; ?>
			</div>
			<!--
			<div class="review">
				<div class="content_des_title">Отзывы</div>
				<div class="review_item">
					<div class="review_item_info">
						<div class="review_item_img news_item_img">
							<img src="img/news.jpg" alt=""/>
						</div>
						<div class="review_name ">Азаматов Амир Каиржанович</div>
						<div class="review_comp ">Название компании</div>
						<div class="review_prof ">должность</div>
					</div>
					<div class="review_text">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nesciunt unde beatae perferendis harum a, praesentium eveniet consectetur sapiente accusantium dolore, omnis nam recusandae est? Nesciunt aliquid laudantium porro ut.
						</p>
					</div>
					<a href="">
						<div class="review_button">Оставить отзыв</div>
					</a>
				</div>
			</div>
			-->
		</div>
		</div>
		<div class="content_uslugi">
			<div class="content_des_title">Проекты</div>
			<?php foreach($projects as $project_item): ?>
			<div class="project_item">
				<div class="project_item_img">
					<img src="img/chel.jpg" alt="">
				</div>
				<h2 class="project_item_title">
					<a href="/project/<?php echo $project_item['Project']['alias']; ?>"><?php echo $project_item['Project']['title']; ?></a>
				</h2>
				<div class="project_item_des">
					<?= $this->Text->truncate($project_item['Project']['body'], 700, array('ellipsis' => '...', 'exact' => true)) ?>
					
				</div>
			</div>
			<?php endforeach; ?>
		</div>
				
			</div>
		</div>