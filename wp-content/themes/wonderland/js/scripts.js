jQuery(document).ready(function($)  {
    let width = $(window).width();
    let body = $('body');

    const headerFront = document.querySelector('.site-header');

    // Вверх и показ верхнего меню
    const headerChange = () => {
        const
          mainBlock = document.querySelector('#page.site');
  
    
         window.addEventListener('scroll', () => {
           if (-mainBlock.getBoundingClientRect().top > 5) {
              headerFront.classList.add('header-scroll');
          
           } else {
              headerFront.classList.remove('header-scroll');
           }
         })
    
      }
      headerChange();

});