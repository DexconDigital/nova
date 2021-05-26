<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id_inmobiliria = 12;
$con = Conect();
$qry = "select * from noticias where id_inmobiliaria2 = '$id_inmobiliria' order by id DESC ";
$result = $con->prepare( $qry );
$result->execute();
$datos = $result->fetchAll( PDO::FETCH_OBJ );

?>
<style>
    .container {
        background-color: white;
    }

    .color_cancelar {
        color: white;
        background-color: #002230;

    }

    .color_cancelar:hover {
        background-color: #B58D10;
        color: white;
    }

    .color_aceptar {
        background-color: #B58D10;
        color: white;
    }

    .color_aceptar:hover {
        background-color: #002230;
        color: white;
    }

</style>
<div class="container">
    <!-- Modal -->

    <div class="row justify-content-center">
        <div class="col-10" style=" margin-top: 27px;">
            <h2 class="text-center">Lista de noticias</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      foreach ($datos as $key => $res) {
                         echo '<tr>
                                    <td>' . $res->id . '</td>
                                    <td>' . $res->nombre . '</td>
                                    <td><a href="actualizarpublicacion.php?id=' . $res->id . '"><i style="color:red;" class="fas fa-edit"></i></a></td>
                                    <td><a href="#" data-href="eliminar.php?id=' . $res->id . '" data-toggle="modal" data-target="#confirm-delete"><i style="color:red!important;"class="fas fa-trash-alt"></i></a></td>
                               </tr>';
                      }
                      ?>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Estas seguro de que quieres eliminar esta noticia?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn color_cancelar rounded-0" data-dismiss="modal">Cancelar</button>
                        <a class="btn color_aceptar rounded-0 btn-ok">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#confirm-delete').on('show.bs.modal', function(e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });

        </script>
    </div>
</div>


<?php include 'layout/layoutFooter.php'; ?>
