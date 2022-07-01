<?php
/**
 * Template part for displaying post content in post.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

?>

<article class="postcard light blue">
    <a class="postcard__img_link" href="<?php the_permalink() ?>">
        <img class="postcard__img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php the_title_attribute(); ?>" />
    </a>
    <div class="postcard__text t-dark">
        <h2 class="postcard__title blue">
            <a class="link darkgreen" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>
        <div class="postcard__subtitle small">
            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
        </div>
        <div class="postcard__bar"></div>
        <div class="postcard__preview-txt"><?php the_excerpt(); ?></div>
        <ul class="postcard__tagbox">
            <a class="link" href="<?php the_permalink() ?>">READ MORE</a>
        </ul>
    </div>
</article>

