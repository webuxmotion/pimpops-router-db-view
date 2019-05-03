<?php
  $data['button'] = [
    'classes' => 'button_theme_switcher g-flex is-active',
    'tag' => 'a',
    'text' => 'md',
    'link' => '/'
  ];

  $ctx->theme->block('src/components/button/button', $data);

  $data['button'] = [
    'classes' => 'button_theme_switcher g-flex',
    'tag' => 'a',
    'text' => 'mfd',
    'link' => '/mfd'
  ];

  $ctx->theme->block('src/components/button/button', $data);

?>
