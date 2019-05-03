<?php $this->theme->header(); ?>

<?php
  $data = [];
  $data['ctx'] = $this;
  $this->theme->block('src/components/sidebar/sidebar', $data);
?>

<?php
  $data['header'] = [
    'classes' => 'header_type_h1 header_type_desk',
    'tag' => 'h1',
    'text' => $desk
  ];

  $this->theme->block('src/components/header/header', $data);
?>

<div class="items-list">
  <div class="items-list__item">
    <?php
      $data['item'] = [
        'classes' => '',
        'external' => 'https://www.facebook.com/webuxmotion',
        'bg' => '#61779c',
        'openLink' => '/item/2',
        'title' => 'Facebook'
      ];

      $this->theme->block('src/components/item/item', $data);
    ?>
  </div>
  <div class="items-list__item">
    <?php
      $data['item'] = [
        'classes' => '',
        'external' => 'https://www.instagram.com/webuxmotion/',
        'bg' => '#6c76a2',
        'openLink' => '/item/2',
        'title' => 'Instagram'
      ];

      $this->theme->block('src/components/item/item', $data);
    ?>
  </div>
</div>

<?php $this->theme->footer(); ?>
