<?php
/**
 * Template part for displaying post content in post.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flsp_custom
 */

?>
<!-- light or dark versions  -->
<article class="postcard dark blue">
    <a class="postcard__img_link" href="<?php the_permalink() ?>">
        <img class="postcard__img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" alt="<?php the_title_attribute(); ?>" />
    </a>
    <div class="postcard__text t-dark">
        <h2 class="postcard__title blue">
            <a class="link darkgreen" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>
        <div class="postcard__subtitle small">
            <!-- <time datetime="2020-05-25 12:00:00">
                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
            </time> -->
            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
        </div>
        <div class="postcard__bar"></div>
        <div class="postcard__preview-txt"><?php the_excerpt(); ?></div>
        <ul class="postcard__tagbox">
            <a class="link" href="<?php the_permalink() ?>">READ MORE<i class="fas fa-caret-right"></i></a>
            <!-- <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li> -->
            <!-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li> -->
            <!-- <li class="tag__item play blue">
                <a href="<?php the_permalink() ?>">Read More<i class="fas fa-play mr-2"></i></a>
            </li> -->
        </ul>
    </div>
</article>

