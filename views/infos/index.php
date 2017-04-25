<?php
/**
 * File : humhub / index.php
 * User : Matthieu SCHMIT
 * Date : 27/04/17
 * Time : 15:00
 */


?>

<div class="container">

    <div class="text-center">
        <div class="btn-group">
            <button data-toggle="modal" data-target="#modal_newinfo" class="btn btn-primary"><i class="fa fa-plus"></i> Information</button>
            <button data-toggle="modal" data-target="#modal_newUpdate" class="btn btn-primary"><i class="fa fa-plus"></i> Mise à jour</button>
            <button data-toggle="modal" data-target="#modal_updateInfos" class="btn btn-primary"><i class="fa fa-pencil"></i> Informations importantes</button>
        </div>
        <hr>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center">Informations</h3>
        </div>
        <div class="col-sm-6">
            <h3 class="text-center">Mises à jour</h3>
        </div>
    </div>



    <!-- Modals -->
    <div id="modal_newinfo" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nouvelle information</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_newUpdate" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nouvelle mise à jour</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_updateInfos" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modifier informations importantes</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>