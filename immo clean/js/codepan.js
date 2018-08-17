function initparticles() {
   bubbles();

   fire();

}

/*The measurements are ... whack (so to say), for more general text usage I would generate different sized particles for the size of text; consider this pen a POC*/

function bubbles() {
   $.each($(".particletext.bubbles"), function(){
      var bubblecount = ($(this).width()/50)*10;
      for(var i = 0; i <= bubblecount; i++) {
         var size = ($.rnd(40,80)/10);
         $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      }
   });
}



function fire() {
   $.each($(".particletext.fire"), function(){
      var firecount = ($(this).width()/50)*20;
      for(var i = 0; i <= firecount; i++) {
         var size = $.rnd(8,12);
         $(this).append('<span class="particle" style="top:' + $.rnd(40,70) + '%; left:' + $.rnd(-10,100) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,20)/10) + 's;"></span>');
      }
   });
}

// function sunbeams() {
//    $.each($(".particletext.sunbeams"), function(){
//       var linecount = ($(this).width()/50)*10;
//       for(var i = 0; i <= linecount; i++) {
//          $(this).append('<span class="particle" style="top:' + $.rnd(-50,00) + '%; left:' + $.rnd(0,100) + '%;width:' + $.rnd(1,3) + 'px; height:' + $.rnd(80,160) + '%;animation-delay: -' + ($.rnd(0,30)/10) + 's;"></span>');
//       }
//    });
// }

jQuery.rnd = function(m,n) {
      m = parseInt(m);
      n = parseInt(n);
      return Math.floor( Math.random() * (n - m + 1) ) + m;
}

initparticles();
