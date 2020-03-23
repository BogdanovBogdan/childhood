<?php
// Template Name: Развивающие игрушки
// Template Post Type: page, educat_toys
?>

<?php get_header() ?>

<div class="toys" id="toys">
   <div class="container">
      <h2 class="subtitle">Развивающие игрушки</h2>
      <div class="toys__wrapper">

         <?php
         $posts = get_posts(array(
            'numberposts' => -1,
            'category_name'    => "educat_toys",
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ));

         foreach ($posts as $post) {
            setup_postdata($post);
         ?>
            <div class="toys__item" style="background-image: url(<?php
                                                                  if (has_post_thumbnail()) {
                                                                     the_post_thumbnail_url();
                                                                  } else {
                                                                     echo get_template_directory_uri() . "/assets/img/not-found.jpg";
                                                                  }
                                                                  ?>)">
               <div class="toys__item-info">
                  <div class="toys__item-title"><?php the_title(); ?></div>
                  <div class="toys__item-descr">
                     <?php the_field("toys_desc") ?>
                  </div>
                  <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
               </div>
            </div>
         <?php
         }
         wp_reset_postdata(); // сброс
         ?>
      </div>

      <div class="row">
         <div class="col-lg-10 offset-lg-1">
            <?php
            if (get_field("checkbox_not-found", 2)) : ?>
               <div class="toys__alert"> <?php the_field("text_not-found", 2); ?> </div>
            <?php endif;
            ?>
         </div>
      </div>
   </div>
</div>


<?php get_footer() ?>