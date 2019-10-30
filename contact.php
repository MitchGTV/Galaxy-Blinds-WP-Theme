<?php /*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="hero page-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/contact-hero.jpg);">
    <div class="inner">
        <h1 class="fade-in">Contact us</h1>
        <p class="fade-in-2">Get in touch with Galaxy Blinds today</p>
    </div>
</section>


<section class="contact-blocks cbr flex-row">
    <div class="details-wrap">
        <div class="content">
            <h3>Contact us</h3>
            <p>To find out how we can help you, please don’t hesitate to contact us.</p>

            <p class="num">Stockton / Middlesbrough:</p>
            <a class="call" href="tel:01642861166">01642 861 166</a>

            <p class="num">Darlington:</p>
            <a class="call" href="tel:01325240605">01325 240 605</a>

            <p class="num">Spennymoor:</p>
            <a class="call" href="tel:01388741252">01388 741 252</a>

            <p class="num">Mobile:</p>
            <a class="call" href="tel:07830341665">07830 341 665</a>

            <p class="num">Visit us:</p>
            <p><strong>Galaxy Blinds</strong><br>65 Yarm Lane<br>Stockton-on-Tees<br>TS18 3DU</p>

            <p class="num">Business Hours:</p>
            <p>Monday to Friday – 9am to 5pm<br> Monday to Friday – 10am to 2pm<br> Sunday – Closed</p>
        </div>
    </div>

    <div class="form-wrap">
        <div class="content">
            <h3>Send us a message</h3>
            <p>Enter your details and message below and our friendly team will get back to you as soon as possible.</p>

            <div class="the-form">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8604.485980524418!2d-1.3235679019591202!3d54.55960773676171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e92fb6b104391%3A0x979c6785ee219511!2sGalaxy%20Blinds!5e0!3m2!1sen!2suk!4v1572279994332!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>



<?php get_footer(); ?>