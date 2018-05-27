<div id="site-menu">
  <nav>
    <ul>
      <?php foreach($pages->visible() as $item): ?>
        <li class="<?= r($item->isOpen(), 'current-menu-item') ?>">
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>


<!--
if($page->hasVisibleChildren()) {
  $children = $page->children()->visible();
}

<li class="menu-item-has-children">
  <a href="#">Submenu Test</a>
  <ul>
    <li><a href="#">Submenu Item 1</a></li>
    <li><a href="#">Submenu Item 2</a></li>
    <li><a href="#">Submenu Item 3</a></li>
  </ul>
</li>
//-->
