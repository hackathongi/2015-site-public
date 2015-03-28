<div class="cover">
  <div class="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url() ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png" alt="Logo"/></a>
      </div>
    </div>
  </div>
  <div class="cover-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/home-big-picture.jpg);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-6 col-md-6 text-center">
        <h1 class="text-inverse">Best hires comming from your referals</h1>
        <br>
        <a class="btn btn-social btn-facebook">
          <i class="fa fa-twitter"></i> Sign in with Facebook
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section how-it-works">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-primary">Heading</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
             class="center-block img-circle img-responsive">
        <h2 class="text-center">Heading</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
          <br>Ut enim ad minim veniam, quis nostrud</p>
      </div>
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
             class="center-block img-circle img-responsive">
        <h2 class="text-center">Heading</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
          <br>Ut enim ad minim veniam, quis nostrud</p>
      </div>
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
             class="center-block img-circle img-responsive">
        <h2 class="text-center">Heading</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
          <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
          <br>Ut enim ad minim veniam, quis nostrud</p>
      </div>
    </div>
  </div>
</div>
<div class="section testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-primary">Team</h1>
        <p class="text-center">We are a group of skilled individuals.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
             class="center-block img-circle img-responsive">
        <h3 class="text-center">John Doe</h3>
        <p class="text-center">Delevoper</p>
      </div>
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
             class="center-block img-circle img-responsive">
        <h3 class="text-center">John Doe</h3>
        <p class="text-center">Delevoper</p>
      </div>
      <div class="col-md-4">
        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
             class="center-block img-circle img-responsive">
        <h3 class="text-center">John Doe</h3>
        <p class="text-center">Delevoper</p>
      </div>
    </div>
  </div>
</div>
<div class="section bottom-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Great content awaits. Get started.</p>
        <a class="btn btn-social btn-facebook">
          <i class="fa fa-twitter"></i> Sign in with Facebook
        </a>
      </div>
    </div>
  </div>
</div>

<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<?php endwhile; ?>