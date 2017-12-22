<?php if( have_rows('locations', 'option') ): ?>


<?php $i = 0;?>

<?php while ( have_rows('locations', 'option') ) : the_row(); ?>
<div class="col-md-2 col-sm-6 col-xs-6">

<?php $i++; ?>

<?php if($i === 1){ ?>
<h4>
<a href="" style="">
                Locations</a></h4>

<?php }else{?>
<h4>
<a href="" style="opacity:0;">
                Locations</a></h4>
<?php } ?>




    <p>
<?php
        // display a sub field value
        the_sub_field('address');
?>
</p>
</div>
<?php
    endwhile;
?>
<div class="col-md-2 col-sm-2 col-xs-3">
  <p><img class="donuts-word" src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/img/donuts-color-logo.png'; ?>"></p>

</div>
<div class="col-md-2 col-sm-2 col-xs-3">
  <p><img class="donuts-d" src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/img/donuts-d.png'; ?>"></p>
</div>
<?php
else :
endif;
?>
