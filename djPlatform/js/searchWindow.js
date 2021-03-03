$(function () {
  $("#searchBtn").bind("click", function () {
    var abc, def;
    area = $("#searchArea").val();
    genre = $("#searchGenre").val();
    reArea = new RegExp(area);
    reGenre = new RegExp(genre);
    var getArea = document.getElementById("resultArea");
    var getGenre = document.getElementById("resultGenre");

    $("#dataBox").each(function () {
      var txt = $(this).find("li").text();
      if (txt.match(reArea) != null) {
        if (txt.match(reGenre) != null) {
          $(this).show();
        } else {
          $(this).hide();
        }
      } else {
        $(this).hide();
      }
    });
  });

  $("#delateButton").bind("click", function () {
    $("#dataBox").show();
  });
});
