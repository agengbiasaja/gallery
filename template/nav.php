
<nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top shadow">
  <div class="container container-fluid">
    <a class="navbar-brand" href="<?php echo $url ?>app/index.php">Album</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($title_web == 'home'){echo 'active';} ?>" aria-current="page" href="<?php echo $url ?>app/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title_web == 'album'){echo 'active';} ?>" aria-current="page" href="<?php echo $url ?>app/tambah-album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title_web == 'foto'){echo 'active';} ?>" aria-current="page" href="<?php echo $url ?>app/tambah-foto.php">Foto</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="nav-link" href="<?php echo $url ?>app/logout.php">Logout</a>
      </span>
    </div>
  </div>
</nav>