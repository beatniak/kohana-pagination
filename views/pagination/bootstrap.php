<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Bootstrap pagination style
 *
 * @preview  « Previous  1 2 … 5 6 7 8 9 10 11 12 13 14 … 25 26  Next »
 */
?>
<div class="pagination">
  <ul>    
	<?php if ($previous_page): ?>
		<li><a href="<?php echo $page->url($previous_page) ?>">&laquo;&nbsp;<?php echo __('Previous') ?></a></li>
	<?php else: ?>
		<li class="disabled"><a href="#">&laquo;&nbsp;<?php echo __('Previous') ?></a></li>
	<?php endif ?>

	<?php if ($total_pages < 16): /* « Previous  1 2 3 4 5 6 7 8 9 10 11 12  Next » */ ?>

		<?php for ($i = 1; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="active"><a href="#"><?php echo $i ?></a></li>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a></li>
			<?php endif ?>
		<?php endfor ?>

	<?php elseif ($current_page < 14): /* « Previous  1 2 3 4 5 6 7 8 9 10 … 25 26  Next » */ ?>

		<?php for ($i = 1; $i <= 15; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="active"><a href="#"><?php echo $i ?></a>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a>
			<?php endif ?>
		<?php endfor ?>

		<li>&hellip;<li>
		<li><a href="<?php echo $page->url($total_pages - 1) ?>"><?php echo $total_pages - 1 ?></a>
		<li><a href="<?php echo $page->url($total_pages) ?>"><?php echo $total_pages ?></a>

	<?php elseif ($current_page > $total_pages - 14): /* « Previous  1 2 … 17 18 19 20 21 22 23 24 25 26  Next » */ ?>

		<li><a href="<?php echo $page->url(1) ?>">1</a>
		<li><a href="<?php echo $page->url(2) ?>">2</a>
		<li>&hellip;

		<?php for ($i = $total_pages - 14; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="active"><a href="#"><?php echo $i ?></a>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a>
			<?php endif ?>
		<?php endfor ?>

	<?php else: /* « Previous  1 2 … 5 6 7 8 9 10 11 12 13 14 … 25 26  Next » */ ?>

		<li><a href="<?php echo $page->url(1) ?>">1</a>
		<li><a href="<?php echo $page->url(2) ?>">2</a>
		&hellip;

		<?php for ($i = $current_page - 6; $i <= $current_page + 6; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="active"><a href="#"><?php echo $i ?></a>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a>
			<?php endif ?>
		<?php endfor ?>

		<li>&hellip;
		<li><a href="<?php echo $page->url($total_pages - 1) ?>"><?php echo $total_pages - 1 ?></a>
		<li><a href="<?php echo $page->url($total_pages) ?>"><?php echo $total_pages ?></a>

	<?php endif ?>

	<?php if ($next_page): ?>
		<li><a href="<?php echo $page->url($next_page) ?>"><?php echo __('Next') ?>&nbsp;&raquo;</a>
	<?php else: ?>
		<li class="disabled"><a href="#"><?php echo __('Next') ?>&nbsp;&raquo;</a>
	<?php endif ?>
  </ul>
</div>