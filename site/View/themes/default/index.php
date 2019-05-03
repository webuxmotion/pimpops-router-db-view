<?php $this->theme->header(); ?>
<?php
  foreach ($list as $item) {
    $link = ' <a href="/send_message/' . $item->number . '">Send message</a>';
    echo $item->name . ' : ' . $item->number . $link . '<br>';
  }
?>
<?php $this->theme->footer(); ?>
