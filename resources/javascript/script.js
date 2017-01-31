

$(document).ready(function(){
  // scroll actions
  $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    // console.log(wScroll);
    if(wScroll > $('.skills-copy').offset().top - $(window).height()){
      var sideOffset = 100 - (wScroll - ($('.skills-copy').offset().top - $(window).height()))/4;
      if (sideOffset < 0) {
        sideOffset = 0;
      };
      $('.js--slide-left').each(function(i){
        $('.js--slide-left').eq(i).css({'left': sideOffset+'%'});
      });
      $('.js--slide-left').each(function(i){
        $('.js--slide-right').eq(i).css({'left': -sideOffset+'%'});
      });
    }
    if(wScroll > $('.js--skills-secondary').offset().top - $(window).height()){
      var btmOffset = 175 - (wScroll - ($('.js--skills-secondary').offset().top - $(window).height()))/2;
      if (btmOffset < 0) {
        btmOffset = 0;
      };
      $('.js--slide-up').each(function(i){
        $('.js--slide-up').eq(i).css({'top': btmOffset+'px'});
      });
    }


  });

  $('.other-skills').waypoint(function(){

    $('.other-skills li').addClass('animated fadeIn');
  }, {
    offset: '80%'
  });
  $('.card').each(function(){
    $(this).css({'opacity': 0})
  })
  $('.projects-copy').waypoint(function(){
    $('.card').each(function(i){
      setTimeout(function(){
        $('.card').eq(i).addClass('animated bounceInUp');
        $('.card').eq(i).css({'opacity': 1});
      },250 * (i+1));
    });
  }, {
    offset: '60%'
  });


  var nav = $('nav');
  var brand = $('.navbar-brand');

  function navTransitionDark(){
    nav.addClass('navbar-inverse bg-inverse')
    nav.removeClass('navbar-light bg-light see-through');
    brand.addClass('brand-out');
  }
  function navTransitionLight(){
    nav.removeClass('navbar-inverse bg-inverse')
    nav.addClass('navbar-light bg-light see-through');
    brand.removeClass('brand-out');
  }

  new Waypoint.Inview({
    element:$('.jumbotron'),
    entered: function(direction){
      if(direction === 'up'){
        navTransitionDark();
      };
    },
    exited: function(direction){
      if (direction === 'down'){

        navTransitionLight();
      };
    }
  });




  // scroll spy linked to navbar highlighting
  var offset = 60;
  $('body').scrollspy({ target: '#navbar', offset })
  // nav height offset
  var navHeight = $('#navbar').height();
  var windowHeight = $(window).height();
  $('#top').css({minHeight:(windowHeight-navHeight-16)});

  var sectionTitleHeight = $('.section-title').height();
  $('.skills-copy').css({minHeight:($('#skills .container').height()-sectionTitleHeight)})


  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - offset)
          }, 1000);
          return false;
        }
      }
    });
  });
  // form validation
  $('form').on('submit', function(e){
    var errors = '';
    $('.alert').hide();
    if($('#email').val() === ''){
      errors += "Email field not completed! ";
      $('.email-field').addClass('has-danger');
    } else {
      $('.email-field').removeClass('has-danger');
    }
    if($('#name').val() === ''){
      errors += "Name field not completed! ";
      $('.name-field').addClass('has-danger');
    } else {
      $('.name-field').removeClass('has-danger');
    }
    if($('#content').val() === ''){
      errors += "Comment field not completed! ";
      $('.content-field').addClass('has-danger');
    } else {
      $('.content-field').removeClass('has-danger');
    }
    var errMsg = $('.err-msg');
    if(errors != ''){
      errMsg.html(`<div class="alert alert-danger err-msg sent-msg" role="alert"><strong>There was the following error(s) in your form:</strong><p>${errors}</p></div>`);
      errMsg
      errMsg.toggleClass('alert-danger hidden');
      e.preventDefault();
    } else {
      return;
    }
  });




});
