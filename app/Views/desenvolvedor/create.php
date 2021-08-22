<?php $this->tituloPagina = "Adicionar Desenvolvedor"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Adicionar</h2>

    <form action="/desenvolvedor" method="post">
    <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="nome" class="form-control" id="#" required
                  data-validation-required-message="Digite seu nome" placeholder="Digite seu Nome">
                </div>
                
             
                <div class="form-group">
                    <label>Sexo</label>
                    <input type="text" name="sexo" class="form-control" id="#" required
                    data-validation-required-message="Digite seu Sexo" placeholder="Digite seu Sexo">
                  </div>

                  <div class="form-group">
                    <label>Idade</label>
                    <input type="text" name="idade" class="form-control" id="#" required
                    data-validation-required-message="Digite sua idade"
                    data-mask="99" placeholder="Digite sua idade">
                  </div>

                  <div class="form-group">
                    <label>Hobby</label>
                    <input type="text" name="hobby" class="form-control" id="#" required
                    data-validation-required-message="Digite seu hobby" placeholder="Digite seu Hobby">
                  </div>

                  <div class="form-group">
                    <label for="datanascimento">Data de Nascimento:</label>
                    <div class="controls">
                        <input type="date" name="datanascimento" 
                        required
                        data-validation-required-message="Digite sua data de nascimento"
                        data-mask="99/99/9999"
                        class="form-control">
                    </div>
                </div>
      
      <button class="btn btn-success">Adicionar</button>
    </form>


<?php $this->layout('layout.rodape'); ?>
