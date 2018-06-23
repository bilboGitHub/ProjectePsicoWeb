function slide() {
    $( ".vermell" ).fadeToggle(2000, function(){
        $( ".vermell" ).fadeToggle(2000, function(){
            $( ".blau" ).fadeToggle(2000, function(){
                $( ".blau" ).fadeToggle(2000, function(){
                    $( ".verd" ).fadeToggle(2000, function(){
                        $( ".verd" ).fadeToggle(2000, slide);
                    })
                })
            })
        })
    });
}

slide();

$(window).scroll(function(){
    var pixels = $(window).scrollTop();
    $("#header").css({
        "height": pixels
    })
});

// function heroJordi() {
//     $("#hero1").css({
//         "color": "red"
//     });
// }

// function heroJordi() {
//     $("#hero1").removeClass( "transformar" );
// }
// heroJordi();

// function heroJordi() {
//     $("#hero1").fadeToggle(2000( "slick-current slick-active" );
// }
// toggleClass
// heroJordi();

// function heroJordi() {
//     $( "#hero1" ).fadeToggle(2000, function(){
//         $( "#hero1" ).fadeToggle(2000, function(){
//             $( "#hero2" ).fadeToggle(2000, function(){
//                 $( "#hero2" ).fadeToggle(2000, function(){
//                     $( "#hero3" ).fadeToggle(2000, function(){
//                         $( "#hero3" ).fadeToggle(2000, slide);
//                     })
//                 })
//             })
//         })
//     });
// }
// heroJordi();
