<?php get_header(); ?>
<section>
	<h1><?php printf('Посты с тэгом: %s', single_tag_title('', false)); // заголовок тэга ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
		<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
	<?php endwhile; // конец цикла
	else: echo '<h2>Нет записей.</h2>'; endif; // если записей нет, напишим "простите" ?>	 
	<?php pagination(); // пагинация, функция нах-ся в function.php ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>