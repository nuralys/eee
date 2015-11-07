<section class="tops" id="tops">
			<div class="slider-description">
				
			<section class="slider" >
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
					<div class="content_des">
						<div class="content_des_img">
							<img src="img/chel.jpg" alt=""></div>
						<div class="content_des_title">Energy Ecology Engineering</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ducimus libero natus, sed eius, placeat facilis iste et, ratione ullam saepe molestias! Similique accusantium suscipit quas veniam consectetur quo! Fugiat.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ducimus libero natus, sed eius, placeat facilis iste et, ratione ullam saepe molestias! Similique accusantium suscipit quas veniam consectetur quo! Fugiat.
						</p>
					</div>
					<div class="content_item_container">
						<div class="content_item">
							<div class="content_item_title"><a href="">There are many variations</a></div>
							<p>
								Lorem Ipsum is simply dummy text of the printing the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
							</p>
						</div>
						<div class="content_item">
							<div class="content_item_title"><a href="">There are many variations</a></div>
							<p>
								Lorem Ipsum is simply dummy text of the printing the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
							</p>
						</div>
						<div class="content_item">
							<div class="content_item_title"><a href="">There are many variations</a></div>
							<p>
								Lorem Ipsum is simply dummy text of the printing the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
							</p>
						</div>
						<div class="content_item">
							<div class="content_item_title"><a href="">There are many variations</a></div>
							<p>
								Lorem Ipsum is simply dummy text of the printing the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
							</p>
						</div>
					</div>
					<div class="product">
						<div class="content_des_title">Energy Ecology Engineering</div>
						<div class="product_item_container">
							<div class="product_item">
								<div class="product_item_img">
									<img src="img/product.jpg" alt=""></div>
								<div class="content_item_title product_title"><a href="">Поставка оборудования для "солнечных батарей"</a></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore hic, laboriosam ab mollitia asperiores provident, error exercitationem odio neque repellat evenie...
								</p>
							</div>
							<div class="product_item">
								<div class="product_item_img">
									<img src="img/product.jpg" alt=""></div>
								<div class="content_item_title product_title"><a href="">Поставка оборудования для "солнечных батарей"</a></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore hic, laboriosam ab mollitia asperiores provident, error exercitationem odio neque repellat evenie...
								</p>
							</div>
							<div class="product_item">
								<div class="product_item_img">
									<img src="img/product.jpg" alt=""></div>
								<div class="content_item_title product_title"><a href="">Поставка оборудования для "солнечных батарей"</a></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore hic, laboriosam ab mollitia asperiores provident, error exercitationem odio neque repellat evenie...
								</p>
							</div>
							<div class="product_item">
								<div class="product_item_img">
									<img src="img/product.jpg" alt=""></div>
								<div class="content_item_title product_title"><a href="">Поставка оборудования для "солнечных батарей"</a></div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore hic, laboriosam ab mollitia asperiores provident, error exercitationem odio neque repellat evenie...
								</p>
							</div>
						</div>
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
							<?= $this->Text->truncate($news_item['News']['body'], 55, array('ellipsis' => '...', 'exact' => true)) ?>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="review">
						<div class="content_des_title">Отзывы</div>
						<div class="review_item">
							<div class="review_item_info">
								<div class="review_item_img news_item_img">
									<img src="img/news.jpg" alt=""/>
								</div>
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
							<a href="">
								<div class="review_button">
									Оставить отзыв
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>