<?php $background_color = get_field('background_color'); // choice text ?>
<?php $css_class = get_field('css_class'); // choice text ?>
<?php $subtitle = get_field('subtitle'); // text ?>
<?php $title = get_field('title'); // text ?>
<?php $button = get_field('button'); // group ?>

<section class="calloutbar <?php echo $css_class; ?> <?php echo $background_color; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5><?php echo $subtitle; ?></h5>
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-lg-6">
                <div class="cta">
                    <a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>