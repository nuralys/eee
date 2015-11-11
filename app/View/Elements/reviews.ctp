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