<?php
    require_once('Util.Export.Json.class.php');
    require_once('Util.ExportXls.class.php');
    require_once('Util.Exporter.class.php');
    require_once("../Model/Pessoas.class.php");

    if($_POST['function'] == 'exportJsonContatos'){
        $exportJson = new ExportJson();
        $exportJson->exportContatos();
    }
    if($_POST['function'] == 'exportXlsContatos'){
        $exportXls = new ExportXls();
        $exportXls->exportContatos();
    }
    if($_POST['function'] == 'deleteFile'){
        $exportXls = new Export();
        $exportXls->deleteFile($_POST['dir']);
    }
    if($_POST['function'] == 'jsonContacts'){
        $exportXls = new Export();
    }   