$(function(){
    $("button").click(function(){
        if($(this).attr("data-option")=="search"){

        }else{
            //buscar dados do 'banco' e jogar numa tabble like this
            /*
                <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr> 
        </tbody>
      </table> 
            */
           $("#subContent").html("");
            content = {
                content:"<div class='col'></div>"
                        +""
            };
            $("#subContent").append(content['content']);
        }
    });
});