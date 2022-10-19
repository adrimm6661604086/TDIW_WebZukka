//MENU TOGGLER

document.getElementById("menuIcon").addEventListener("click", menuToggler);
function menuToggler() {
  let menu = document.getElementById("menu");
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
  } else {
    menu.classList.add("active");
  }
}

// DROPDOWN

const profile = document.getElementById('profile');
profile.addEventListener('click', () => {
  let ul = document.getElementById('dropdown');
  if (ul.classList.contains("show")) {
    ul.classList.remove("show");
  } else {
    ul.classList.add("show");
  }
});

// GO TO TOP ARROW

document.addEventListener("scroll", () => {
    const arrow = document.getElementById("go_to_top");
    const scrollY = window.pageYOffset;
  
    if (scrollY >= 30) {
      arrow.classList.add("active");
    } else {
      arrow.classList.remove("active");
    }
  });
  
  document.getElementById("go_to_top").addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });