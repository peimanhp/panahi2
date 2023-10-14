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

var splide = new Splide(".splide", {
  arrowPath:
    "M13.6667 6.80003C13.6667 7.1167 13.7834 7.43336 14.0334 7.68336L24.9 18.55C25.7 19.35 25.7 20.65 24.9 21.45L14.0334 32.3167C13.55 32.8 13.55 33.6 14.0334 34.0834C14.5167 34.5667 15.3167 34.5667 15.8 34.0834L26.6667 23.2167C28.4334 21.45 28.4334 18.5667 26.6667 16.7834L15.8 5.91669C15.3167 5.43336 14.5167 5.43336 14.0334 5.91669C13.8 6.16669 13.6667 6.48336 13.6667 6.80003Z",
  autoplay: "play",
  start: 1,
  direction: "rtl",
  type: "loop",
  perMove: 1,
  perPage: 3,
  breakpoints: {
    992: {
      perPage: 1,
    },
    1400: {
      perPage: 2,
    },
  },
  focus: "center",
});

splide.mount();





