    <?php wp_footer(); ?>
    </body>

    <footer class="footer">

    <ul class='footer__ul'>
        <li class="footer__li"> <a href="<?php echo site_url('/about') ?>">About</a> </li>
        <li class="footer__li"><a href="<?php echo get_post_type_archive_link('drill-type'); ?>">Drills</a></li>
        <li class="footer__li">Forms</li>
        <li class="footer__li">Calendar</li>
        <li class="footer__li">Store</li>
        <li class="footer__li"> <a href="<?php echo get_post_type_archive_link('note'); ?>">Notes</a></li>
    </ul>
    
    <div class="footer__contact">  
        <div class='footer__contact-heading'>Contact</div>
        <div class='footer__contact-text'>You can reach us at:</div>
        <div class='footer__contact-info'>bpeterman@customalloy.us</div>
        <div class="footer__contact-text">Or call us at:</div>
        <div class="footer__contact-info">908-581-1536</div>
    </div>        
    
    <div class="footer__copyright">One Voice Basketball &copy; 2019</div>

    <span id="my_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>

    </footer>

</html>