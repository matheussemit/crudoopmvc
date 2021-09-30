<?php
include('assets/includes/menu.php');
?>

<h1>Filmes</h1>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Original title</th>
                            <th>Overview</th>
                            <th>Tags</th>
                            <th>Genres</th>
                            <th><a href="?controller=FilmesController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($filmes) {
                            foreach ($filmes as $filme) {
                                ?>
                                <tr>
                                    <td><?php echo $filme->original_title; ?></td>
                                    <td><?php echo $filme->overview; ?></td>
                                    <td><?php echo $filme->tags; ?></td>
                                    <td><?php echo $filme->genres; ?></td>
                                    <td>
                                        <a href="?controller=FilmesController&method=editar&id=<?php echo $filme->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="?controller=FilmesController&method=excluir&id=<?php echo $filme->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">Nenhum registro encontrado</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>