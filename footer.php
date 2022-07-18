<!-- Close container opened in header -->
</div>
</div>
<!-- Whatsapp floating icon -->
<div class="whatsapp">
    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/whatsapp.png'; ?>"></img>
	<div>
		<a href="https://api.whatsapp.com/send?phone=5511953750095&text=Ol%c3%a1%2c+tudo+bom%3f%0d%0aPeguei+este+n%c3%bamero+no+site+do+SNA.+Voc%c3%aa+pode+me+ajudar%3f"></a>
		<a href="https://api.whatsapp.com/send?phone=5511986870052&text=Ol%c3%a1%2c+tudo+bom%3f%0d%0aPeguei+este+n%c3%bamero+no+site+do+SNA.+Voc%c3%aa+pode+me+ajudar%3f"></a>
	</div>
</div>
<!-- Return floating icon -->
<div onclick="returnTop()" id="return" class="return">
</div>
<!-- Footer -->
<div class="footer-container">
    <div class="footer">
        <div class="links">
            <div>
                <?php
					wp_nav_menu(array(
						'container' => 'ul',
						'menu_class' => 'footer-menu footer-menu',
					));
				?>
            <!-- SNA and IFALPA logo -->
            <div class="logos">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/logo.png'; ?>">
                </div>
                <br>
                <!-- Social icons (same as header) -->  
                <div class="social">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/instagram.svg'; ?>" onclick="window.open('https://www.instagram.com/sindicatonacionaldosaeronautas/', '_blank');"></img> &nbsp &nbsp &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/play.svg'; ?>" onclick="window.open('https://www.youtube.com/channel/UCNrzOB7sbTU6qiOneDn7Ykg', '_blank');"></img> &nbsp &nbsp &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/facebook.svg'; ?>" onclick="window.open('https://www.facebook.com/sindicatonacionaldosaeronautas', '_blank');"></img> &nbsp &nbsp &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/twitter.svg'; ?>" onclick="window.open('https://twitter.com/aeronautas_sna', '_blank');"></img> &nbsp &nbsp &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/flickr.svg'; ?>" onclick="window.open('https://www.flickr.com/photos/sindicatonacionaldosaeronautas', '_blank');"></img> 
				</div>
                <h6>Membro</h6>
                <div><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/ifalpa.png'; ?>"></div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT at the end of every page, as header and footer -->
    <h8>© COPYRIGHT 2022 - ALL RIGHTS RESERVED</h8>
</div>

</body>

</html>
