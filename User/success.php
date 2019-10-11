<?php if (count($success) > 0): ?>
	<div style="padding-bottom: 10px;">
		<?php foreach ($success as $successfully): ?>
			<p class="text-success"><?php echo $successfully; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>	