

$(function(){

  // C. Layout
  // =========

  // Adjust Height of Banner in the Front Page
  var $bannerHeight =  $(window).height()-$('.header').height()-$('.icn--learn-more--1').height();
  $('.banner').css('height', $bannerHeight);
  $('.description').css('height', $bannerHeight);

  $( window ).scroll(function() {
    if($(window).scrollTop() > $('.banner').height()-5) {
      $('.header .grid').css('border-bottom-color', 'rgb(90,100,101)');
    } else {
      $('.header .grid').css('border-bottom-color', 'transparent');
    }
  });
  
  
  var pageurl = '';


  $("a[rel='tab']").click(function(e){
    //get the link location that was clicked
    pageurl = $(this).attr('href');
    openPage(pageurl);

    if ($(this).parent().hasClass('nav__item')) {
      menuAction();
    }
      
  });

});

/* the below code is to override back button to get the ajax content without reload*/
$(window).bind('popstate', function() {
  $.ajax({url:location.pathname+'?rel=tab',success: function(data){
    $('#container').html(data);
  }});
});





function openPage(pageurl) {
  //to get the ajax content and display in div with id 'container'
  $.ajax({url:pageurl+'?rel=tab',success: function(data){
    $('#container').html(data);
  }});

  
  
  //to change the browser URL to 'pageurl'
  if(pageurl!=window.location){
    window.history.pushState({path:pageurl},'',pageurl);  
  }
  return false;
}



// var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
// console.log(newURL);
// var pathArray = window.location.pathname.split( '/' );
// console.log(pathArray);
// var secondLevelLocation = pathArray[0];
// console.log(secondLevelLocation);

// Hide left and right arrow at book shelf's slider
$('.sliderarrow').hide(); 

$('.library__shelf').each(function() { 
  $books = $( this ).find('.books');  
  $books.css('width', $books.find('.books__item').length*(170+4));

  if ($books.width() > $(this).width()) {
    $(this).find('.sliderarrow--right').show();
  };

});

$controlRight = $('.sliderarrow--right');
$controlLeft  = $('.sliderarrow--left');
sliderAnimation();

$( window ).resize(function() {
  $bannerHeight =  $(window).height()-$('.header').height()-$('.icn--learn-more--1').height();
  $('.banner').css('height', $bannerHeight);
  $('.description').css('height', $bannerHeight);

  // Adjust Width of Library Shelf 
  $('.library__shelf').each(function() { 
    $books = $( this ).find('.books');

    if ($books.width() > $(this).width()) {
      $(this).find('.sliderarrow--right').show();
    };

  });

  // Slider animation
  sliderAnimation();
  

});





function sliderAnimation() {
  $bookWidth = $('.books li').width() + 4;
  $shelfWidth = $('.library__shelf').width();
  $nBookDisplayed = Math.floor($shelfWidth/$bookWidth);
  $shelfWindow = $nBookDisplayed * $bookWidth;

  
  $controlRight.click(function () {
    $curPos = $( this ).next('.books').position().left;
    $booksWidth = $(this).next('.books').width();
    if (($curPos + 2*$shelfWindow) < $booksWidth) {
      $( this ).next('.books').animate({
        left: "-=" + $shelfWindow
      }, 700);
      $(this).siblings('.sliderarrow--left').show(700);
    } else {
      $( this ).next('.books').animate({
        left: -($booksWidth - $curPos - $shelfWidth)
      }, 700);
      $(this).hide(700);
      $(this).siblings('.sliderarrow--left').show(700);
    } 
  });

  $controlLeft.click(function () {
    $curPos = $( this ).siblings('.books').position().left;
    $booksWidth = $(this).next('.books').width();
    if (($curPos + 2*$shelfWindow) < $booksWidth) {
      $( this ).siblings('.books').animate({
        left: "+=" + $shelfWindow
      }, 700);
      $(this).siblings('.sliderarrow--right').show(700);
    } else {
      $( this ).siblings('.books').animate({
        left: 0
      }, 700);
      $(this).hide(700);
      $(this).siblings('.sliderarrow--right').show(700);
    }
    
  });
}



 // D. Animation
 // ============

 // Toggle Menu
$(document).ready(function() {
  $('#toggle').click(function() {
   menuAction();
  });

  // Learn More icon
  $('.icn--learn-more').click(function() {
   $this = $(this);
   $next = $(this).next('.description');
   $(document.body).scrollTo($next);
  });


  // Show Overlay Page (sign in and sign out background)
  // Show Sign In and Sign Out Form
  $('.signIn').click(function() {
   $.ajax({
     url: 'inc/sign-in.html'
   })
     .done(function( response ) {
       $( '.overlay--content div' ).html( response );
     });
   $('.overlay').addClass('overlay-animated');
   $('.overlay').removeClass('overlay-animation-removed');
  });

  $('.signUp').click(function() {
   $.ajax({
     url: 'inc/sign-up.html'
   })
     .done(function( response ) {
       $( '.overlay--content div' ).html( response );
     });
   $('.overlay').addClass('overlay-animated');
   $('.overlay').removeClass('overlay-animation-removed');
  });

  // Hide overlay page (sign in and sign out background)
  $('.overlay__close').click(function() {
   $('.overlay').addClass('overlay-animation-removed');
   $('.overlay').removeClass('overlay-animated');
  });







});


// Boooks animation while hovering
var $container  = $('.books'),
 $articles = $container.children('li'),
 timeout;

$articles.on( 'mouseenter', function( event ) {
   
 var $article  = $(this);
 clearTimeout( timeout );
 timeout = setTimeout( function() {
   
   if( $article.hasClass('active') ) return false;
   
   $articles.not( $article.removeClass('blur').addClass('active') )
        .removeClass('active')
        .addClass('blur');
   
 }, 65 );
 
});

$container.on( 'mouseleave', function( event ) {
 
 clearTimeout( timeout );
 $articles.removeClass('active blur');
 
});


 // Toggle Menu
function menuAction() {
  $('.navbar').toggleClass('navbar-display');
  $('.nav').toggleClass('nav-animated');
  $('.showmenu').toggleClass('showmenu-hide');
  $('.hidemenu').toggleClass('hidemenu-show');
}