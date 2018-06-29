// $(document).ready(function() {

// function slide() {
//     $( ".trans_01" ).fadeToggle(2000, function(){
//         $( ".trans_01" ).fadeToggle(2000, function(){
//             $( ".trans_02" ).fadeToggle(2000, function(){
//                 $( ".trans_02" ).fadeToggle(2000, function(){
//                     $( ".trans_03" ).fadeToggle(2000, function(){
//                         $( ".trans_03" ).fadeToggle(2000, slide);
//                     })
//                 })
//             })
//         })
//     });
// }
// slide();

function slide() {
    $( ".trans_01" ).fadeToggle(2000, function(){
        $( ".trans_01" ).fadeToggle(2000, function(){
            $( ".trans_02" ).fadeToggle(2000, function(){
                $( ".trans_02" ).fadeToggle(2000, function(){
                    $( ".trans_03" ).fadeToggle(2000, function(){
                        $( ".trans_03" ).fadeToggle(2000, function(){
                            $( ".trans_04" ).fadeToggle(2000, function(){
                                $( ".trans_04" ).fadeToggle(2000, slide);
                            })
                        })
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

function changing() {
    // Selecciono el div #a y le hago un toggleClass de la clase hide, con una duración de 1000ms, y que ejecutará una función al acabar, y así sucesivamente.
    $('#a').toggleClass('slick-current slick-active', 5000, function() {
        // Con el $(this) estoy haciendo referencia al div #a previamente seleccionado, es lo mismo hacer $(this) que $('#a').
        $(this).toggleClass('slick-current slick-active', function() {
            $('#b').toggleClass('slick-current slick-active', 5000, function() {
                $(this).toggleClass('slick-current slick-active');
                $('#c').toggleClass('slick-current slick-active', 5000, function() {
                    $(this).toggleClass('slick-current slick-active');
                    // En la última parte de la lógica llamo a la propia función para que se ejecute en bucle. Aquí era donde estaba el error, lo he intentado con el delay() y el queue() pero no se ejecutaba en bucle, no me preguntes por qué.
                    // Total, que ahora puedes jugar como quieras con estos parámetros del toggleClass o del add y removeClass.
                    changing();
                })
            })
        });
    });
}

changing();

function changing__() {
    // Selecciono el div #a y le hago un toggleClass de la clase hide, con una duración de 1000ms, y que ejecutará una función al acabar, y así sucesivamente.
    $('.a').toggleClass('hide blabla', 5000, function() {
        // Con el $(this) estoy haciendo referencia al div #a previamente seleccionado, es lo mismo hacer $(this) que $('#a').
        $(this).toggleClass('hide blabla', function() {
            $('.b').toggleClass('hide blabla', 5000, function() {
                $(this).toggleClass('hide blabla');
                $('.c').toggleClass('hide blabla', 5000, function() {
                    $(this).toggleClass('hide blabla');
                    // En la última parte de la lógica llamo a la propia función para que se ejecute en bucle. Aquí era donde estaba el error, lo he intentado con el delay() y el queue() pero no se ejecutaba en bucle, no me preguntes por qué.
                    // Total, que ahora puedes jugar como quieras con estos parámetros del toggleClass o del add y removeClass.
                    changing();
                })
            })
        });
    });
}




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

// });
