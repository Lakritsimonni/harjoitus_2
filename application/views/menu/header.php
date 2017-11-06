<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Codeigniter esimerkki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
<ul>
  <li><a href="<?php echo site_url('');?>">Etusivu</a></li>
  <li><a href="<?php echo site_url('test/kolmas');?>">Test/kolmas</a></li>
  <li><a href="<?php echo site_url('test/neljas');?>">Test/neljas</a></li>
  <li><a href="<?php echo site_url('oppilas/nayta_oppilaat');?>">Opiskelijat</a></li>
  <li><a href="<?php echo site_url('login/avaa_lomake');?>">Kirjaudu</a></li>
  <?php
  if($_SESSION['kirjautunut']==true)
  echo '<li><a href="'.site_url('login/kirjaudu_ulos').'">Kirjaudu ulos</a></li>';

  ?>
</ul>
<div class="container">
