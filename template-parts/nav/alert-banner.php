<?php 
    $headline = get_field('homepage_alert_headline'); // text
    $url = get_field('homepage_alert_link'); // URL
    $background_color = get_field('homepage_alert_background_color'); // choice 
?>
<a class="site-alert-banner <?php echo $background_color; ?>" href="<?php echo $url ?>" target="_blank">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $headline ?></h2>
            </div>
        </div>
    </div>
</a>