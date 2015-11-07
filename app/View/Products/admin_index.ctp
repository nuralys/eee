<a href="/admin/products/add">Добавить продукцию</a>
<ul>
	<?php foreach($products as $item): ?>
		<li>
			<?=$item['Product']['title']?> (<a href="products/edit/<?=$item['Product']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Product']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
		</li>
	<?php endforeach?>
</ul>