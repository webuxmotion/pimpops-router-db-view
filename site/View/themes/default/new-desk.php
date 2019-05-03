<?php $this->theme->header(); ?>

<?php
  $data = [];
  $data['ctx'] = $this;
  $this->theme->block('src/components/sidebar/sidebar', $data);
?>

<?php
  $data['header'] = [
    'classes' => 'header_type_h1 header_type_main',
    'tag' => 'h1',
    'text' => 'Add new desk'
  ];

  $this->theme->block('src/components/header/header', $data);
?>

<div class="form-card g-mt-10">
  <div class="form-card__body">
    <div class="form-card__row">   
      <?php
        $data['input'] = [
          'type' => 'text',
          'classes' => 'input_theme_default input_type_min-width-250',
          'label' => 'Desk Title',
          'id' => 'desk_name'
        ];

        $this->theme->block('src/components/input/input', $data);
      ?>
    </div>

    <div class="form-card__buttons-group g-mt-10">
      <div class="form-card__button">
        <?php
          $data['button'] = [
            'classes' => 'button_theme_secondary button_type_min-width-150',
            'tag' => 'button',
            'text' => 'Cancel'
          ];

          $this->theme->block('src/components/button/button', $data);
        ?>
      </div>
      <div class="form-card__button">
        <?php
          $data['button'] = [
            'classes' => 'button_theme_primary button_type_min-width-150',
            'tag' => 'button',
            'text' => 'Save'
          ];

          $this->theme->block('src/components/button/button', $data);
        ?>
      </div>
    </div>
    
  </div>
</div>

<?php $this->theme->footer(); ?>
