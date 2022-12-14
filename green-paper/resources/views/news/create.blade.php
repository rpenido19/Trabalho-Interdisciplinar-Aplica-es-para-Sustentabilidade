<div class="modal fade" id="createNew" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Cadastrar Notícia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" id="create-new" enctype="multipart/form-data">
                    <x-alert/>
                    <div class="col-lg-12 col-xl-12 mb-3">
                        <label for="name" class="form-label">Título <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="titulo" id="edit-news-titulo" placeholder="Título">
                    </div>
                    <div class="col-lg-12 col-xl-6 mb-3">
                        <label for="autor" class="form-label">Autor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="autor" id="edit-news-autor" placeholder="Autor">
                    </div>
                    <div class="col-lg-12 col-xl-6 mb-3">
                        <label for="tags" class="form-label">Tags <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="tags" id="edit-news-tags" placeholder="Tags">
                    </div>
                    <div class="col-lg-12 col-xl-6 mb-3">
                        <label for="url" class="form-label">URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="url" id="edit-news-url" placeholder="URL">
                    </div>
                    <div class="col-lg-12 col-xl-6 mb-3">
                        <label for="published_at" class="form-label">Data de Publicação <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="published_at" id="edit-news-published_at" placeholder="Data de Publicação">
                    </div>
                    <div class="col-lg-12 col-xl-12 mb-3">
                        <label for="noticia" class="form-label">Conteúdo da notícia <span class="text-danger">*</span></label>
                        <textarea name="noticia" id="edit-news-noticia" class="form-control" cols="1" rows="10"></textarea>
                    </div>
                    <div class="col-lg-12 col-xl-12 mb-3">
                        <label for="noticia" class="form-label">Envio de foto <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" id="edit-news-formFile">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                        class="fas fa-times me-1"></i>Fechar</button>
                <button type="button" class="btn btn-success" onclick="storeNews()"><i class="fas fa-save me-1"></i>Salvar</button>
            </div>
        </div>
    </div>
</div>
