<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hello, world!</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta name="twitter:card" content="" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="" />
</head>
<body>
  <header>
    <?php snippet('navigation') ?>
  </header>
  <main>
    <h1><?= $page->title() ?></h1>
    <section>
      <?= $page->text()->kirbytext() ?>
    </section>

    <?php foreach($page->children()->listed()->flip() as $article): ?>

    <article>
      <h1><?= $article->title()->html() ?></h1>
      <p><?= $article->text()->excerpt(300) ?></p>
      <a href="<?= $article->url() ?>">Read more…</a>
    </article>

    <?php endforeach ?>


    <section></section>
  </main>
  <footer>
    <?php snippet('footer') ?>
  </footer>
</body>
</html>
