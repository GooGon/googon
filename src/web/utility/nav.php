<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GooGon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='<?php echo constant("URL"); ?>src/web/blog.php'>Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='<?php echo constant("URL"); ?>src/web/portofolio.php'>Portofolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='<?php echo constant("URL"); ?>src/web/curiculum_vitae.php'>Curiculum Vitae</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='<?php echo constant("URL"); ?>src/web/contact_me.php'>Contact Me</a>
        </li>
      </ul>
      <form class="d-flex" action='<?php echo constant("URL"); ?>src/sign_in.php'>
        <button class="btn btn-outline-success" type="submit">Sign In</button>
      </form>
    </div>
  </div>
</nav>