// receiving
// var select = "";
// for (i=1;i<=10;i++){
//     select += "<option val=" + i + ">" + i + "</option>";
// }
// document.getElementById("some_selector").innerHTML= select;

$(function(){

$("#toggleContact").click(function() {
  $(".contact").toggle("slow");
});
})
