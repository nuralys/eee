<section class="tops" id="tops">
			<div class="slider-description">
				
			<section class="slider_des" >
				<div class="slider__item">
				<div class="slider_des_container">
				<div  class="slider-description__title">Инженерные услуги и консалтинг</div>
				<div class="slider-description-text">
				<p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</div>
				<a href="">
					<div class="review_button">
						Подробнее
					</div>
				</a>
				</div>
				</div>
				<div class="slider__item">
				<div class="slider_des_container">
				<div  class="slider-description__title">Инженерные услуги и консалтинг</div>
				<div class="slider-description-text">
				<p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</div>
				<a href="">
					<div class="review_button">
						Подробнее
					</div>
				</a>
				</div>
				</div>
				<div class="slider__item">
				<div class="slider_des_container">
				<div  class="slider-description__title">Инженерные услуги и консалтинг</div>
				<div class="slider-description-text">
				<p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</div>
				<a href="">
					<div class="review_button">
						Подробнее
					</div>
				</a>
				</div>
				</div>
				</section>
					</div>
			<section class="slider" >
				
				<div class="slider__item">
					<img src="img/slide1.jpg" alt=""></div>
				<div class="slider__item">
					<img src="img/slide1.jpg" alt=""></div>
				<div class="slider__item">
					<img src="img/slide1.jpg" alt=""></div>
			</section>
		</section>
		<div class="container">
			<div class="cr">
				<div class="content">
					
					<?php echo $home[0]['Page']['body'] ?>
					<div class="product">
						<div class="content_des_title">Energy Ecology Engineering</div>
							<?php foreach($products as $product): ?>
							<div class="product_item">
								<div class="products_item_img">
									<img src="/img/product/<?=$product['Product']['img'] ?>">
								</div>
									<a href="/product/<?=$product['Product']['alias'] ?>" class="products_title "><?=$product['Product']['title'] ?></a>
							</div>
							<?php endforeach ?>
					</div>
				</div>
				<div class="side_bar">
					<div class="news">
						<div class="content_des_title">Новости</div>
						<?php foreach($news as $news_item): ?>
						<div class="news_item">
							<div class="news_item_img">
								<img src="/img/news/<?=$news_item['News']['img'] ?>" alt="">
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
						<?php foreach($reviews as $review): ?>
						<div class="slider__item">
							<div class="review_item_info">
								<div class="review_name "><?=$review['Review']['fio']?></div>
								<div class="review_prof "><?=$review['Review']['position']?>, <?=$review['Review']['place_of_work']?></div>
							</div>
							<div class="review_text">
								<p>
								<?=$review['Review']['body']?>
								</p>
							</div>
						</div>
						<?php endforeach ?>
						
					</section>
					<a href="#modal1" class="open_modal">
								<div class="review_button">
									Оставить отзыв
								</div>
							</a>
						
				</div>
			</div>
		</div>