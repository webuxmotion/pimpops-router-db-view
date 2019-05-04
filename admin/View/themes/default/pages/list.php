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
        <th><abbr title="Content">Content</abbr></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
        </td>
        <td>38</td>
      </tr>
    </tbody>
  </table>
</div>

<?php $this->theme->footer(); ?>
