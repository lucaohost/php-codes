$(function () {
  $("button").click(function () {
    if ($(this).attr("data-option") == "search") {
      var pesquisa = $('#searchText').val().toLowerCase();
      $("#subContent").html("");
      var contacts;
      var content =
        "<table class='table table-striped'>"
        + "<thead>"
        + "<tr>"
        + "<th scope='col'>#</th>"
        + "<th scope='col'>Code</th>"
        + "<th scope='col'>Name</th>"
        + "<th scope='col'>Age</th>"
        + "</tr>"
        + "</thead>"
        + "<tbody>";
      $.ajax({
        url: "../Utils/ajax.services.php",
        type: "POST",
        data: { function: 'jsonContacts' },
        success: function (result) {
          var obj = JSON.parse(result);
          var i = 0;
          var list = 1;
          while (obj[i]) {
            if (obj[i]['nome'].toLowerCase() == pesquisa || obj[i]['codigo'] == pesquisa) {
              content += "<tr>"
                + "<th scope='col'>" + list + "</th>"
                + "<th scope='col'>" + obj[i]['codigo'] + "</th>"
                + "<th scope='col'>" + obj[i]['nome'] + "</th>"
                + "<th scope='col'>20</th>"
                + "</tr>";
              list++
            }
            i++;
          }
          content += "</tr>"
            + "</tbody>"
            + "</table>";
          $("#subContent").append(content);
        }
      });
    } else {
      $("#subContent").html("");
      var contacts;
      var content =
        "<table class='table table-striped'>"
        + "<thead>"
        + "<tr>"
        + "<th scope='col'>#</th>"
        + "<th scope='col'>Code</th>"
        + "<th scope='col'>Name</th>"
        + "<th scope='col'>Age</th>"
        + "</tr>"
        + "</thead>"
        + "<tbody>";
      $.ajax({
        url: "../Utils/ajax.services.php",
        type: "POST",
        data: { function: 'jsonContacts' },
        success: function (result) {
          var obj = JSON.parse(result);
          var i = 0;
          while (obj[i]) {
            content += "<tr>"
              + "<th scope='col'>" + (i + 1) + "</th>"
              + "<th scope='col'>" + obj[i]['codigo'] + "</th>"
              + "<th scope='col'>" + obj[i]['nome'] + "</th>"
              + "<th scope='col'>20</th>"
              + "</tr>";
            i++;
          }
          content += "</tr>"
            + "</tbody>"
            + "</table>";
          $("#subContent").append(content);
        }
      });
    }
  });
});