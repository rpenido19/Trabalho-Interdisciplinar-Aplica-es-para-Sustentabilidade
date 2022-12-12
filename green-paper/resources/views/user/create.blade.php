<div class="modal fade" id="createUser" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Cadastrar Usuário</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" id="create-user">
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="cell" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="cell" id="cell" placeholder="Telefone">
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="password" class="form-label">Senha <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="flag_admin" class="form-label">Tipo de Usuário <span
                                class="text-danger">*</span></label>
                        <select class="form-control" name="flag_admin" id="flag_admin">
                            <option value="1">Administrador</option>
                            <option value="0" selected>Cliente</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="birthday" class="form-label">Aniversário</label>
                        <input type="date" class="form-control" name="birthday" id="birthday"
                            placeholder="Aniversário">
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-3">
                        <label for="gender" class="form-label">Gênero</label>
                        <input type="text" class="form-control" name="gender" id="gender" placeholder="Gênero">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                        class="fas fa-times me-1"></i>Fechar</button>
                <button type="button" class="btn btn-success"><i class="fas fa-save me-1"></i>Salvar</button>
            </div>
        </div>
    </div>
</div>
