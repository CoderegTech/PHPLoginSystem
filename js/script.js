// toggle Password type
const passwdInput = document.querySelector(".passwd");
const showPasswdBtn = document.querySelector(".show-passwd");
showPasswdBtn.onclick = () => {
  showPasswdBtn.classList.toggle("show");

  if (showPasswdBtn.classList.contains("show")) {
    passwdInput.type = "text";
  } else {
    passwdInput.type = "password";
  }
};

// Alert message
const alertMsg = (msg, msgAlertType) => {
  const alert = document.querySelector(".alert");
  const alertMsg = document.querySelector(".alert-msg");
  const alertClose = document.querySelector("#alert-close");

  if (msgAlertType === "success") {
    alertMsg.textContent = msg;
    alert.style.background = "rgb(0, 192, 48)";
    alert.classList.replace("hide", "show");
  } else if (msgAlertType === "error") {
    alertMsg.textContent = msg;
    alert.style.background = "rgb(255, 0, 0)";
    alert.classList.replace("hide", "show");
  }

  setTimeout(() => {
    alert.classList.replace("show", "hide");
  }, 5000);

  alertClose.onclick = () => alert.classList.replace("show", "hide");
};
