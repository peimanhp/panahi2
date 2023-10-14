window.onload = replaceEnToFaDigits();
function replaceEnToFaDigits() {
  console.log("js loaded");
  let map = [
    "&#1776;",
    "&#1777;",
    "&#1778;",
    "&#1779;",
    "&#1780;",
    "&#1781;",
    "&#1782;",
    "&#1783;",
    "&#1784;",
    "&#1785;",
  ];
  document.body.innerHTML = document.body.innerHTML.replace(
    /\d(?=[^<>]*(<|$))/g,
    function ($0) {
      return map[$0];
    }
  );
}

let mobile;
let submit;
let validationMessage;
let input;
const loading = document.querySelector(".spinner-wrapper");

window.onload = grabDom();

function grabDom() {
  if (window.matchMedia("(max-width: 992px)").matches) {
    mobile = document.querySelectorAll(".input-code")[1];
    submit = document.querySelectorAll(".btn-sms")[1];
    input = document.querySelectorAll(".input")[1];
    validationMessage = document.querySelectorAll(".validation-message")[1];
  } else {
    mobile = document.querySelectorAll(".input-code")[0];
    submit = document.querySelectorAll(".btn-sms")[0];
    input = document.querySelectorAll(".input")[0];
    validationMessage = document.querySelectorAll(".validation-message")[0];
  }
}

window.onload = () => {
  submit.setAttribute("disabled", "");
  input.focus();
  mobile.onpaste = (e) => {
    e.preventDefault();
  };
};

function getRegexResult() {
  let regex = new RegExp(
    "09(1[0-9]|3[1-9]|2[1-9]|9[0-9]|0[0-9])[0-9]{3}[0-9]{4}"
  );
  return regex.test(mobile.value);
}

function validate() {
  let result = getRegexResult();
  if (result == true && mobile.value.length == 11) {
    mobile.classList.add("border", "border-success", "border-3");
    validationMessage.classList.remove("show");
    loading.style.display = "block";
  } else {
    mobile.classList.add("border", "border-danger", "border-3");
    validationMessage.classList.add("show");
    return false;
  }
}

mobile.addEventListener("keypress", (e) => {
  if (mobile.value.length >= 11 && !(e.key == "Enter")) e.preventDefault();

  let regex = /\d/;
  if (!regex.test(e.key) && !(e.key == "Enter") ) e.preventDefault();
});

function showAlert(show) {
  if (show) {
    mobile.classList.add("border", "border-danger", "border-3");
    validationMessage.classList.add("show");
  } else {
    mobile.classList.remove("border", "border-danger", "border-3");
    validationMessage.classList.remove("show");
  }
}

mobile.addEventListener("input", () => {
  let number = mobile.value;

  if (number.length >= 1 && !number.startsWith("0")) {
    showAlert(true);
  } else if (number.length >= 2 && !number.startsWith("09")) {
    showAlert(true);
  } else if (
    number.length >= 3 &&
    !(
      number.startsWith("091") ||
      number.startsWith("092") ||
      number.startsWith("093") ||
      number.startsWith("099") ||
      number.startsWith("090")
    )
  ) {
    showAlert(true);
  } else showAlert(false);

  let result = getRegexResult();
  if (result === true && number.length == 11) {
    submit.removeAttribute("disabled", "");
  } else submit.setAttribute("disabled", "");
});
