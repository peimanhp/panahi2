const copyRight = document.getElementById("copyright");

const d = new Date();
let year = d.getFullYear();
copyRight.innerText = `Copyright © ${year}. Arefeh Panahi. All rights reserved.`;