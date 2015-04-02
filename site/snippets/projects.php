<section class="section clearfix projects">
	<div class="constrain">
		<h1 class="section-title"><?php echo $data->title()->html() ?></h1>
		<?php echo $data->text()->kirbytext() ?>

		<ul class="list-bare">
		<?php foreach($data->children()->visible() as $project): ?>
			<li>
				<figure>
					<img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo $project->title()->html() ?>">
				</figure>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
</section>