<section id="section7" class = "footer-section">
      <footer>
      <?php if(is_front_page()) :?>
            <div class="contact-place">
      <!-- Widget-area  Contact form -->           
                  <?php dynamic_sidebar('first-footer-widget-area'); ?>

                  <address>Napisz do nas: <br><a href="mailto:ministronka@.csom">Ministronka</a><br>Zadzwoń: <br>+48 123 123 123<br></address>
            </div>
            <?php endif;  ?>
            <!-- Copyright Info -->
            <div class="copyright">
                  <p>Copyright © 2021 Ministronka </p>
                  <p><a href="<?php echo home_url() . '/polityka-prywatnosci/' ?>">Polityka prywatności i regulamin strony</a>
            </div>

            <?php wp_footer(); ?>

      </footer>
</section>
</body>
</html>
