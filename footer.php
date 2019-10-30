<footer>
    <div class="inner flex-row">
        <div class="block">
            <h3>Products</h3>
            <ul>
                <li><a href="<?php echo get_site_url(); ?>/vertical-blinds/">Vertical Blinds</a></li>
                <li><a href="<?php echo get_site_url(); ?>/venetian-blinds/">Venetian Blinds</a></li>
                <li><a href="<?php echo get_site_url(); ?>/roman-blinds/">Roman Blinds</a></li>
                <li><a href="<?php echo get_site_url(); ?>/roller-blinds/">Roller Blinds</a></li>
                <li><a href="<?php echo get_site_url(); ?>/shutters/">Shutters</a></li>
                <li><a href="<?php echo get_site_url(); ?>/soft-furnishings/">Soft Furnishings</a></li>
            </ul>
        </div>

        <div class="block">
            <h3>Find us</h3>
            <ul>
                <li>Galaxy Blinds</li>
                <li>65 Yarm Lane</li>
                <li>Stockton-on-Tees</li>
                <li>TS18 3DU</li>
            </ul>
        </div>

        <div class="block">
            <h3>Contact us</h3>
            <ul>
                <li>Stockton / M'boro: <a href="tel:01642861166">01642 861 166</a></li>
                <li>Darlington: <a href="tel:01325240605">01325 240 605</a></li>
                <li>Spennymoor: <a href="tel:01388741252">01388 741 252</a></li>
                <li>Mobile: <a href="tel:07830341665">07830 341 665</a></li>
            </ul>
        </div>

        <div class="block yell">
            <a href="https://www.yell.com/biz/galaxy-blinds-stockton-on-tees-7569534/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/yell@2x.png"></a>
        </div>
    </div>

    <div class="sub-footer flex-row">
        <div class="links">
            <p>&copy; 2019 Galaxy Blinds<span> | </span>
                <a href="<?php echo get_site_url(); ?>/terms/">Terms of Use</a><!--<span> | </span>
                <a href="<?php echo get_site_url(); ?>/privacy/">Privacy</a>-->
            </p>
        </div>
        <a class="social" href="https://facebook.com/galaxy4blinds" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/fb.svg"></a>
    </div>
</footer>
</div>


<!--scripts-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>

<!--mobile menu -->
<script type="text/javascript">
    
    $(window).load(function() {
        $("body").addClass('all-loaded');
    });
    
    $(document).ready(function () {
        var $menu = $("#my-menu").mmenu({
            "offCanvas": {
                "position": "right"
            },
            "extensions": [
            //"fx-menu-fade",
            "fx-listitems-slide"
         ]  
        });
        var $icon = $("#my-icon");
        var API = $menu.data("mmenu");
        $icon.on("click", function () {
            API.open();
        });
        API.bind("open:finish", function () {
            setTimeout(function () {
                $icon.addClass("is-active");
            }, 10);
        });
        API.bind("close:finish", function () {
            setTimeout(function () {
                $icon.removeClass("is-active");
            }, 10);
        });
    });
</script>

<!--slider-->
<script>
$(document).ready(function(){
  $('.slider-wrap').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    speed: 1700,
    pauseOnHover: false,
    cssEase: 'linear'
  });
});    
</script>

<?php wp_footer();?>
</body>

</html>