<?php $this->theme->header(); ?>

<?php
  $data = [];
  $data['ctx'] = $this;
  $this->theme->block('src/components/sidebar/sidebar', $data);
?>

<?php $this->theme->footer(); ?>
