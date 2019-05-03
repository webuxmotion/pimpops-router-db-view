<?php $this->theme->header(); ?>

<form method="POST">
  <div class="card">
    <div class="card-content">

      <p class="title">Login to Admin Panel</p>

      <div class="field">
        <label class="label">Username</label>
        <div class="control">
          <input class="input" type="text" placeholder="username">
        </div>
      </div>   

      <div class="field">
        <label class="label">Password</label>
        <div class="control">
          <input class="input" type="text" placeholder="****">
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
