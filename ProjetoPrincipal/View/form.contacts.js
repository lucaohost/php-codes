$(function () {
  $("button").click(function () {
    if ($(this).attr("data-option") == "search") {
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
          content += "<tr>"
            + "<th scope='col'>1</th>"
            + "<th scope='col'>0</th>"
            + "<th scope='col'>Lucas</th>"
            + "<th scope='col'>19 </th>"
            + "</tr>"
            + "<tr>"
            + "<th scope='col'>1</th>"
            + "<th scope='col'>0</th>"
            + "<th scope='col'>Jonas</th>"
            + "<th scope='col'>19 </th>"
            + "</tr>"
            + "<tr>"
            + "<th scope='col'>1</th>"
            + "<th scope='col'>0</th>"
            + "<th scope='col'>Douglas</th>"
            + "<th scope='col'>19 </th>"
            + "</tr>"
          console.log(result['3']);
          content += "</tr>"
            + "</tbody>"
            + "</table>";
          $("#subContent").append(content);
        }
      });
    }
  });
});