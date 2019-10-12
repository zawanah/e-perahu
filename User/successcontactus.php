<?php if (count($success) > 0): ?>
	<div class="wow fadeInUp" style="text-align: center;">
		<?php foreach ($success as $successfully): ?>
			<p class="text-success"><?php echo $successfully; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>	