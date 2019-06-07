<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
        <!-- BOTÃO CADASTRAR USUARIO -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Adicionar Usuario
        </button>
        <!-- FIM BOTAO CADASTRAR USUARIO -->
    <br>
    <br>
    
        <!-- MODAL CADASTRAR USUARIO -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo site_url('CrudController/create')?>">
                        
                            <!-- CAMPO NOME -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong>Nome</strong></label>
                                <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="EX: Jose Edson">
                            </div>
                            <!-- FIM DO CAMPO NOME -->

                            <!-- CAMPO CRM -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong>CRM</strong></label>
                                <input type="text" class="form-control" name="CRM" aria-describedby="emailHelp" placeholder="EX: 1234">
                            </div>
                            <!-- FIM DO CAMPO CRM -->

                            <!-- CAMPO TELEFONE -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong>Telefone</strong></label>
                                <input type="phone" class="form-control" name="telefone" aria-describedby="emailHelp" placeholder="EX: 40028922">
                            </div>
                            <!-- FIM DO CAMPO TELEFONE -->

                            <!-- CAMPO ESTADO -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong>Estado</strong></label>
                                <select class="form-control" name="estado">
                                    <option value=""></option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">ES</option>
                                    <option value="AM">AM</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RO">RO</option>
                                    <option value="RA">RA</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                </select>
                            </div>
                            <!-- FIM DO CAMPO ESTADO -->

                            <!-- CAMPO CIDADE -->
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong>Cidade</strong></label>
                                <input type="text" class="form-control" name="cidade" aria-describedby="emailHelp" placeholder="Insira sua Cidade" value="">
                            </div>
                            <!-- FIM DO CAMPO CIDADE -->

                            <!-- CAMPO ESPECIALIDADES -->
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
                                    <input type="checkbox" name="especialidades" value="CIRURGIA DE CABEÇA/PESCOÇO" id="checkbox-1">
                                    <label for="checkbox-1">CIRURGIA DE CABEÇA/PESCOÇO</label>
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

                            <!-- BOTAO ADICIONAR -->
                            <button type="submit" class="btn btn-primary" value="save">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAL CADASTRAR USUARIO -->

        <!-- TABELA LISTA DE USUARIOS -->
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CRM</th>
                <th scope="col">Telefone</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Especialidades</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->nome; ?></td>
                <td><?php echo $row->CRM; ?></td>
                <td><?php echo $row->telefone; ?></td>
                <td><?php echo $row->estado; ?></td>
                <td><?php echo $row->cidade; ?></td>
                <td><?php echo $row->especialidades ?></td>

                <!-- BOTAO EDITAR DENTRO DA TABELA -->
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
                <!-- BOTAO EXCLUIR DENTRO DA TABELA -->
                <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <!-- FIM DA LISTA DE USUARIOS -->
    </div>

  </body>
</html>




