<?php $this->tituloPagina = "Lista dos Desenvolvedores"; ?>


<?php $this->layout('layout.topo'); ?>
    <div class="container">
        <h2>Detalhes do Desenvolvedor:</h2>
        <br>
        <div class="card border-dark" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->modelo->nome; ?></h5>
                <p class="card-text">Sexo: <?php echo $this->modelo->sexo; ?></p>
                <p class="card-text">Idade: <?php echo $this->modelo->idade; ?></p>
                <p class="card-text">hobby: <?php echo $this->modelo->hobby; ?></p>
                <p class="card-text">Data de Nascimento: <?php echo $this->modelo->datanascimento; ?></p>
                <a href="/desenvolvedor" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

<?php $this->layout('layout.rodape'); ?>
