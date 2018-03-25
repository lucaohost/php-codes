<?php
    require('Util.Export.Json.class.php');
    require('Util.ExportXls.class.php');
    if($_POST['function'] == 'exportJsonContatos'){
        $exportJson = new ExportJson();
        $exportJson->exportJsonContatos();
    }
    if($_POST['function'] == 'exportXlsContatos'){
        $exportXls = new ExportXls();
        $exportXls->exportXlsContatos();
    }
?>