<?php $pageTitle = 'About'; include 'includes/header.php'; ?>
<section class="wrap"><h1><?= t('about_h1') ?></h1><p class="lead"><?= t('about_p') ?></p>
  <h2><?= t('mission') ?></h2><ol><li><?= t('m1') ?></li><li><?= t('m2') ?></li><li><?= t('m3') ?></li></ol>
  <h2><?= t('team') ?></h2>
  <div class="scroll-x"><table><thead><tr><th><?= t('name') ?></th><th><?= t('role') ?></th></tr></thead>
    <tbody><tr><td>Lerato M.</td><td>Head Roaster</td></tr><tr><td>Sipho K.</td><td>Barista</td></tr><tr><td>Anri V.</td><td>Manager</td></tr></tbody></table></div>
  <h2><?= t('faq') ?></h2>
  <details><summary><?= t('faq1') ?></summary><p><?= t('faq1a') ?></p></details>
  <details><summary><?= t('faq2') ?></summary><p><?= t('faq2a') ?></p></details>
  <p>Since <time datetime="2024-02-01">February 2024</time>.</p></section>
<?php include 'includes/footer.php'; ?>
