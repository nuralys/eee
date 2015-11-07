<div class="container">
	<div class="cr">
		<div class="left_side_bar">
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
			<div class="content_des_title">Поиск</div>
			<?php //debug($search_res) ?>
			<?php if(!is_array($search_res)): ?>
				<h3><?php echo $search_res; ?></h3>
			<?php endif; ?>
			<?php foreach($search_res as $item): ?>
			<div class="project_item">
				
				<h2 class="project_item_title">
					<a href="/<?=$item['0']['url']; ?>/<?=$item['0']['alias']; ?>"><?=$item['0']['title']; ?></a>
				</h2>
				<div class="project_item_des">
					<?= $this->Text->truncate($item['0']['body'], 255, array('ellipsis' => '...', 'exact' => true)) ?>
					
				</div>
			</div>
			<?php endforeach; ?>
		</div>
				
			</div>
		</div>