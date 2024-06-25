let text = document.getElementById('title');
let left_gate = document.getElementById('gate-left');
let right_gate = document.getElementById('gate-right');

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    text.style.marginTop = value * 2.5 + 'px';
    left_gate.style.left = value * 0.5 + 'px';
    right_gate.style.left = value * -0.5 + 'px';
});