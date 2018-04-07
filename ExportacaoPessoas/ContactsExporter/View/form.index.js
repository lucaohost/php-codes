$(function() {

    linkToUnset = 0;
    
    function unsetLink(){
        setTimeout(
            function() 
            {
                $.ajax({
                    url: "../Utils/ajax.services.php", 
                    type: "POST",
                    data: {function:'deleteFile', dir : linkToUnset},
                });    
            }, 100);
    }

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
                    linkToUnset = result;
            }
        });
        unsetLink();
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
                linkToUnset = result;
            }
        });
        unsetLink();
    });
    
    $("#home").click(function() {
        $('#content').html("");
    });

    $(".dropdown-item").click(function() {
        $.ajax({
            url: $(this).attr("data-url"), 
            type: "POST",
            data: {function:'exportXlsContatos'},
            success: function(result) {
                $('#content').html(result);
            }
        });
    });


});