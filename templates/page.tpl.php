
<?php if ($logged_in): ?>
	<?= render($page['user_menu']); ?>
<?php else: ?>
	<ul>
		<li>
			<a href="<?php base_path(); ?>user/login">Log In</a>
		</li>
	</ul>
<?php endif; ?>


<?php print render($page['content']); ?>


