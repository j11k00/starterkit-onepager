<?php if($site->user()): ?>


<header class="utility-menu">

	<?php if($user = $site->user()): ?>
	<div class="user">
		<figure class="user-avatar">
			<?php if($avatar = $user->avatar()): ?>
			<img src="<?php echo $avatar->url() ?>">
			<?php else: ?>
			<img src="<?php echo url('assets/images/avatar.png') ?>">
			<?php endif ?>
		</figure>
		<div class="user-name">
			<?php echo esc($user->firstName() . ' ' . $user->lastName()) ?>
		</div>
		<a href="<?php echo url('logout') ?>">Logout</a>
	</div>
	<?php endif ?>

</header>


<?php endif ?>