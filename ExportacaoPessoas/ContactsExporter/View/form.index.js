$(function() {
    $("#exportJson").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportJsonContatos'},
            success: function(result) {
                $('#content').html(result);
            }
        });
    });
    $("#exportXls").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            type: "POST",
            data: {function:'exportXlsContatos'},
            success: function(result) {
                $('#content2').html(result);
            }
        });
    });
});