

// //// Hide and Show Navbar on scroll //////
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("topNav").style.top = "0";
  } else {
    document.getElementById("topNav").style.top = "-112px";
  }
  prevScrollpos = currentScrollPos;
}

/////////////////////  End ////////////
$(document).ready(function() {



  /////////////// Navbar color change on scroll  /////////////
  $(window).scroll(function() {
  
    if($(this).scrollTop() > 100) { 
        $('.navbar').addClass('solid');
    } else {
        $('.navbar').removeClass('solid');
    }
  });
 /////////////// End ////////////
        
 //////// Homepage Testimonials //////////
   $(".testimonials").owlCarousel({
          
    autoPlay: 3000,
    items :1,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3],
    center: true,
    nav:true,
    loop:true,
    responsive: {
    600: {
    items: 1
    }
    }


    });
   // // End   ///////////////

  });
  ///////

///////////  Trending Reports Homepage /////////////
'use strict';

const Tabs = {
  init() {
    let promise = $.Deferred();
    this.$tabs = $('ul.nav-tabs');
    this.checkHash();
    this.bindEvents();
    this.onLoad();
    return promise;
  },

  checkHash() {
    if (window.location.hash) {
      this.toggleTab(window.location.hash);
    }
  },

  toggleTab(tab) {
    var $paneToHide = $(tab).closest('.trenReportPar').find('div.content-pane').filter('.is-active'),
      $paneToShow = $(tab),
      $tab = this.$tabs.find('a[href="' + tab + '"]');


    $tab.closest('li').addClass('active').siblings('li').removeClass('active');

    $paneToHide.removeClass('is-active').addClass('is-animating is-exiting');
    $paneToShow.addClass('is-animating is-active');
  },

  showContent(tab) {

  },

  animationEnd(e) {
    $(e.target).removeClass('is-animating is-exiting');
  },

  tabClicked(e) {
    e.preventDefault();
    this.toggleTab(e.target.hash);
  },

  bindEvents() {

    this.$tabs.on('click', 'a', this.tabClicked.bind(this));

    $('div.content-pane').on('transitionend webkitTransitionEnd', this.animationEnd.bind(this));
  },
  
  onLoad() {
    $(window).load(function() {
      $('div.content-pane').removeClass('is-animating is-exiting');
    });
  }
}

Tabs.init();

/////////// END s//////////////

///////////////////// Home Tabp Panel /////////////
$('.responsive-tabs i.fa').click(function() {
  $(this).parent().toggleClass('open');
});

$('.responsive-tabs > li a').click(function() {
  $('.responsive-tabs > li').removeClass('active');
  $(this).parent().addClass('active');
  $('.responsive-tabs').toggleClass('open');
});
//////////////////////////////////////////////////////

//////////////////////
$(document).ready(function() {

 $(window).resize(function(){
   if ($(window).width() >= 980){	

       $(".navbar .dropdown-toggle").hover(function () {
          $(this).parent().toggleClass("show");
          $(this).parent().find(".dropdown-menu").toggleClass("show"); 
        });
 
       $( ".navbar .dropdown-menu" ).mouseleave(function() {
         $(this).removeClass("show");  
       });
   
   }	
 });  
   

 
 // document ready  
 });


///////////////////////////// captcha Request///////////////
 
 var a, b, c,
    submitContent,
    captcha,
    locked,
    validSubmit = false,
    timeoutHandle;

function generateCaptcha(){
  a = Math.ceil(Math.random() * 10);
  b = Math.ceil(Math.random() * 10);
  c = a + b;
  submitContent = '<span>' + a + '</span> + <span>' + b + '</span>' +
    ' = <input class="submit__input" type="text" maxlength="2" size="2" required />';
  $('.submit__generated').html(submitContent);

  init();
}


function checkCaptcha(){
  if(captcha === c){
    $('.submit__generated')
      .removeClass('unvalid')
      .addClass('valid');
    $('.submit').removeClass('overlay');
    $('.submit__overlay').fadeOut('fast');

    $('.submit__error').addClass('hide');
    $('.submit__error--empty').addClass('hide');
    validSubmit = true;
  }
  else {
    if(captcha === ''){
      $('.submit__error').addClass('hide');
      $('.submit__error--empty').removeClass('hide');
    }
    else {
      $('.submit__error').removeClass('hide');
      $('.submit__error--empty').addClass('hide');
    }

    $('.submit__generated')
      .removeClass('valid')
      .addClass('unvalid');
    $('.submit').addClass('overlay');
    $('.submit__overlay').fadeIn('fast');
    validSubmit = false;
  }
  return validSubmit;
}

function unlock(){ locked = false; }

$('.submit__control i.fa-refresh').on('click', function(){
  if (!locked) {
    locked = true;
    setTimeout(unlock, 500);
    generateCaptcha();
    setTimeout(checkCaptcha, 0);
  }
});

function init(){
  $('form').on('submit', function(e){
    e.preventDefault();
    if($('.submit__generated').hasClass('valid')){
      captcha = $('.submit__input').val();
      if(captcha !== ''){
        captcha = Number(captcha);
      }

      checkCaptcha();

      if(validSubmit === true){
        validSubmit = false;
        submitted();
      }
    }
    else {
      return false;
    }
  });



  $('.submit__input').on('propertychange change keyup input paste', function(){
 
    window.clearTimeout(timeoutHandle);
    timeoutHandle = window.setTimeout(function(){
      captcha = $('.submit__input').val();
      if(captcha !== ''){
        captcha = Number(captcha);
      }
      checkCaptcha();
    },150);
  });

  $('body')
    .on('keydown', function(e) {
      if (e.which === 13) {
        if($('.submit-form').hasClass('overlay')){
          checkCaptcha();
        } else {
          $('.submit-form').addClass('enter-press');
        }
      }
    })
    .on('keyup', function(e){
      if (e.which === 13) {
        $('.submit-form').removeClass('enter-press');
      }
    });

  $('.submit-control i.fa-refresh').on('click', function(){
    if (!locked) {
      locked = true;
      setTimeout(unlock, 500);
      generateCaptcha();
      setTimeout(checkCaptcha, 0);
    }
  });

  $('.submit-form-overlay').on('click', function(){
    checkCaptcha();
  });
}

generateCaptcha();
///////////////////////////// captcha Request End///////////////