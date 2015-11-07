<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление новости</h2>
	</div>
<?php 

echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата:'));?>
<div class="input select">
	<label for="NewsCategoryId">Категория:</label>
	<select name="data[News][category_id]" id="NewsCategoryId">
		<option value="1">Местные</option>
		<option value="2">Международные</option>
	</select>
</div>
<?php
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>