<?php get_header(); ?>
	<?php $page_data = get_page($_GET['page_id']); ?>
	<?php echo $page_data->post_content; ?>
<?php get_footer(); ?>

