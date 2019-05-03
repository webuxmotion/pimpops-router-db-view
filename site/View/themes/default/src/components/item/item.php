<?php
  $item = $item;
  $b = [];
  $b['classes'] = isset($item['classes']) ? $item['classes'] : '';
  
  $b['external'] = isset($item['external']) ? $item['external'] : null;
  $b['external_tag'] = isset($b['external']) 
    ?  '<a href="' . $b['external'] . '" class="item__external" target="_blank"></a>' 
    : null;
  $b['style_string'] = null;
  $b['bg'] = isset($item['bg']) ? $item['bg'] : null;
  if (isset($b['bg'])) {
    $b['style_string'] .= 'background-color:' . $b['bg'] . ';';
  } 
  $b['style'] = isset($b['style_string']) ? 'style="' . $b['style_string'] . '"' : null; 
  $b['open_link'] = isset($item['openLink']) ? $item['openLink'] : null; 
  $b['open_link_tag'] = isset($b['open_link']) 
    ? '<a href="' . $b['open_link'] . '" class="item__openButton">Open</a>'
    : null;
  $b['title'] = isset($item['title']) ? $item['title'] : 'Default title'; 
?>

<div class="item" <?=$b['style']?>>
  <p class="item__title"><?=$b['title']?></p>
  <?=$b['open_link_tag']?> 
  <?=$b['external_tag']?> 
</div>
