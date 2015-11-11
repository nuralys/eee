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
					<?php echo $this->element('reviews'); ?>
				</div>
			</div>
		</div>