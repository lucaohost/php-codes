$(function() {
    $("#export").click(function() {
        $.ajax({
            url: "../Utils/ajax.services.php", 
            success: function(result) {
                $['$POST'] = 'exportJsonContatos';
            }
        });
    });
});

// });
// $(function(){
//     $('#export').click(function (){
//         alert("asdas");        
//         $.ajax({url: "localhost/desenvolvimento-internet-mmxviii/ExportacaoPessoas/JsonExporter/Utils/Util.Export.Json.class.php", success: function(result){
//             // $("#div1").html(result);
//         }});
//         $("#content").html("asdas");
//     });
// }
// );