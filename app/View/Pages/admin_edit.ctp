<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование страницы</h2>
	</div>
<?php 

echo $this->Form->create('Page', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
// echo $this->Form->input('date', array('label' => 'Дата:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
?>
<div class="edit_bot">
	<div class="bot_r">
	<?
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>