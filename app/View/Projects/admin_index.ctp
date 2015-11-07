<a href="/admin/projects/add">Добавить проект</a>
<ul>
	<?php foreach($projects as $item): ?>
		<li>
			<?=$item['Project']['title']?> (<a href="projects/edit/<?=$item['Project']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Project']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
		</li>
	<?php endforeach?>
</ul>