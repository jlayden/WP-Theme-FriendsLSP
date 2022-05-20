<?php 
    $background_color = get_field('subnav_background_color'); // choice 
?>
<section class="nav-subnav <?php echo $background_color;?>">
    <ul>
        <li>
            <img class="icon icon__hours" src="http://friendslsp.org/wp-content/uploads/2022/05/icon-trails.png" alt="icon">
            <h3>Hours</h3>
            <a href="/hours/" target="" class="link">When to Visit</a>
        </li>
        <li>
            <img class="icon icon__directions" src="http://friendslsp.org/wp-content/uploads/2022/05/icon-trails.png" alt="icon">
            <h3>Directions</h3>
            <a href="https://goo.gl/maps/" target="_blank" class="link">Getting Here</a>
        </li>
        <li>
            <img class="icon icon__maps" src="http://friendslsp.org/wp-content/uploads/2022/05/icon-trails.png" alt="icon">
            <h3>Maps</h3>
            <a href="/maps/" target="" class="link">Getting Around</a>
        </li>
        <li>
            <img class="icon icon__events" src="http://friendslsp.org/wp-content/uploads/2022/05/icon-trails.png" alt="icon">
            <h3>Reservations</h3>
            <a href="/reserve/" target="" class="link">Book an Event</a>
        </li>
    </ul>
</section>