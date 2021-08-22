<?php $this->tituloPagina = "Listagem de Desenvolvedores"; ?>

<?php $this->layout('layout.topo'); ?>

  <div class="row container">
    <h2>Lista de Desenvolvedores</h2>
  </div>
  <div class="row container">
    <a class="btn btn-dark" href="/desenvolvedor/adicionar">Criar</a>
  </div>
  <br>
  <div class="row container border-dark">
    
      <?php foreach ($this->modelo as $key => $value): ?>
      
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6"><?php echo  $value['nome']?></h1>
            <p class="lead">Sexo: <?php echo  $value['sexo']?> - <?php echo  $value['datanascimento']?></p>
            <hr class="my-4">
            <p> idade: <?php echo  $value['idade']?></p>
          </div>
          <div class="container">
            <form action="/desenvolvedor/deletar/<?php echo $value['id']?>" method="post">
              <input type="hidden" name="_METHOD" value="delete">
              <a href="/desenvolvedor/detalhe/<?php echo  $value['id']?>"><button class="btn btn-success" type="button">Detalhe</button></a>
              <a href="/desenvolvedor/editar/<?php echo  $value['id']?>"><button class="btn btn-warning" type="button">Editar</button></a>
              <button class="btn btn-danger">Deletar</button>
            </form>
          </div>
        </div>
        
      <?php endforeach ?>

      
      
    
  </div>


<?php $this->layout('layout.rodape'); ?>
