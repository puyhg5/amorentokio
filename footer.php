    </main>

    <footer class="footer">
      <div class="mobile-color">
        <div class="container-newsletter-instagram">
          <div class="instagram-newsletter">
            <div class="name-instagram">
              <a class="instagram-link letter-spacing" href="https://www.instagram.com/sandraholmes" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="underline">s</span>andraholmes</a>
            </div>
            <div class="newsletter">
              <p class="no-margin letter-spacing"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> suscríbete</p>
              <div class="text-input-newsletter">
                <p class="small-newsletter">Recibe Amor en Tokio en tu email:</p>
                <input class="input-newsletter" type="text" name="input-newsletter">
              </div>
            </div>
          </div>
          <?php if(function_exists('simple_instagram')){ ?>
            <?php echo do_shortcode('[simple-instagram limit="6"]'); ?>
          <?php }else{ ?>
            Es necesarion instalar plugin <a href="https://es.wordpress.org/plugins/easy-simple-instagram/">Simple Instagram Feed</a>
          <?php } ?>
        </div>
      </div>
      <div class="container-rrss">
        <ul class="list-rrss">
          <li><a class="rrss-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</a></li>
          <li><a class="rrss-link" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i> pinterest</a></li>
          <li><a class="rrss-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
          <li><a class="rrss-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> twitter</a></li>
          <li><a class="rrss-link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i> youtube</a></li>
        </ul>
        <div class="copyright">
          <p class="no-margin">2017 © amorentokio.</p>
          <p class="text-copyright">diseño <a class="melon-link" href="http://melonblanc.com/" target="_blank">melon blanc</a>.</p>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav.js" charset="utf-8"></script>

  </body>
</html>