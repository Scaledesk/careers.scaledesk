<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/19/2016
 * Time: 11:03 AM
 */
?>
<script src="<?php echo asset_url(); ?>js/nlform.js"></script>
<script>
    var nlform = new NLForm( document.getElementById( 'nl-form' ) );
</script>








<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo asset_url(); ?>js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="<?php echo asset_url(); ?>plugins.js"></script>
<script src="<?php echo asset_url(); ?>js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>

