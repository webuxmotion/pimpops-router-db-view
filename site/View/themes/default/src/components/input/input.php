<?php
  $item = $input;
  $b = [];
  $b['type'] = isset($item['type']) ? $item['type']          : 'text';
  $b['label'] = isset($item['label']) ? $item['label']       : null;
  $b['classes'] = isset($item['classes']) ? $item['classes'] : '';
  $b['id'] = isset($item['id']) ? $item['id']                : null;
  $b['id_tag'] = isset($b['id']) ? 'id="' . $b['id'] . '"'   : null; 
  $b['for_tag'] = isset($b['id']) ? 'for="' . $b['id'] . '"' : null; 
?>

<div class="input <?=$b['classes']?>">
  <?php if (isset($b['label'])) : ?>
    <div class="input__label-wrapper">
      <label <?=$b['for_tag']?> class="input__label"><?=$b['label']?></label>
    </div>
  <?php endif; ?>
  <div class="input__input-wrapper">
    <input type="<?=$b['type']?>" <?=$b['id_tag']?>>
  </div>
</div>
