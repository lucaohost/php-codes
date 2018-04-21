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
          contacts = result;
          console.log(contacts);
        }
      });
      console.log(contacts);
      content += "</tr>"
        + "</tbody>"
        + "</table>";
      $("#subContent").append(content['content']);
    }
  });
});