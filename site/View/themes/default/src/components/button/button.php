<?php
  $item = $button;
  $b = [];
  $b['tag'] = isset($item['tag']) ? $item['tag']             : 'button';
  $b['classes'] = isset($item['classes']) ? $item['classes'] : '';
  $b['text'] = isset($item['text']) ? $item['text']          : ':text';
  $b['link'] = isset($item['link']) ? $item['link'] : '';
  $b['href'] = '';
  if (isset($item['tag'])) {
    if ($b['tag'] == 'a') {
      $b['href'] = 'href="' . $b['link'] . '"';
    }
  }
?>

<<?=$b['tag']?> <?=$b['href']?>class="button <?=$b['classes']?>">
  <?=$b['text']?>
</<?=$b['tag']?>>
