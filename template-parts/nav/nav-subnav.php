<?php 
    $background_color = get_field('subnav_background_color'); // choice 
?>
<section class="nav-subnav <?php echo $background_color;?>">
    <ul>
        <li>
            <img class="icon icon__hours" src="<?php echo esc_url( get_template_directory_uri() . '/src/ico/clock-o.svg' ); ?>" alt="icon">
            <h3>Hours</h3>
            <a href="/visit#hours" target="" class="link">When to Visit</a>
        </li>
        <li>
            <img class="icon icon__directions" src="<?php echo esc_url( get_template_directory_uri() . '/src/ico/map-marker.svg' ); ?>" alt="icon">
            <h3>Directions</h3>
            <a href="https://www.google.com/maps/place/Lakeshore+State+Park/@43.0336327,-87.8955177,15z/data=!4m5!3m4!1s0x0:0xb7723c46246b7a57!8m2!3d43.0336327!4d-87.8955177" target="_blank" class="link">Getting Here</a>
        </li>
        <li>
            <img class="icon icon__maps" src="<?php echo esc_url( get_template_directory_uri() . '/src/ico/compass.svg' ); ?>" alt="icon">
            <h3>Maps</h3>
            <a href="http://friendslsp.org/wp-content/uploads/2019/11/Lakeshore-State-Park-Map-Without-Distances-e1574630278415.jpg" target="_blank" class="link">Getting Around</a>
        </li>
        <li>
            <img class="icon icon__events" src="<?php echo esc_url( get_template_directory_uri() . '/src/ico/fish.svg' ); ?>" alt="icon">
            <h3>Fishing</h3>
            <a href="/education" target="" class="link">Cast a Hook</a>
        </li>
    </ul>
</section>