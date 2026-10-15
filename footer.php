</main>
<footer class="site-footer">
  <div class="foot-grid">
    <div><h2>Vaal Roast Coffee Co.</h2>
      <address>12 Hendrik Potgieter St,<br>Vanderbijlpark, Gauteng, 1911<br><a href="tel:+27169509000">016 950 9000</a><br><a href="mailto:hello@vaalroast.example">hello@vaalroast.example</a></address></div>
    <div><h2><?= t('quick') ?></h2><ul><li><a href="index.php"><?= t('home') ?></a></li><li><a href="about.php"><?= t('about') ?></a></li><li><a href="contact.php"><?= t('contact') ?></a></li></ul></div>
    <div><h2><?= t('follow') ?></h2><ul>
      <li><a href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook</a></li>
      <li><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a></li>
      <li><a href="https://x.com/" target="_blank" rel="noopener">X (Twitter)</a></li></ul></div>
  </div>
  <p class="copy">&copy; <?= date('Y') ?> Vaal Roast Coffee Co. <?= t('rights') ?></p>
</footer>
<button id="top" type="button" hidden><?= t('top') ?></button>
<script src="js/main.js"></script>
</body>
</html>
