<h2>Новости</h2>

<a href="/admin/news/add" class="add_news">Добавить новость</a>
<ul class="news_add">
	<?php foreach($news as $item): ?>
		<li>
			<?=$item['News']['title']?> (<a href="news/edit/<?=$item['News']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['News']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
		</li>
	<?php endforeach?>
</ul>