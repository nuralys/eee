<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование проекта</h2>
	</div>
<?php 

echo $this->Form->create('Project', array('type' => 'file'));
echo $this->Form->input('alias', array('label' => 'Алиас:'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
?>
<div class="edit_bot">
<img src="/img/project/thumbs/<?=$data['Project']['img']?>">
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