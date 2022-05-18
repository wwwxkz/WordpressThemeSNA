<?php

$posts_pagination = get_the_posts_pagination(
	array(
		'mid_size'  => 2,
		'prev_text' => sprintf(
			'%s <span>%s</span>',
			'&larr;',
			__('Posts <span>mais recentes</span>', 'go')
		),
		'next_text' => sprintf(
			'<span>%s</span> %s',
			__('Posts <span>mais antigos</span>', 'go'),
			'&rarr;'
		),
	)
);

// If we're only showing one of the next or previous links, add a class indicating so.
if (strpos($posts_pagination, 'prev page-numbers') === false) {
	$pagination_classes = ' only-next';
} elseif (strpos($posts_pagination, 'next page-numbers') === false) {
	$pagination_classes = ' only-prev';
} else {
	$pagination_classes = '';
}

if ($posts_pagination) { ?>
	<div class="pagination-wrapper m-auto max-w-wide px">
		<?php echo $posts_pagination; ?>
	</div>
<?php
}
