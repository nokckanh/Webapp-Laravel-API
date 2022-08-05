

$('.navbar-nav').on('click','li',function(){
  $('.navbar-nav li.active').removeClass('active');
  $(this).addClass('active');
  
});

$('ul.nav li.dropdown').hover(function() {
  
});
$( function() {
    $( '#tt' ).progressbar({
     value:91
  
    });
  $( "#ss" ).progressbar({
      value: 95 
    });
  $( "#at" ).progressbar({
      value: 80 
    });
  $( "#tc" ).progressbar({
      value: 98
    });
  } );
$('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1
      }
    },
    
  ]
});
