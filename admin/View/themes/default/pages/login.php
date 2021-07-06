<?php $this->theme->header(); ?>

<form method="POST" action="/admin/auth/">
  <div class="card">
    <div class="card-content">

      <p class="title">Login to Admin Panel</p>

      <div class="field">
        <label class="label">Email</label>
        <div class="control">
          <input class="input" name="email" type="email" placeholder="Email">
        </div>
      </div>   

      <div class="field">
        <label class="label">Password</label>
        <div class="control">
          <input class="input" name="password" type="text" placeholder="****">
        </div>
      </div> 

    </div>
    <footer class="card-footer">
      <p class="card-footer-item">
        <button class="button is-link">Login</button>
      </p>
      <p class="card-footer-item">
      </p>
    </footer>
  </div>
</form>

<?php $this->theme->footer(); ?>
