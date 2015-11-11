<h2>Проекты</h2>
<a href="/admin/projects/add" class="project_add">Добавить проект</a>
<ul class="add_project">
	<?php foreach($projects as $item): ?>
		<li>
			<?=$item['Project']['title']?> (<a href="projects/edit/<?=$item['Project']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Project']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
		</li>
	<?php endforeach?>
</ul>