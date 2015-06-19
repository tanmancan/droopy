
<header class="droopy-main-header">
	<h1>Alisa H. Fan Club</h1>
</header>

<div class="droopy-user-menu">
	
	<?php if ($logged_in): ?>
		<?= render($page['user_menu']); ?>
	<?php else: ?>
		<ul style="display:none;">
			<li>
				<a href="<?php base_path(); ?>user/login">Log In</a>
			</li>
		</ul>
	<?php endif; ?>
</div>


<div class="droopy-main-menu">
	
	<?php if($logo): ?>
		<a href="<?= $front_page?>"><img src="<?=$logo?>" alt="Logo" class="droopy-logo"></a>
	<?php endif;?>

    <?php print render($page['main_menu']); ?>
</div>


<div class="droopy-main-content">
	<article>
		<h1><?php print $title; ?></h1>
		<?php print render($page['content']); ?>
	</article>
</div>


