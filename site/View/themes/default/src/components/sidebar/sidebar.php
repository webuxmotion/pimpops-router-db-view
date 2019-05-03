<div class="sidebar">
  <div class="sidebar__header g-flex">
    <?php
      $ctx->theme->block('src/components/switcher/switcher', $data); 
    ?>
  </div>
  <div class="sidebar__desk-list">
    <?php
      $ctx->theme->block('src/components/desk-list/desk-list', $data); 
    ?>
  </div>
  <div class="sidebar__add-new-button">
    <?php
      $data['button'] = [
        'classes' => 'button_theme_add-new',
        'tag' => 'a',
        'text' => '+ Add new',
        'link' => '/new-desk'
      ];

      $ctx->theme->block('src/components/button/button', $data);
    ?>  
  </div>
</div>

