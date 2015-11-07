<div class="container">
			<div class="cr">
				<div class="content">
					<div class="content_des_title"><?=$page['Page']['title']?></div>
					<div class="content_about">
						<?=$page['Page']['body'] ?>
					</div>
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
					
						<div class="content_des_title">Отзывы</div>
						<section class="review">
						<div class="slider__item">
							<div class="review_item_info">
								<div class="review_name ">Азаматов Амир Каиржанович</div>
								<div class="review_comp ">
								Название компании
								</div>
								<div class="review_prof ">должность</div>
							</div>
							<div class="review_text">
								<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nesciunt unde beatae perferendis harum a, praesentium eveniet consectetur sapiente accusantium dolore, omnis nam recusandae est? Nesciunt aliquid laudantium porro ut.
								</p>
							</div>
						</div>
						<div class="slider__item">
							<div class="review_item_info">
								<div class="review_name ">Азаматов Амир Каиржанович</div>
								<div class="review_comp ">
								Название компании
								</div>
								<div class="review_prof ">должность</div>
							</div>
							<div class="review_text">
								<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nesciunt unde beatae perferendis harum a, praesentium eveniet consectetur sapiente accusantium dolore, omnis nam recusandae est? Nesciunt aliquid laudantium porro ut.
								</p>
							</div>
						</div>
						
					</section>
					<a href="#modal1" class="open_modal">
								<div class="review_button">
									Оставить отзыв
								</div>
							</a>
					
				</div>
			</div>
		</div>