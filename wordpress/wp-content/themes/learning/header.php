<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="<?= get_bloginfo('stylesheet_directory') ?>/asset/css/style.css">
     <title><?= get_bloginfo('name'); ?></title>
     <?= wp_head(); ?>
</head>
<body>

<div class="header">
     <div class="logo">
          <h3><span>Website</span> Name</h3>
     </div>

<nav>
     <a href="#"> HOME </a>
     <a href="#"> ABOUT </a>
     <a href="#"> PORTFOLIO </a>
     <a href="#"> GET STARTED</a>
</nav>
</div>

<div id="container">
     <div id="caption">
          <h1>Lorem Ipsum dolor</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore sint ipsam quo eum quam nisi iste, libero dolorum provident explicabo et laborum praesentium? Aperiam quae autem quibusdam eligendi libero tenetur?</p>
          <button>Read More</button>
     </div>
     <div id="imgbanner">
          <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/knowledge.svg" alt="Book Reading">
     </div>
</div>

