<?php $this->tituloPagina = "Editar Desenvolvedor"; ?>

<?php $this->layout('layout.topo'); ?>
    <div class="container">
      <h2>Editar Desenvolvedor</h2>
      <br>
      <form action="/desenvolvedor/<?php echo $this->modelo->id ?>" method="post">
        <input type="hidden" name="_METHOD" value="put">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" class="form-control" value="<?php echo $this->modelo->nome ?>">
        </div>
        <div class="form-group">
          <label for="sexo">sexo:</label>
          <input type="text" name="sexo" class="form-control" value="<?php echo $this->modelo->sexo ?>">
        </div>
        <div class="form-group">
          <label for="idade">idade:</label>
          <input type="text" name="idade" class="form-control" value="<?php echo $this->modelo->idade ?>">
        </div>
        <div class="form-group">
          <label for="hobby">hobby:</label>
          <input type="text" name="hobby" class="form-control" value="<?php echo $this->modelo->hobby ?>">
        </div>
        <div class="form-group">
          <label for="email">Data Nascimento:</label>
          <input type="date"  name="datanascimento" class="form-control" value="<?php echo $this->modelo->datanascimento ?>">
        </div>
        
        <button class="btn btn-primary">Atualizar</button>
      </form>

    </div>
<?php $this->layout('layout.rodape'); ?>
