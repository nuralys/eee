<div class="container">
			<div class="cr">
				<div class="left_side_bar">
					<div class="content_des_title">Новости</div>
					<div class="title_side_bar">
						
					</div>
					<div class="mini-menu">
						<ul>
							<li class="sub">
								<a href="/news">Все новости </a>
								<!-- <ul>
								   <li><a href="/news">Все </a></li>
								   <li><a href="/news/local">Местные </a></li>
								   <li><a href="/news/world">Международные </a></li>
								</ul> -->
							</li>
							<li class="sub">
								<a href="/news/local">Местные новости</a>
							</li>
							<li class="sub">
								<a href="/news/world">Международные</a>
							</li>
						</ul>
					</div>
					<?php echo $this->element('reviews'); ?>
				</div>
				<div class="content_uslugi">
					<div class="content_des_title"><h1 class="content_about_title"><?php echo $post['News']['title']?></h1></div>
						<?php echo $post['News']['body']?>
				</div>
				
			</div>
		</div>