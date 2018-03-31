$(function() {

    $("#btnExportJson").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportJsonContatos'},
            success: function(result) {
                    var link = document.createElement("a");
                    link.download = "Contatos.json";
                    link.href = result;
                    link.click();
            }
        });
    });

    $("#btnExportXls").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportXlsContatos'},
            success: function(result) {
                var link = document.createElement("a");
                link.download = "Contatos.csv";
                link.href = result;
                link.click();
            }
        });
    });

});