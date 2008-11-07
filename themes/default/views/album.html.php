<? defined("SYSPATH") or die("No direct script access."); ?>
  <div id="gAlbumGridHeader">
    <h1><?= $item->title ?></h1>
    <span class="understate"><?= $item->description ?></span>
    <a href="#" id="gSlideshowLink" class="buttonlink">Slideshow</a>
  </div>

  <ul id="gAlbumGrid">
  <? foreach ($children as $i => $child): ?>
    <? $album_class = ""; ?>
    <? if ($child->is_album()): ?>
      <? $album_class = "gAlbum "; ?>
    <? endif ?>
    <li class="gItem <?= $album_class . text::alternate("first", "", "") ?>">
      <a href="<?= url::site("photo/{$child->id}") ?>">
        <img id="gPhotoID-<?= $child->id ?>" class="gThumbnail"
             alt="photo" src="<?= $child->thumbnail_url() ?>"
             width="<?= $child->thumbnail_width ?>"
             height="<?= $child->thumbnail_height ?>" />
      </a>
      <h2><?= $child->title ?></h2>
      <ul class="gMetadata">
        <li>Views: 321</li>
        <li>By: <a href="#">username</a></li>
      </ul>
    </li>  
  <? endforeach ?>
  </ul>
  
  <div id="gPagination">
    Items 1-10 of 34
    <span class="first_inactive">first</span>
    <span class="previous_inactive">previous</span>
    <a href="#" class="next">next</a>
    <a href="#" class="last">last</a>
  </div>
