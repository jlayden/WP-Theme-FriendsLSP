<?php $display = get_field('callout_section_display'); // checkbox ?>
<?php $background_color = get_field('callout_section_background_color'); // choice text ?>
<?php $css_class = get_field('callout_section_css_class'); // choice text ?>
<?php $subtitle = get_field('callout_section_subtitle'); // text ?>
<?php $title = get_field('callout_section_title'); // text ?>
<?php $button = get_field('callout_section_button'); // group ?>
<?php if ($display == 'visible') { ?>	
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
<?php } ?>