const btnMenu = document.querySelector('.btn-menu');

btnMenu.addEventListener("click", (e) => {
   const navContainer = document.querySelector(".navbar-container");
   const navList = document.querySelector(".nav-desktop");

   e.target.classList.toggle("active");
   navContainer.classList.toggle("active");
   navList.classList.toggle("active")
})