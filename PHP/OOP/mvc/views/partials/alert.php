<?php if (FlashMessage::hasMessage()): ?>
	<div class="alert alert-<?= FlashMessage::getType() ?>">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong><?= strtoupper(FlashMessage::getType()); ?> !</strong> <?= FlashMessage::getMessage(); ?>
	</div>
	<?php FlashMessage::delete(); ?>
<?php endif ?>