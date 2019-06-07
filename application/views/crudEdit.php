<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <!-- FORM EDITAR CADASTRO -->
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
        <h1>Editar Usuario</h1>
            <!-- CAMPO ID -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>ID</strong></label>
                <input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" aria-describedby="emailHelp" disabled="disabled">
            </div>
            <!-- FIM DO CAMPO ID -->

            <!-- CAMPO NOME -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Nome</strong></label>
                <input type="text" class="form-control" name="nome" value="<?php echo $row->nome; ?>" aria-describedby="emailHelp" >
            </div>
            <!-- FIM DO CAMPO NOME -->

            <!-- CAMPO CRM -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>CRM</strong></label>
                <input type="text" class="form-control" name="CRM" value="<?php echo $row->CRM; ?>" aria-describedby="emailHelp">
            </div>
            <!-- FIM DO CAMPO CRM -->

            <!-- CAMPO TELEFONE -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Telefone</strong></label>
                <input type="phone" class="form-control" name="telefone" value="<?php echo $row->telefone; ?>" aria-describedby="emailHelp">
            </div>
            <!-- FIM DO CAMPO TELEFONE -->

            <!-- CAMPO ESTADO -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Estado</strong></label>
                <input type="text" class="form-control" name="estado" value="<?php echo $row->estado; ?>" aria-describedby="emailHelp">
            </div>
            <!-- FIM DO CAMPO ESTADO -->

            <!-- CAMPO CIDADE -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Cidade</strong></label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $row->cidade; ?>" aria-describedby="emailHelp">
            </div>
            <!-- campo Especialidades  -->
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Especialidades</strong></label>

                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="ALERGOLOGIA" id="checkbox-1">
                        <label for="checkbox-1">ALERGOLOGIA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="ANGIOLOGIA" id="checkbox-1">
                        <label for="checkbox-1">ANGIOLOGIA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="BUCO MAXILO" id="checkbox-1">
                        <label for="checkbox-1">BUCO MAXILO</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CARDIOLOGIA CLINICA" id="checkbox-1">
                        <label for="checkbox-1">CARDIOLOGIA CLINICA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CARDIOLOGIA INFANTIL" id="checkbox-1">
                        <label for="checkbox-1">CARDIOLOGIA INFANTIL</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA CABEÇA E PESCOÇO" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA CABEÇA E PESCOÇO</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA CARDÍACA" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA CARDÍACA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA DE TORAX" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA DE TORAX</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA GERAL" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA GERAL</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA PEDIÁTRICA" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA PEDIÁTRICA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA PLÁSTICA" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA PLÁSTICA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA TORÁCICA" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA TORÁCICA</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CIRURGIA VASCULAR" id="checkbox-1">
                        <label for="checkbox-1">CIRURGIA VASCULAR</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="especialidades" value="CLINICA MEDICA" id="checkbox-1">
                        <label for="checkbox-1">CLINICA MEDICA</label>
                    </div>
            </div>
            <!-- FIM DO CAMPO ESPECIALIDADES -->

            <!-- BOTAO ALTERAR -->
            <button type="submit" class="btn btn-primary" value="save">Alterar</button>

            <!-- BOTAO CANCELAR -->
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
        <!-- FIM DO FORM EDITAR CADASTRO -->
    </div>


  </body>
</html>