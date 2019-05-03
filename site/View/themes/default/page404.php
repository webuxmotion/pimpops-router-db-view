<?php $this->theme->header(); ?>

<?php
  $data = [];
  $data['ctx'] = $this;
  $this->theme->block('src/components/sidebar/sidebar', $data);
?>

<?php $this->theme->block('src/components/block404/block404'); ?>

<?php $this->theme->footer(); ?>
