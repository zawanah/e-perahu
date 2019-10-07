<?php if (count($errors) > 0): ?>
	<div style="padding-bottom: 10px;">
		<?php foreach ($errors as $error): ?>
			<p class="text-danger"><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>	