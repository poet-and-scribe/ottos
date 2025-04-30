<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav>
  Parents
    <?php foreach($items as $item): ?>
    <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
</nav>

<?php endif ?>

<?php

$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->listed();
}

// only show the menu if items are available
if($items and $items->isNotEmpty()):

?>
<nav>
  Children
    <?php foreach($items as $item): ?>
    <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
</nav>
<?php endif ?>

<?php

// independent sub sub menu
$items = false;

// get the open item on the first level
if($root1 = $pages->findBy('isOpen', true)) {

  // get the open item on the second level
  if($root2 = $root1->children()->findOpen()) {

    // get visible children of the second level item
    $items = $root2->children()->listed();
  }
}

// only show the menu if items are available
if($items and $items->isNotEmpty()):

?>
<nav>
  Grandchildren
    <?php foreach($items as $item): ?>
    <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
</nav>
<?php endif ?>
