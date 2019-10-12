<?php if (count($errors) > 0): ?>
	<div class="">
		<?php foreach ($errors as $error): ?>
			<p style="text-align: center;" class="text-danger"><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>	