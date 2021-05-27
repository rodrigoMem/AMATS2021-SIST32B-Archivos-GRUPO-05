$(document).ready(function () {
  $("#ajaxcall").click(function () {
  
    $.ajax({
      type: "POST",
      url: "/admin/admin/createcategory",
      data: $("#userForm").serialize(),
      success: function (response) {
        console.log(response);
        $("#loaded").html(response);
      }
    });
    return false;
  });
});
