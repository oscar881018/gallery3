<?php defined("SYSPATH") or die("No direct script access.") ?>
<script>
  $(".gMicroThumb").click(toggle_select);
</script>
<? foreach ($children as $i => $child): ?>
<? $item_class = "gPhoto"; ?>
<? if ($child->is_album()): ?>
  <? $item_class = "gAlbum"; ?>
<? endif ?>
<li>
  <div>
  <div class="gOrganizeReorderDropTarget" ref="<?= $child->id ?>">&nbsp;
  </div>
  <div id="gMicroThumb-<?= $child->id ?>" class="gMicroThumb <?= $item_class ?>">
    <?= $child->thumb_tag(array("class" => "gThumbnail"), $thumbsize, true) ?>
  </div>
    </div>
</li>
<? endforeach ?>
