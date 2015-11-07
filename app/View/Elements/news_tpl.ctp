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