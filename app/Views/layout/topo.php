<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title><?php echo isset($this->tituloPagina) ? \Config\SiteInfo::$nome." | ".$this->tituloPagina : \Config\SiteInfo::$nome; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body class="bg-secondary">
    <?php $this->layout('layout.nav'); ?>
    <div class="container">
