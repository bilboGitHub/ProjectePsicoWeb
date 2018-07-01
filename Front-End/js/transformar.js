$(document).ready(function() {

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


//-------------------------------preus----------cards-------------------


function slide() {
    $( ".trans_01" ).fadeToggle(2500, function(){
        $( ".trans_01" ).fadeToggle(2500, function(){
            $( ".trans_02" ).fadeToggle(2500, function(){
                $( ".trans_02" ).fadeToggle(2500, function(){
                    $( ".trans_03" ).fadeToggle(2500, function(){
                        $( ".trans_03" ).fadeToggle(2500, function(){
                            $( ".trans_04" ).fadeToggle(2500, function(){
                                $( ".trans_04" ).fadeToggle(2500, slide);
                            })
                        })
                    })
                })
            })
        })
    });
}
slide();

function slide2() {
    $( ".trans_01" ).fadeToggle(2500, function(){
        $( ".trans_01" ).fadeToggle(2500, function(){
            $( ".trans_02" ).fadeToggle(2500, function(){
                $( ".trans_02" ).fadeToggle(2500, function(){
                    $( ".trans_03" ).fadeToggle(2500, function(){
                        $( ".trans_03" ).fadeToggle(2500, function(){
                            $( ".trans_04" ).fadeToggle(2500, function(){
                                $( ".trans_04" ).fadeToggle(2500, slide2);
                            })
                        })
                    })
                })
            })
        })
    });
}
// slide2();


// $(window).scroll(function(){
//     var pixels = $(window).scrollTop();
//     var pixelsF = -(pixels)/10;
//     $(".desplaçament_y").css({
//         transform: 'translateY(' + pixelsF + 'px)'
//     })
// });


var dimensio=$(document).width();
console.log(dimensio)

$(window).scroll(function(){
    var pixels = $(window).scrollTop();
    var pixelsF = -(pixels)*(dimensio/10000);
    $(".desplaçament_y").css({
        transform: 'translateY(' + pixelsF + 'px)'
    })
});

$(".canv_dime_ima1").css({
    "width": dimensio/2
})

$(".canv_dime_ima2").css({
    "width": dimensio/4
})


//-------------------------------flash----------banner-------------------


// $("figure").css('background', function () {
//     return $(this).data('color')
// });

// $(".tbc-banner").css('background', function () {
//     return $(this).data('color')
// });


// $(".tbc-banner").css('background', function () {
//     return $(this).data('color')
// });



// function canviaColor () {
//     $(".tbc-banner").css({
//         "background-color": "green"
//     });
// }



function canviaColor__() { //function name
    var color = '#'; // hexadecimal starting symbol
    var letters = ['f8ddc2','dfcda3','cfddbb','e8eff2','f6dbfc']; //Set your colors here
    color += letters[Math.floor(Math.random() * letters.length)];
    document.getElementById('posts').style.background = color; // Setting the random color on your div element.
}

function canviaColor () {
    $(".tbc-banner").css('background', function () {
        if ('background' === '#f8ddc2'){

        }
    });
}



// function nombreAleatori () {
//     var number =  Math.floor(Math.random() * (5 - 1)) + 1;
//     return number;
// }



// function colorAleatori () {
//     var color = "#" + Math.floor(Math.random()*16777215).toString(16);
//     return color;
// }

// console.log(colorAleatori());

// function changeColor (){
//     document.getElementById("color1").style.backgroundColor = colorAleatori ();
// };



function canviaColor() { 
    var color = '#';
    var letters = ['f8ddc2','dfcda3','cfddbb','e8eff2','f6dbfc','ffdce7','facad8','ffe6ca','e0dcd5'];
    color += letters[Math.floor(Math.random() * letters.length)];
    document.getElementById('color1').style.background = color; 
}


function canviaMissatge () {
    var paraula = document.getElementById("missatge1");
    if (paraula.innerHTML == "S'HA TRENCAT LA CONFIANÇA"){
        paraula.innerHTML = "PERDUA DE PES SOBTADA";
    }
    else if (paraula.innerHTML == "PERDUA DE PES SOBTADA") {
        paraula.innerHTML = "PROBLEMES DE CONCENTRACIO, ATENCIO, MEMORIA";
    }
    else if (paraula.innerHTML == "PROBLEMES DE CONCENTRACIO, ATENCIO, MEMORIA") {
        paraula.innerHTML = "COMPORTAMENT AGRESSIU, DESTRUCTIU O ENGANYOS";
    }
    else if (paraula.innerHTML == "COMPORTAMENT AGRESSIU, DESTRUCTIU O ENGANYOS") {
        paraula.innerHTML = "SI ESTAS PREOCUPAT, NO ESPEREU";
    }
    else if (paraula.innerHTML == "SI ESTAS PREOCUPAT, NO ESPEREU") {
        paraula.innerHTML = "S'HA TRENCAT LA CONFIANÇA";
    }
}
function canviaTractament () {
    var paraula = document.getElementById("tractament1");
    if (paraula.innerHTML == "Teràpia de Parella"){
        paraula.innerHTML = "Trastorns Alimentaris";
    }
    else if (paraula.innerHTML == "Trastorns Alimentaris") {
        paraula.innerHTML = "Trastorn del Son";
    }
    else if (paraula.innerHTML == "Trastorn del Son") {
        paraula.innerHTML = "Trastorn de Conducta";
    }
    else if (paraula.innerHTML == "Trastorn de Conducta") {
        paraula.innerHTML = "Trastorns de l’Aprenentatge";
    }
    else if (paraula.innerHTML == "Trastorns de l’Aprenentatge") {
        paraula.innerHTML = "Teràpia de Parella";
    }
}

function canviaDireccio () {
    var direccio = document.getElementById("direccio1");
    if (direccio.href == "Front-End/03_parelles.html"){
        direccio.href = "Front-End/03_adolescents.html";
    }
    else if (direccio.href == "Front-End/03_adolescents.html") {
        direccio.href = "Front-End/03_adults.html";
    }
    else if (direccio.href == "Front-End/03_adults.html") {
        direccio.href = "Front-End/03_adolescents.html";
    }
    else if (direccio.href == "Front-End/03_adolescents.html") {
        direccio.href = "Front-End/03_infantil.html";
    }
    else if (direccio.href == "Front-End/03_infantil.html") {
        direccio.href = "Front-End/03_parelles.html";
    }
}



function canviaTot () {
    canviaMissatge();
    canviaTractament();
    canviaDireccio();
    canviaColor();
}
setInterval(canviaTot, 4000);


//-------------------------veil-------------header

$(window).scroll(function(){
    var pixelss = $(window).scrollTop();
    $(".veil").css({
        "max-height": pixelss
    })
});


// $('bla1').hover(
//     function(){ $(this).addClass('bla2') },
//     function(){ $(this).removeClass('bla2') }
// )

$('#showTractament').hover(
    function(){ $('#shop').addClass('shown') },
    function(){ $('#shop').removeClass('shown') }
)

$('#showTractament').hover(
    function(){ $('body').addClass('show-drop') },
    function(){ $('body').removeClass('show-drop') }
)

$('#shop').hover(
    function(){ $(this).addClass('shown') },
    function(){ $(this).removeClass('shown') }
)

$('#shop').hover(
    function(){ $(this).addClass('show-drop') },
    function(){ $(this).removeClass('show-drop') }
)




// function flashcolor() {
//     $( ".flash_01" ).fadeToggle(1000, function(){
//         $( ".flash_01" ).fadeToggle(1000, function(){
//             $( ".flash_02" ).fadeToggle(1000, function(){
//                 $( ".flash_02" ).fadeToggle(1000, function(){
//                     $( ".flash_03" ).fadeToggle(1000, function(){
//                         $( ".flash_03" ).fadeToggle(1000, flashcolor);
//                     })
//                 })
//             })
//         })
//     });
// }
// flashcolor();

// function flashcolor() {
//     $( ".flash_01" ).fadeToggle(1000, function(){
//         $( ".flash_01" ).fadeToggle(1000, function(){
//             $( ".flash_02" ).fadeToggle(1000, function(){
//                 $( ".flash_02" ).fadeToggle(1000, function(){
//                     $( ".flash_03" ).fadeToggle(1000, function(){
//                         $( ".flash_03" ).fadeToggle(1000, function(){
//                             $( ".flash_04" ).fadeToggle(1000, function(){
//                                 $( ".flash_04" ).fadeToggle(1000, function(){
//                                     $( ".flash_05" ).fadeToggle(1000, function(){
//                                         $( ".flash_05" ).fadeToggle(1000, function(){
//                                             $( ".flash_06" ).fadeToggle(1000, function(){
//                                                 $( ".flash_06" ).fadeToggle(1000, flashcolor);
//                                             })
//                                         })
//                                     })
//                                 })

//                             })
//                         })
//                     })
//                 })
//             })
//         })
//     });
// }
// flashcolor();



//-------------------------------flash----------hero-------------------

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

});
