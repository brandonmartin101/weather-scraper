//adjust background to the size of the screen
//var windowHeight = $(window).height();
//$(".container-fluid").css("height",windowHeight);

$("#findTheWeather").click(function(event) {

  event.preventDefault();
  //$("#weatherOutput").hide();
  console.log($("#city").val());

  if ($("#city").val() != "") {

    console.log($("#city"));
    $.get("scraper.php?city="+$("#city").val(), function(data) {
      console.log(data);

      if (data=="") {
        $("#weatherOutput").html("No results found for the given city").fadeIn();
      } else {
        $("#weatherOutput").html(data).fadeIn();
      }
    });

  } else {
    $("#weatherOutput").html("Please enter a city.").fadeIn();
  }

});