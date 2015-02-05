(function() {
    // var feed = new Instafeed({
    //     get: 'user',
    //     userId: 1240423695,
    //     clientId: 'f6888bcf96454d39ae8cd771e340e004',
    //     accessToken: '1240423695.467ede5.ee5c520eb9064b608ab179c869d5e17c',
    //     resolution: "standard_resolution",
    //     template: '<li><a href="{{link}}"><img src="{{image}}" /></a></li>',
    //     limit:12
    // });
    // feed.run();
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
})();