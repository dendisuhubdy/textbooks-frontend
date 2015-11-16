

$(function(){

  // ========= HEADER ========= //
  $('.toggle').click(function() {
   menuAction();
  });



  // ========= OVERLAY SIGN IN AND SIGN UP FORM ========= //

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



  // ========= FRONT PAGE ========= //

  // Adjust Height of Banner in the Front Page
  var $bannerHeight =  $(window).height()-$('.header').height()-$('.icn--learn-more--1').height();
  if ($(window).width() > 768) {
    $('.banner').css('height', $bannerHeight);
  }
  
  // Responsive font
  $(".banner--content__item--text h1").fitText(1.2, { minFontSize: '30px', maxFontSize: '80px' });
  


  // ========= LIBRARY PAGE ========= //

  // Hide left and right arrow at book shelf's slider
  $('.sliderarrow').hide(); 

  $('.library__shelf').each(function() { 
    $books = $( this ).find('.books');  

    // Set length of the shelf
    $books.css('width', $books.find('.books__item').length*(170));

    // Show the right arrow if shelf width > screen width
    if ($books.width() > $(this).width()) {
      $(this).find('.sliderarrow--right').show();
    };

  });

  $controlRight = $('.sliderarrow--right');
  $controlLeft  = $('.sliderarrow--left');
  sliderAnimation();

  $( window ).resize(function() {
    $bannerHeight =  $(window).height()-$('.header').height()-$('.icn--learn-more--1').height();
    if ($(window).width() > 768) {
      $('.banner').css('height', $bannerHeight);
    }

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

  // Show side menu (list of categories) in mobile display
  $('.side-menu-toggle').click(function() {
    $(this).toggleClass('side-menu-toggle--active');
  });


  // Boooks' animation while hovering
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



  // ========= LOAD THE PAGES ========= //

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




// FUNCTIONS //
///////////////

// Click page link 
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

// Slider animation on bookshelfs
function sliderAnimation() {
  $bookWidth = $('.books li').width();
  $shelfWidth = $('.library__shelf').width();
  $nBookDisplayed = Math.floor($shelfWidth/$bookWidth);
  $shelfWindow = $nBookDisplayed * $bookWidth;

  // Click right arrow -> Slide to left
  $controlRight.click(function () {
    $curPos = $( this ).next('.books').position().left;

    $booksWidth = $(this).next('.books').width();
    if ((-$curPos + 2*$shelfWindow) < $booksWidth) {
      $( this ).next('.books').animate({
        left: "-=" + $shelfWindow
      }, 700);
      $(this).siblings('.sliderarrow--left').show(700);
    } else {
      $( this ).next('.books').animate({
        left: -($booksWidth - $shelfWidth)
      }, 700);
      $(this).hide(700);
      $(this).siblings('.sliderarrow--left').show(700);
    } 
  });

  // Click left arrow -> Slide to right
  $controlLeft.click(function () {
    $curPos = $( this ).siblings('.books').position().left;
    $booksWidth = $(this).next('.books').width();
    if (($curPos + $shelfWindow) < $booksWidth) {
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

 // Toggle Menu
function menuAction() {
  $('.navbar').toggleClass('navbar-display');
  $('.nav').toggleClass('nav-animated');
  $('.showmenu').toggleClass('showmenu-hide');
  $('.hidemenu').toggleClass('hidemenu-show');
}

document.addEventListener("touchstart", function(){}, true);


// Library
// Sorting
$('.category__opt').hide();
$('.category__opt--added').show();
function sortFunction() {
  // var x = ;
  var i = document.getElementById("sort-option").selectedIndex;

  if (i==0) {
    $('.category__opt').hide();
    $('.category__opt--added').show();
  }

  if (i==1) {
    $('.category__opt').hide();
    $('.category__opt--title').show();
  }
  if (i==2) {
    $('.category__opt').hide();
    $('.category__opt--author').show();
  }
}

function scrollalert(){  
    var scrolltop=$('#scrollbox').attr('scrollTop');  
    var scrollheight=$('#scrollbox').attr('scrollHeight');  
    var windowheight=$('#scrollbox').attr('clientHeight');  
    var scrolloffset=20;  
    if(scrolltop>=(scrollheight-(windowheight+scrolloffset)))  
    {  
        //fetch new items  
        $('#status').text('Loading more items...');  
        $.get('new-items.html', '', function(newitems){  
            $('#content').append(newitems);  
            updatestatus();  
        });  
    }  
    setTimeout('scrollalert();', 1500);  
}

