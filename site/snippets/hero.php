<?php if($page->hasImages()): ?>
	<div class="hero">
		<div class="overlay">
			<div class="branding center">
				<a href="<?php echo url() ?>">
					<h1><?php echo $site->title()->html() ?></h1>
					<blockquote class="lead"><?php echo $site->description()->html() ?></blockquote>
				</a>
			</div>
		</div>
		<?php foreach($page->images() as $image): ?>
		<div class="item">
			<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" />
		</div>
		<?php endforeach ?>
	</div>
<?php endif ?>