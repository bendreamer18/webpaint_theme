<div class="row" id="footer">

<span id="getintouch"> <?php echo ale_get_option('footer_head'); ?> </span> <br>
<span id="undertouch"> <?php echo ale_get_option('footer_text'); ?> </span> <br> <br>

<div id="address">

<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/fill.png" width="9" height="13">

<span id="street"><?php echo ale_get_option('your_address'); ?></span>   
<br>
<img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/phone.png" width="10" height="11"> 
<span id="phone_number"><?php echo ale_get_option('phone_num'); ?></span>

</div>

<div id="social_links">

<?php if(ale_get_option('rss')) { echo '<a href="'.ale_get_option('rss').'" target="_blank"><img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/rss.png" width="30" height="30"></a>'; } ?>

<?php if(ale_get_option('fb')) { echo '<a href="'.ale_get_option('fb').'" target="_blank"><img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/facebook.png" width="30" height="30"></a>'; } ?>

<?php if(ale_get_option('twi')) { echo '<a href="'.ale_get_option('twi').'" target="_blank"><img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/twitter.png" width="30" height="30"></a>'; } ?>

<?php if(ale_get_option('pink')) { echo '<a href="'.ale_get_option('pink').'" target="_blank"><img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/pink.png" width="30" height="30"></a>'; } ?>

<?php if(ale_get_option('pint')) { echo '<a href="'.ale_get_option('pint').'" target="_blank"><img src="http://webpaint/wp-content/themes/webpaint-theme/css/images/pinterest.png" width="30" height="30"></a>'; } ?>

</div>

<div class="row" id="rights">

<?php if(ale_get_option('copyrights')) : ?>
    <p><?php echo ale_option('copyrights'); ?></p>

<?php else: ?>
    <p>&copy; <?php echo "2016 Webpaint. All Rights Reserved." ?></p>
<?php endif; ?>

    <?php wp_footer(); ?>

</div>

</body>
</html>