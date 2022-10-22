$(document).ready(function () {
  // Login User
  $(".login-form").submit((e) => {
    e.preventDefault();

    const email = $("#login-email");
    const password = $("#login-password");

    $.ajax({
      method: "POST",
      url: "http://localhost/loginSystem/includes/login.inc.php",
      data: {
        email: email.val(),
        password: password.val(),
      },
      dataType: "text",
      success: function (response) {
        console.log(response);
        window.location.href = "home.php";
        alertMsg(response, "success");

        email.val("");
        password.val("");
      },
      error: function (err) {
        console.log(err);
        alertMsg(err, "error");
      },
    });
  });

  // Signup User
  $(".signin-form").submit((e) => {
    e.preventDefault();
    const username = $("#signin-username");
    const email = $("#signin-email");
    const password = $("#signin-password");

    $.ajax({
      method: "POST",
      url: "http://localhost/loginSystem/includes/signup.inc.php",
      data: {
        username: username.val(),
        email: email.val(),
        password: password.val(),
      },
      dataType: "text",
      success: function (response) {
        alertMsg(response, "success");

        username.val("");
        email.val("");
        password.val("");
      },
      error: function (err) {
        console.log(err);
        alertMsg(err, "error");
      },
    });
  });
});
