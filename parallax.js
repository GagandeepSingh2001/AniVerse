/*Code for scroll animation*/
let text = document.getElementById('title');
let left_gate = document.getElementById('gate-left');
let right_gate = document.getElementById('gate-right');

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    text.style.marginTop = value * 2.5 + 'px';
    left_gate.style.left = value * 0.5 + 'px';
    right_gate.style.left = value * -0.5 + 'px';
});

/*Code for page loader*/
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
  
    loader.classList.add("loader--hidden");
  
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
  
  /*code for sidebar */
  let btn = document.querySelector('#menu-btn');
  let btn1 = document.querySelector('#menu-btn1');
  let sidebar = document.querySelector('.sidebar');

  btn.onclick = () => {
    sidebar.classList.toggle('active');
  }
  btn1.onclick = () => {
    sidebar.classList.toggle('active');
  }

  /*code for download btn*/
  const downloadLink = document.querySelectorAll("[data-download]");

  downloadLink.forEach(button => {
    const id = button.dataset.download;
    const image = document.getElementById(id);
    const a = document.createElement("a"); //creating anchor tag using JS

    a.href = image.src; // assigning image source to the anchor element
    a.download = "";
    a.style.display = "none"; // setting display for andhor tag to none

    button.addEventListener("click", () => {
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a); // removing anchor tag once download is complete
    });
  });