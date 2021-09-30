<?php
include('assets/includes/menu.php');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="?controller=FilmesController&<?php echo isset($filme->id) ? "method=atualizar&id={$filme->id}" : "method=salvar"; ?>" method="post" >
                <div class="card" style="top:40px">
                    <div class="card-header">
                        <span class="card-title">Contatos</span>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-2 col-form-label text-right">Original Title:</label>
                        <input type="text" class="form-control col-sm-8" name="original_title" id="original_title" value="<?php
                        echo isset($filme->original_title) ? $filme->original_title : null;
                        ?>" />
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-2 col-form-label text-right">Overview:</label>
                        <input type="text" class="form-control col-sm-8" name="overview" id="overview" value="<?php
                        echo isset($filme->overview) ? $filme->overview : null;
                        ?>" />
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-2 col-form-label text-right">Rating:</label>
                        <input type="text" class="form-control col-sm-8" name="rating" id="rating" value="<?php
                        echo isset($filme->rating) ? $filme->rating : null;
                        ?>" />
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" id="id" value="<?php echo isset($filme->id) ? $filme->id : null; ?>" />
                        <button class="btn btn-success" type="submit">Salvar</button>
                        <button class="btn btn-secondary">Limpar</button>
                        <a class="btn btn-danger" href="?controller=FilmesController&method=listar">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>