<h2>Продукция</h2>

<a href="/admin/products/add" class="add_product">Добавить продукцию</a>
<ul class="add_products">
	<?php foreach($products as $item): ?>
		<li>
			<?=$item['Product']['title']?> (<a href="products/edit/<?=$item['Product']['id']?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Product']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			)
		</li>
	<?php endforeach?>
</ul>