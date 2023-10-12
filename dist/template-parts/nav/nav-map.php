<?php
require('dotenv').config();
$GOOGLE_MAPS_API_KEY = process.env.$GOOGLE_MAPS_API_KEY;
?>

<div class="map" style="width: 100%">
    <iframe 
        width="100%" 
        height="350" 
        frameborder="0" 
        style="border:0"
        scrolling="no" 
        marginheight="0" 
        marginwidth="0"
        src="https://www.google.com/maps/embed/v1/place?key=<?php echo $GOOGLE_MAPS_API_KEY; ?>&q=500%20N%20Harbor%20Dr,%20Milwaukee,%20WI%2053202+(Lakeshore%20State%20Park)"
        referrerpolicy="no-referrer-when-downgrade"
    >
    </iframe>
</div>

