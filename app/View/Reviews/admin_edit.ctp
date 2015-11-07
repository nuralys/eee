<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование отзыва</h2>
	</div>
<?php 

echo $this->Form->create('Review');
echo $this->Form->input('fio', array('label' => 'ФИО:'));
echo $this->Form->input('place_of_work', array('label' => 'Место работы:'));
echo $this->Form->input('position', array('label' => 'Должность:'));
echo $this->Form->input('body', array('label' => 'Текст отзыва:'));
echo $this->Form->input('active', array('label' => 'Активность', 'type' => 'checkbox'));
?>
<div class="edit_bot">
	<div class="bot_r">
	<?
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>

</div>