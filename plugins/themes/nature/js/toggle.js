// const hamburger = document.querySelector('#hamburger');
// const navMenu = document.querySelector('#nav-menu');

// hamburger.addEventListener('click', function() {
//     hamburger.classList.toggle('hamburger-active');
//     navMenu.classList.toggle('hidden');
// });

// function Menu(e) {
//     let list = document.querySelector('#ul')

//     e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px') , list.classList.add('opacity-100')) : (e.name = "menu",list.classList.remove('top-80px') , list.classList.remove('opacity-100'))
// }

// const list = document.querySelector('#nav-menu');

// hamburger.addEventListener('click', function() {
//     list.classList.toggle('hidden');
// });

function Menu(e) {
    let list = document.querySelector('#navbar');
    let navbar = document.querySelector('#navbar');

    if (e.name === 'menu') {
      e.name = 'close';
      list.classList.add('top-80px', 'opacity-100');
      navbar.classList.add('active');
    } else {
      e.name = 'menu';
      list.classList.remove('top-80px', 'opacity-100');
      navbar.classList.remove('active');
    }
}