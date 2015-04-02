<nav class="nav-bar box center">
	<ul class="list-inline">
		<?php foreach($pages->visible() as $section): ?>
		<li><a class="slide-to" href="#<?php echo $section->uid() ?>"><?php echo html($section->title()) ?></a></li>
		<?php endforeach ?>
	</ul>
</nav>