$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
    $("#sidebar").toggleClass("sidebar-collapsed");
    console.log("chhota");
  });
});
