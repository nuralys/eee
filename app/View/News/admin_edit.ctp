<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование новости/акции</h2>
	</div>
<?php 

echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('date', array('label' => 'Дата:'));?>
<div class="input select">
	<label for="NewsCategoryId">Категория:</label>
	<select name="data[News][category_id]" id="NewsCategoryId">
		<option value="1" <?php if($data['News']['category_id']==1) echo 'selected' ?>>Местные</option>
		<option value="2" <?php if($data['News']['category_id']==2) echo 'selected' ?>>Международные</option>
	</select>
</div>
<?php
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
?>
<div class="edit_bot">
<img src="/img/news/thumbs/<?=$data['News']['img']?>">
	<div class="bot_r">
	<?
	echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>