

document.addEventListener("DOMContentLoaded", function (event) {
  
    window.onload = function () {
        home.classList.add('home-show');
    }
   window.onhashchange = function () {
        window.scrollTo(top);
    }


        let mm_icon = document.querySelector('.main-menu-icon');
   
        const m_line_hover = document.querySelector('.menu-line');
        const m_hamburger_hover = document.querySelector('.hmbgr');
        const mht_hover = document.querySelector('.hamburger-top');
        const mhm_hover = document.querySelector('.hamburger-mid');
         const main_menu = document.querySelector('.c-interface');
         
        const home = document.querySelector('.c-home');
         const click_home = document.querySelector('.click-home');

    const portfolio = document.querySelector('.c-portfolio');
    const click_portfolio = document.querySelector('.click-portfolio');

    const about = document.querySelector('.c-about');
    const click_about = document.querySelector('.click-about');
 
    const contact = document.querySelector('.c-contact');
    const click_contact = document.querySelector('.click-contact');
    const hide_scroll = document.getElementsByTagName('body')[0];

        /* menu icon controls */
        mm_icon.addEventListener('mouseenter', onHoverMainBtn);
        mm_icon.addEventListener('mouseleave', outHoverMainBtn);
        mm_icon.addEventListener('click', onToggleMainBtn);

        function onHoverMainBtn() {
            m_line_hover.classList.add('menu-line-hover');
            m_hamburger_hover.classList.add('hmbgr-hover');
            mht_hover.classList.add('hamburger-top-hover');
            mhm_hover.classList.add('hamburger-mid-hover');
        };

        function outHoverMainBtn() {
            m_line_hover.classList.remove('menu-line-hover');
            m_hamburger_hover.classList.remove('hmbgr-hover');
            mht_hover.classList.remove('hamburger-top-hover');
            mhm_hover.classList.remove('hamburger-mid-hover');
        };
       
        function onToggleMainBtn() {
           
            mm_icon.classList.toggle('main-menu-icon-active');
            main_menu.classList.toggle('interface-show'); 
             hide_scroll.classList.toggle('hide-scroll');
        }
 

    click_home.addEventListener('click', function () {
        home.classList.add('home-show');
        portfolio.classList.remove('portfolio-show');
        about.classList.remove('about-show');
        contact.classList.remove('contact-show');
        document.querySelector('.btm-container').style.display = 'block';
        onToggleMainBtn();
    });

    click_portfolio.addEventListener('click', function () {
        portfolio.classList.add('portfolio-show');
        home.classList.remove('home-show');
        about.classList.remove('about-show');
        contact.classList.remove('contact-show');
        onToggleMainBtn();
        hideFooter();
    });

    click_about.addEventListener('click', function () {
        about.classList.add('about-show');
        portfolio.classList.remove('portfolio-show');
        home.classList.remove('home-show');
        contact.classList.remove('contact-show');
        onToggleMainBtn();
        hideFooter();
    });

    click_contact.addEventListener('click', function () {
        contact.classList.add('contact-show');
        portfolio.classList.remove('portfolio-show');
        home.classList.remove('home-show');
        about.classList.remove('about-show');
        onToggleMainBtn();
        hideFooter();
    });

  /* menu links animation */
    const rect_link = document.querySelectorAll('.svg-wrapper');
    const menu_link_h = document.querySelector('.shape-h');
    const menu_link_p = document.querySelector('.shape-p');
    const menu_link_a = document.querySelector('.shape-a');
    const menu_link_c = document.querySelector('.shape-c');
 

         for (var i = 0; i < rect_link.length; i++) {
            if(i==0){
             rect_link[i].addEventListener('mouseenter', function(){
                    menu_link_h.classList.add('shape-in');
                    menu_link_h.classList.remove('shape-out'); 
             
             }) ; 
            }else if(i==1){
                rect_link[i].addEventListener('mouseenter', function(){
                    menu_link_p.classList.add('shape-in');
                    menu_link_p.classList.remove('shape-out');       
             }) ; 
                
             }else if(i==2){
                rect_link[i].addEventListener('mouseenter', function(){
                    menu_link_a.classList.add('shape-in');
                    menu_link_a.classList.remove('shape-out');   
                }) ;
             }else if(i==3){
                rect_link[i].addEventListener('mouseenter', function(){
                    menu_link_c.classList.add('shape-in');
                    menu_link_c.classList.remove('shape-out');
                    
                }) ;
             }
     }
     for (var i = 0; i < rect_link.length; i++) {
        if(i==0){
         rect_link[i].addEventListener('mouseleave', function(){
                menu_link_h.classList.add('shape-out');
                menu_link_h.classList.remove('shape-in');           
         }) ; 
        }else if(i==1){
            rect_link[i].addEventListener('mouseleave', function(){
                menu_link_p.classList.add('shape-out');
                menu_link_p.classList.remove('shape-in');               
         }) ;        
         }else if(i==2){
            rect_link[i].addEventListener('mouseleave', function(){
                menu_link_a.classList.add('shape-out');
                menu_link_a.classList.remove('shape-in');       
            }) ;
         }else if(i==3){
            rect_link[i].addEventListener('mouseleave', function(){
                menu_link_c.classList.add('shape-out');
                menu_link_c.classList.remove('shape-in');          
            }) ;
         }
    }
    function hideFooter(){     
        const my_footer = document.querySelector('.btm-container');
        my_footer.style.display = 'none';
    }

    document.querySelector('.text-area').addEventListener('focusin', function(){
            this.style.height = "180px";

    });



});


