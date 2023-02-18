

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

/////////////////////  End  ////////////
$(document).ready(function() {


  ////////////// active class on Single report scroll-links ///////////
  $(".scroll-links").click(function() {
    $(".scroll-links.active").removeClass("active");
    $(this).addClass("active");
  });
  //////////////////////////////////////////
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
    ///////// clien logo homepage //////////
    $(".clients").owlCarousel({
          
      autoPlay: 2000,
      items : 5,
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
      // End
      
      
  });
  ///////
  
  
//      $("#withCaptchaSubmit").click( function(){
////          alert('gmmmm');
////          alert($('#textBox').val());
////           alert($('#captcha').val());
////           alert(document.getElementById("captcha").innerText);
//           var maincaptcha = document.getElementById("captcha").innerText;
//           var enteredcaptcha = $('#textBox').val();
//           if(maincaptcha == enteredcaptcha){
////               alert('Matched');
//               $("#withCaptchaForm").submit();
//           }else{
//               alert('Not Matched');
//           }
//
//      });
      
      
      function form1(){          
          if($('#full_name').val().trim() != '' && $('#email').val().trim() != '' && $('#phone').val().trim() != '' && $('#company').val().trim() != '' && $('#message').val().trim() != ''){
       
           var maincaptcha = document.getElementById("captcha").innerText;
           var enteredcaptcha = $('#textBox').val();
           if(maincaptcha == enteredcaptcha){
//               alert('Matched');
               $("#withCaptchaForm").submit();
           }else{
               alert('Please Enter Valid Captcha');
           }
       }else{
           alert('Please Fill All the Fields');
       }
      }
      
      function sampleform(){          
          if($('#full_name').val().trim() != '' && $('#email').val().trim() != '' && $('#phone').val().trim() != '' && $('#company').val().trim() != '' && $('#message').val().trim() != '' && $('#purchasetime').val().trim() != 'Purchase Time'){
       
           var maincaptcha = document.getElementById("captcha").innerText;
           var enteredcaptcha = $('#textBox').val();
           if(maincaptcha == enteredcaptcha){
//               alert('Matched');
               $("#withCaptchaForm").submit();
           }else{
               alert('Please Enter Valid Captcha');
           }
       }else{
           alert('Please Fill All the Fields');
       }
      }
      

///////////  Trending Reports Homepage /////////////
'use strict';

const Tabs = {
  init() {
    let promise = $.Deferred();
    this.$tabs = $('ul.nav-tabs');
    this.checkHash();
    this.bindEvents();
//    this.onLoad();
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
  
//  onLoad() {
//    $(window).load(function() {
//      $('div.content-pane').removeClass('is-animating is-exiting');
//    });
//  }
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

 // Pagination ///////


// Returns an array of maxLength (or less) page numbers
// where a 0 in the returned array denotes a gap in the series.
// Parameters:
//   totalPages:     total number of pages
//   page:           current page
//   maxLength:      maximum size of returned array
function getPageList(totalPages, page, maxLength) {
  if (maxLength < 5) throw "maxLength must be at least 5";

  function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
  if (totalPages <= maxLength) {
    // no breaks in list
    return range(1, totalPages);
  }
  if (page <= maxLength - sideWidth - 1 - rightWidth) {
    // no break on left of page
    return range(1, maxLength - sideWidth - 1)
      .concat([0])
      .concat(range(totalPages - sideWidth + 1, totalPages));
  }
  if (page >= totalPages - sideWidth - 1 - rightWidth) {
    // no break on right of page
    return range(1, sideWidth)
      .concat([0])
      .concat(
        range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
      );
  }
  // Breaks on both sides
  return range(1, sideWidth)
    .concat([0])
    .concat(range(page - leftWidth, page + rightWidth))
    .concat([0])
    .concat(range(totalPages - sideWidth + 1, totalPages));
}

$(function() {
  // Number of items and limits the number of items per page
  var numberOfItems = $("#listReports .rListReport").length;
  var limitPerPage = 10;
  // Total pages rounded upwards
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  // Number of buttons at the top, not counting prev/next,
  // but including the dotted buttons.
  // Must be at least 5:
  var paginationSize = 7;
  var currentPage;

  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;
    currentPage = whichPage;
    $("#listReports .rListReport")
      .hide()
      .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
      .show();
    // Replace the navigation items (not prev/next):
    $(".pagination li").slice(1, -1).remove();
    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>")
        .addClass(
          "page-item " +
            (item ? "current-page " : "") +
            (item === currentPage ? "active " : "")
        )
        .append(
          $("<a>")
            .addClass("page-link")
            .attr({
              href: "javascript:void(0)"
            })
            .text(item || "...")
        )
        .insertBefore("#next-page");
    });
    return true;
  }

  // Include the prev/next buttons:
  $(".pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Next")
    )
  );
  // Show the page links
  $("#listReports").show();
  showPage(1);

  // Use event delegation, as these items are recreated later
  $(
    document
  ).on("click", ".pagination li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
  });
  $("#next-page").on("click", function() {
    return showPage(currentPage + 1);
  });

  $("#previous-page").on("click", function() {
    return showPage(currentPage - 1);
  });
  $(".pagination").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
  });
});



// Pagination End ///////


////// Captcha //////
let captchaText = document.querySelector('#captcha');
let userText = document.querySelector('#textBox');
let submitButton = document.querySelector('#captchasubmit');
let output = document.querySelector('#output');
let refreshButton = document.querySelector('#refresh');

let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
let emptyArr = [];
for(let i = 1; i <= 7; i++) {
	emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
}
captchaText.innerHTML = emptyArr.join('');

userText.addEventListener('keyup', function(e) {
	if(e.keyCode === 13) {
		if(userText.value === captchaText.innerHTML) {
			output.classList.add("greenText");
			output.innerHTML = "Correct!";
		} else {
			output.classList.add("redText");
			output.innerHTML = "Incorrect, please try again";
		}
	}
});

submitButton.addEventListener('click',  function() {
	if(userText.value === captchaText.innerHTML) {
		output.classList.add("greenText");
		output.innerHTML = "Correct!";
	} else {
		output.classList.add("redText");
		output.innerHTML = "Incorrect, please try again";
	}
});

refreshButton.addEventListener('click', function () {
	userText.value = "";
	let refreshArr = [];
	for(let j = 1; j <= 7; j++) {
		refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
	}
	captchaText.innerHTML = refreshArr.join('');
	output.innerHTML = "";
});

submitButton.addEventListener('keyup', function(e) {
	if(e.keyCode === 13) {
	if(userText.value === captchaText.innerHTML) {
		console.log("correct!");
		output.classList.add("greenText");
		output.innerHTML = "Correct!";
	} else {
		output.classList.add("redText");
		output.innerHTML = "Incorrect, please try again";
	}
	}
});
////// End /////////