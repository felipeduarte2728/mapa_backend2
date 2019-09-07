<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ACE Books</title>
    <?php
      if($_SERVER[REQUEST_URI] == '/') {
        echo '<link rel="stylesheet" href="view/assets/style.css" />';
        echo '<link rel="stylesheet" href="view/assets/reset.css">';
      } else {
        echo '<link rel="stylesheet" href="assets/style.css" />';
        echo '<link rel="stylesheet" href="assets/reset.css">';
      }
    ?>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="logo">
          ACE Books
        </div>
        <nav class="menu">
          <a href="#" class="menu-link">Home</a>
          <a href="#" class="menu-link">Autores</a>
          <a href="#" class="menu-link">Editoras</a>
          <a href="#" class="menu-link">Pesquisa</a>
        </nav>
      </header>
    

