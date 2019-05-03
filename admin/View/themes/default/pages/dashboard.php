<?php $this->theme->header(); ?>

<?php
  $data['ctx'] = $this;
  $this->theme->block('components/navbar/navbar', $data);
?>

<?php $this->theme->footer(); ?>
