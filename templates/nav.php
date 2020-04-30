<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse container" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?php if($title === 'Home'): ?> active <?php endif; ?>" href="index.php">Home</a> </li>
      <a class="nav-item nav-link <?php if($title === 'About'): ?>active<?php endif; ?>" href="about.php">About </a> </li>
      <a class="nav-item nav-link <?php if($title === 'Coffee'): ?>active<?php endif; ?>" href="coffee.php">  Coffee</a> </li>
      <a class="nav-item nav-link <?php if($title === 'Varieties'): ?>active<?php endif; ?>" href="varieties.php">Varieties</a> </li>
      <a class="nav-item nav-link <?php if($title === 'Contact'): ?>active<?php endif; ?>" href="contact.php">Contact</a> </li>
    </div>
  </div>
</nav>
