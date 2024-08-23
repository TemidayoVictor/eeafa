let donate = document.getElementById('donate');
let donateClose = document.getElementById('donate-close');
let donateBtn = document.getElementById('donate-btn');
let menuBtn = document.getElementById('menu-btn');
let admMenuBtn = document.getElementById('adm-menu-btn');
let navCon = document.getElementById('nav-con');
let sidebar = document.getElementById('sidebar');
let contact = document.getElementById('contact');
let contactClose = document.getElementById('contact-close');
let contactBtn = document.getElementById('contact-btn');



donateBtn.onclick = () => {
  donate.classList.add('active-flex');
}

contactBtn.onclick = () => {
  contact.classList.add('active-flex');
}

donateClose.onclick = () => {
  donate.classList.remove('active-flex');
}

contactClose.onclick = () => {
  contact.classList.remove('active-flex');
}

menuBtn.onclick = () => {
  navCon.classList.toggle('active');
}

admMenuBtn.onclick = () => {
  sidebar.classList.toggle('active');
}

