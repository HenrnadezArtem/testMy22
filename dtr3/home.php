<?php
/*
Template Name: Home2
*/
?>
<?php 
get_header();
?>
<?php
global $post;

// Получаем все записи
$zapis = new WP_Query([
  'category_name' => 'длятемыDtr3',
    'posts_per_page' => -1, // Получаем все записи
    'orderby'        => 'date', // Указываем сортировку по дате
    'order'          => 'ASC', // по возрастанию, от старого к новому
]);

// Счётчик для отслеживания позиции
$counter = 0;

if ($zapis->have_posts()) {
    while ($zapis->have_posts()) {
        $zapis->the_post();
        // Увеличиваем счётчик
        $counter++;
        
        // Определяем, левая или правая сторона
        if ($counter % 2 == 1) { // если counter остаток равен не нулю, то текст будет выводиться в левую сторону, иначе в правую
        ?>
        <div class="container">
        <div class="all_side">
            <div class="left_side">
                <div class="text_schet">.0<?php echo $counter; ?> <p class="text_srascheta"><?php the_title(); ?></p></div>
                <div class="levaprava">
                    <div class="leva">
                        <div class="palka"></div>
                    </div>
                    <div class="prava">
                        <div class="text_iz-WP">
                        <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_side">
                <?php the_post_thumbnail(
                    array(622, 513),
                    array(
                    'class' => 'img_verxnee'
                )
                );  ?>
            </div>
        </div>
        <?php
        } else { // Четная итерация
        ?>
        <div class="all_side-2">
            <div class="left_side-2">
                <div class="text_schet-2">.0<?php echo $counter; ?></div>
                <div class="text_srascheta-2">
                <?php the_title(); ?>
                </div>  
                <div class="levaprava-2">
                    <div class="leva-2">
                        <div class="palka-2"></div>
                    </div>
                    <div class="prava-2">
                        <div class="text_iz-WP-2">
                        <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_side-2">
            <?php the_post_thumbnail(
                array(610, 513),
                array(
                'class' => 'img_verxnee-2'
                )
            );  ?>
            </div>
        </div>
        <?php
        }
    }
}  
wp_reset_postdata(); // Сбрасываем глобальную переменную $post после цикла
?>
<?php wp_footer(); ?>
</body>
</html>