const menu = document.querySelector('.menu');

menu.addEventListener("click", () => {
  
  const navContent = document.querySelector('.header__nav');

  menu.classList.toggle('active');
  navContent.classList.toggle('active');
  document.body.classList.toggle('active');
})