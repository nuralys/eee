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
					
					
					<?php echo $this->element('reviews'); ?>
					
				</div>
				</div>
				<div class="content_uslugi">
					<div class="content_des_title"><?php echo $title_for_layout; ?></div>
					<?php foreach($news as $news_item): ?>
					<div class="news_item">
						<div class="news_item_img">
							<img src="/img/chel.jpg" alt="">
						</div>
						<h2 class="news_item_title">
							<a href="/news/<?php echo $news_item['News']['id']; ?>"><?php echo $news_item['News']['title']; ?></a>
						</h2>
						<div class="news_item_des">
							<p><?= $this->Text->truncate(strip_tags($news_item['News']['body']), 420, array('ellipsis' => '...', 'exact' => true)) ?>
							</p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
						
					</div>
				</div>