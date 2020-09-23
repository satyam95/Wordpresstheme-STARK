<footer>
        <div class="container d-flex justify-content-between">
          <div class="logo footer">
                <?php if(has_custom_logo()): ?>
                   <?php the_custom_logo(); ?>
                <?php else:?>
                <a href="index.html">
                  <?php bloginfo('name') ?>
                </a>
                <?php endif; ?>
          </div>
          <div class="footer-middle-box">
            <div class="nav">
              <?php 
                wp_nav_menu(array(
                  'theme_location'  => 'footer_menu',
                  'menu_class'      => 'footer-menu'

                )); 
               ?>
            </div>
            <div class="newsletter">
              <form action="?" class="d-flex flex-wrap">
                <input type="text" class="form-control" />
                <button class="btn">Send</button>
              </form>
            </div>
          </div>
          <div class="address">
            <p>
                <?php if(get_theme_mod('heading_1f', 'default') != '') : ?>
                    <?php echo get_theme_mod('heading_1f', 'Enter Text'); ?>
                <?php endif; ?>
            </p>
          </div>
        </div>
      </footer>
      <?php wp_footer(); ?>
      
    </div>
    <script>
    
    
jQuery(document).ready(function () {
  jQuery('.hamburger-icon').click(function(){
    jQuery(this).toggleClass('is-open');
    jQuery('.nav-menu').toggle(1000);
    })
  });
  AOS.init({
    easing: 'ease-in-out-sine'
  });


    </script>
    
  </body>
</html>
