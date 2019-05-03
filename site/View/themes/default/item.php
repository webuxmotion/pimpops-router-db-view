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
    'text' => $item
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
        'title' => 'Facebook'
      ];

      $this->theme->block('src/components/item/item', $data);
    ?>
  </div>
</div>

      <?php
        $data['input'] = [
          'type' => 'text',
          'classes' => 'input_theme_default input_type_min-width-250',
          'label' => 'Title',
          'id' => 'desk_name'
        ];

        $this->theme->block('src/components/input/input', $data);
      ?>

<?php $this->theme->footer(); ?>
