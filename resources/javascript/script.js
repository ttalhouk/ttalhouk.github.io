
$(document).ready(function(){


  // scroll spy linked to navbar highlighting
  var offset = 60;
  $('body').scrollspy({ target: '#navbar', offset })
  // nav height offset
  var navHeight = $('#navbar').height();
  var windowHeight = $(window).height();
  $('#top').css({minHeight:(windowHeight-navHeight-16)});

  var sectionTitleHeight = $('.section-title').height();
  $('.skills-copy').css({minHeight:($('#skills .container').height()-sectionTitleHeight)})

  // animate scrolling to sections

  // $('.navbar li a').click(function(event) {
  //     event.preventDefault();
  //     $($(this).attr('href'))[0].scrollIntoView();
  //     scrollBy(0, -offset);
  // });

  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          console.log($('html, body'));
          $('html, body').animate({
            scrollTop: (target.offset().top - offset)
          }, 1000);
          return false;
        }
      }
    });
  });
});
