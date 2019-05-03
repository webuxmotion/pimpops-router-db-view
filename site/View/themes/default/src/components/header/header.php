<?php
  $item = $header;
  $b = [];
  $b['tag'] = isset($item['tag']) ? $item['tag']             : 'h3';
  $b['classes'] = isset($item['classes']) ? $item['classes'] : '';
  $b['text'] = isset($item['text']) ? $item['text']          : ':text';
?>

<<?=$b['tag']?> class="header <?=$b['classes']?>">
  <?=$b['text']?>
</<?=$b['tag']?>>
