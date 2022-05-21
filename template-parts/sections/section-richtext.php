<?php $richtext = get_field('richtext'); // WYSIWIG rich text editor 
if ($richtext){?>
<section class="richtext">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <?php echo $richtext; ?>
            </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>