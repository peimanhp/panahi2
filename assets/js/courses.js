/* stars on click
const courseCards = document.querySelectorAll(".course-card-content");

for (const courseCard of courseCards) {    
    courseCard.addEventListener("click", addRating);
}
function addRating(e){
    if (e.target.classList.contains("star")) {
        e.target.src = "/panahi/assets/img/full-star.svg"
    }
}
*/

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