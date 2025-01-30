        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 ">
                <div>
                    <h1 class="text-center mb-5">Alteração de Produto</h1>
                    <div class="d-flex justify-content-center">
                        <a href="<?= base_url('administracao'); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Voltar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 mb-5">
                <div class="w-50 border m-5 p-5 mw-10 rounded">
                    <?= form_open_multipart('produto/alterarProduto'); ?>
                    <div class="mb-3">
                      <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                      <label for="inputProduto" class="form-label">Produto</label>
                      <input type="text" class="form-control" name="produto" value="<?= $produto['produto'] ?>" id="inputProduto">
                    </div>
                    <div class="mb-3">
                        <label for="inputDesc" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="descricao" value="<?= $produto['descricao'] ?>" id="inputDesc">
                    </div>
                    <div class="mb-3">
                      <label for="inputPreco" class="form-label">Preço</label>
                      <input type="text" class="form-control" name="preco" value="<?= $produto['preco'] ?>" id="inputPreco">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagem do Produto</label>
                        <input class="form-control" type="file" name="userfile" value="<?= $produto['preco'] ?>" id="formFile">
                        <img class="img-fluid mt-3 rounded" src="<?= base_url("/assets/uploads/" . $produto['imagem']) ?>" alt="">
                    </div>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                    <?= form_close(); ?>
                </div>
            </div>
       </div>
