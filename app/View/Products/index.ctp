<div class="container">
			<div class="cr">
				<div class="left_side_bar">
					<div class="content_des_title">Навигация</div>
					<div class="title_side_bar">
						
					</div>
					
					<div class="mini-menu">
						<ul>
							<?php foreach($products as $product): ?>
								<li class="sub">
									<a href="/products/<?=$product['Product']['alias'] ?>"><?=$product['Product']['title'] ?></a>
								</li>
							<?php endforeach ?>
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
					<div class="content_des_title">Продукция</div>
					<div class="product_container">
						<?php foreach($products as $product): ?>
					<div class="products_item">
						<div class="products_item_img">
							<img src="img/product/<?=$product['Product']['img']?>">
						</div>
						<a href="/product/<?=$product['Product']['alias']?>" class="products_title "><?=$product['Product']['title']?></a>
					</div>
					<?php endforeach ?>
					</div>
				</div>
				
			</div>
		</div>