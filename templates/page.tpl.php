<?php if ($logged_in): ?>
	<?= render($page['user_menu']); ?>
<?php else: ?>
	<p>No user menu</p>
<?php endif; ?>

<hr>

<?php print render($page['content']); ?>


