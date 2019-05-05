<?php $this->theme->header(); ?>

<?php
  $data['ctx'] = $this;
  $this->theme->block('components/navbar/navbar', $data);
?>

<section class="hero is-info">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h1 class="title">
            Pages
          </h1>
        </div>
        <div class="column has-text-right">
          <h2 class="subtitle has-margin-top-10">
            You can <a href="/admin/page/create/" class="button is-small">Create new page</a>
          </h2>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container has-padding-top-50">
  <table class="table">
    <thead>

      <tr>
        <th><abbr title="Id">Id</abbr></th>
        <th><abbr title="Title">Title</abbr></th>
        <th><abbr title="Content">Date</abbr></th>
      </tr>

    </thead>
    <tbody>
    <?php foreach ($pages as $key => $page) : ?>
      <tr>
        <th><?=++$key?></th>
        <td><a href="<?=$page->id?>" title="<?=$page->title?>"><?=$page->title?></a></td>
        <td><?=$page->date?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php $this->theme->footer(); ?>
