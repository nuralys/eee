
<li>
	<a href="/service/<?php echo $services1['Service']['alias']; ?>"><?php echo $services1['Service']['title']; ?></a>
	<?php if($services1['children']) : ?>
	<ul>
		<?php echo $this->_catMainMenuHtml($services1['children']); ?>
	</ul>
	<?php endif; ?>
</li>
