$(function() {
    $("#btnExportJson").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportJsonContatos'},
            success: function(result) {
                    var link = document.createElement("a");
                    link.download = "jsonContatos.txt";
                    link.href = "../Data/jsonContatos.txt";
                    link.click();
            }
        });
    });
    $("#exportXls").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportXlsContatos'},
            success: function(result) {
                var link = document.createElement("a");
                link.download = "XlsContatos.csv";
                link.href = "../Data/XlsContatos.csv";
                link.click();
            }
        });
    });
});