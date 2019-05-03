<div class="desk-list">
  <?php
    $data['button'] = [
      'classes' => 'button_theme_desk-list',
      'tag' => 'a',
      'text' => 'Social Networks',
      'link' => '/desk/social-networks'
    ];

    $ctx->theme->block('src/components/button/button', $data);
  ?>
  <?php
    $data['button'] = [
      'classes' => 'button_theme_desk-list',
      'tag' => 'a',
      'text' => 'Notes',
      'link' => '/desk/notes'
    ];

    $ctx->theme->block('src/components/button/button', $data);
  ?>
  <?php
    $data['button'] = [
      'classes' => 'button_theme_desk-list',
      'tag' => 'a',
      'text' => 'Books',
      'link' => '/desk/books'
    ];

    $ctx->theme->block('src/components/button/button', $data);
  ?>
</div>
