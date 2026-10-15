<?php $pageTitle = 'Home'; include 'includes/header.php'; ?>
<section class="hero">
  <img src="images/hero-coffee-bar.svg" alt="Illustration of two coffee cups on a bar counter" class="hero-img">
  <div class="hero-text"><h1><?= t('h1') ?></h1><p><?= t('tag') ?></p>
    <p><a class="btn" href="#menu"><?= t('cta1') ?></a> <a class="btn ghost" href="contact.php"><?= t('cta2') ?></a></p></div>
</section>
<section class="wrap"><h2><?= t('why') ?></h2>
  <ul class="cols">
    <li><h3><?= t('w1') ?></h3><p><?= t('w1d') ?></p></li>
    <li><h3><?= t('w2') ?></h3><p><?= t('w2d') ?></p></li>
    <li><h3><?= t('w3') ?></h3><p><?= t('w3d') ?></p></li>
  </ul></section>
<section class="wrap" id="menu"><h2><?= t('menu_t') ?></h2>
  <div class="gallery">
    <figure><img src="images/product-espresso.svg" alt="Espresso cup" loading="lazy"><figcaption>Espresso</figcaption></figure>
    <figure><img src="images/product-flat-white.svg" alt="Flat white cup" loading="lazy"><figcaption>Flat White</figcaption></figure>
    <figure><img src="images/product-cold-brew.svg" alt="Cold brew glass" loading="lazy"><figcaption>Cold Brew</figcaption></figure>
  </div>
  <div class="filters"><input type="search" id="q" placeholder="<?= t('search') ?>" aria-label="<?= t('search') ?>">
    <button data-f="all" class="chip on"><?= t('all') ?></button><button data-f="hot" class="chip"><?= t('hot') ?></button><button data-f="cold" class="chip"><?= t('cold') ?></button></div>
  <div class="scroll-x"><table id="menu-table"><caption class="sr"><?= t('menu_t') ?></caption>
    <thead><tr><th><?= t('item') ?></th><th><?= t('type') ?></th><th><?= t('price') ?></th></tr></thead>
    <tbody>
      <tr data-t="hot"><td>Espresso</td><td><?= t('hot') ?></td><td><span class="price">R28</span></td></tr>
      <tr data-t="hot"><td>Flat White</td><td><?= t('hot') ?></td><td><span class="price">R38</span></td></tr>
      <tr data-t="hot"><td>Cappuccino</td><td><?= t('hot') ?></td><td><span class="price">R40</span></td></tr>
      <tr data-t="cold"><td>Cold Brew</td><td><?= t('cold') ?></td><td><span class="price">R45</span></td></tr>
      <tr data-t="cold"><td>Iced Latte</td><td><?= t('cold') ?></td><td><span class="price">R48</span></td></tr>
    </tbody></table></div></section>
<section class="wrap alt"><blockquote><p>&ldquo;<?= t('quote') ?>&rdquo;</p><footer>&mdash; <cite><?= t('quote_by') ?></cite></footer></blockquote></section>
<section class="wrap"><h2><?= t('vid') ?></h2>
  <video controls preload="none" poster="images/hero-coffee-bar.svg" width="100%"><source src="videos/roasting.mp4" type="video/mp4">Your browser does not support video.</video>
  <h2><?= t('links') ?></h2>
  <ul class="links">
    <li><a href="https://en.wikipedia.org/wiki/Coffee" target="_blank" rel="noopener">Coffee &ndash; Wikipedia</a></li>
    <li><a href="https://sca.coffee/" target="_blank" rel="noopener">Specialty Coffee Association</a></li>
    <li><a href="https://ico.org/" target="_blank" rel="noopener">International Coffee Organization</a></li>
    <li><a href="https://www.vut.ac.za/" target="_blank" rel="noopener">Vaal University of Technology</a></li>
  </ul></section>
<?php include 'includes/footer.php'; ?>
