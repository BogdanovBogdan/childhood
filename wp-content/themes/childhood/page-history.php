<?php
   // Template Name: Наша история
?>

<?php get_header() ?>

<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field("aboutus_title") ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field("aboutus_subtitle1") ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field("aboutus_text1") ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $img = get_field("aboutus_img1");

                if (!empty($img)) : ?>
                    <img class="aboutus__img" src="<?php echo $img["url"]; ?>" alt="<?php echo $img["alt"]; ?>">
                <?php endif;

                ?>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                $img = get_field("aboutus_img2");

                if (!empty($img)) : ?>
                    <img class="aboutus__img" src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>">
                <?php endif;

                ?>

            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field("aboutus_subtitle2") ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field("aboutus_text2") ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field("aboutus_subtitle3") ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field("aboutus_text3") ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $img = get_field("aboutus_img3");

                if (!empty($img)) : ?>
                    <img class="aboutus__img" src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>">
                <?php endif;

                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>