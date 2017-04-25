<?php
/**
 * File : humhub / infos.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 22:11
 */


?>


<div class="panel panel-default" id="info-panel">
    <div class="panel-heading">
        <strong id="infoTitle"><?= $title ?></strong>
    </div>
    <div class="panel-body">
        <?= $message ?>
    </div>
</div>

<style>
    #infoTitle {
        font-size: 1.1em;
    }
</style>
