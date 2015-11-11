<h2>Отзывы</h2>
<a href="/admin/reviews/add" class="add+review">Добавление отзыва</a>
<?php 

foreach($reviews as $review):
 ?>
<div class="reviews_admin">
<p><?=$review['Review']['fio'] ?></p>
<p><?=$review['Review']['position'] .', '. $review['Review']['place_of_work'] ?></p>
<p><?=$review['Review']['body'] ?></p>
<div class="reviews_del_red">
<p><a href="/admin/reviews/edit/<?=$review['Review']['id'] ?>">Редактировать</a> | <?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $review['Review']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
</p>
</div>
</div>
<?php endforeach ?>