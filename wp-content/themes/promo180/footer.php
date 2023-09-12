</main>
    <footer>
    <?php dynamic_sidebar('footer1');?>
    
        <h1 class="logo">ÉclatDev<span>180</span></h1>
        <div class="footer-span">
            
            <span>Campaigns</span>
            <span>Campaigns</span>
            <span>Campaigns</span>
        </div>
        <div class="social">
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/picto/facebook.svg" alt="facebook"></a>
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/picto/twiter.svg" alt="twiter"></a>
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/picto/instagram.svg" alt="instagram"></a>
        </div>
      

    </footer>


    <?php wp_enqueue_script(

        'modal_burger',
        get_template_directory_uri() . '/assets/js/modal_burger.js',
        array(
            'strategy'  => 'defer',
        )
    );
    ?>

 <?php wp_footer(); ?>
</body>

</html>