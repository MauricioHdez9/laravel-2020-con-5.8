<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

//------------------------#10-RUTAS----------------------------
###########################################################################################
//Route::get ('esta es la ruta que definimos ',function( esta es la funcion que se ejecutara en la ruta que definimos)
// {
//     return "hola desde la pagina de incio";
// })
###########################################################################################
// //aprendible.com = route::get('/',function)
// //aprendible.com/contacto = route ::get('contacto',function)
// Route::get ('',function()
// {
//     return "hola desde la pagina de incio";
// })

// Route::get('contacto',function()
// {
//     return "hola desde la pagina de contacto";
// })

// Route::get()
// Route::post()
// Route::put()
// Route::patch()
// Route::delete()

// Route::get ('saludo/{nombre}',function($nombre)
// {
//     return "saludos".$nombre; 
//  });
###########################################################################################
// Route::get ('saludo/{nombre?}',function($nombre = "invitado")
// {hace referencia al nombre de la variable} 
// function($nombre = "invitado") // se expecifica el valor de la variable dentro de los parametro de la funcon  
###########################################################################################
// si no hay ningun nombre
// Route::get ('saludo/{nombre?}',function($nombre = "invitado")
// {
//     return "saludos". $nombre; 
// });
//------------------------#11-RUTAS CON NOMBRE----------------------------
// Route::get('contactame',function() //Route muestra la direccion "la url " todo esto es funcion de la urel ruta para este cuate 
// {
//     return "seccion de contactos";//seccion de el cuerpo del html aparece como texto 
// })->name('contactos');//darle un nombre para no estar cambiando el nombre en todas sus apariciones  
// Route::get('/',function()
// {
//    echo " <a href ='".route('contactos')."'>Contactos1</a><br>";    
//    echo " <a href ='".route('contactos')."'>Contactos2</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos3</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos4</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos5</a><br>";
// });
###########################################################################################
// Route::get('contactame',function()//explicacion de 20-24 
// {
//     return "seccion de contactos";//seccion de el cuerpo del html aparece como texto 
// })->name('contactos'); // forma de darle el nombre a la ruta   
// Route::get('/',function()
// {
//    echo " <a href ='".route('contactos') == se esta referiendo al nombre de la ruta al viajar con el link se mustrara la url(home/contactame.etc) que se definio = Route::get(**contactame**,function()// asi no importa el como sea la url el nombre se encarga de mostrar siempre sucontenido   ."'>Contactos1</a><br>";    
//    echo " <a href ='".route('contactos')."'>Contactos2</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos3</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos4</a><br>";
//    echo " <a href ='".route('contactos')."'>Contactos5</a><br>";
// });
###########################################################################################
//------------------- #12-vistas---y html con vistas---------------------------------------------------------------------------------------------- 

// Route::get('/', function()
// {
//   return view('welcome'); //welcome = se refiere al achivo de la carpeta views  es aceptado sin especificar direccion ni extenciones 
// }) -> name ('home');

// Route::get('/',function()
// {
//  $nombre ="jorge";
// //  return view('home')-> with('nombre',$nombre); // los parametros de with son los siguiente el primero es el nombre de la variable y el segundo es su valor en este caso gorge 
// //  return view('home')-> with(['nombre' => $nombre]);//se puede pasar como un arreglo
// //  return view('home',['nombre' => $nombre]);//o tambien asi 
// //  return view('home',compact('nombre'));//investigar que carajos hace esto 

// })->name('home');

// Route::view('/','home',['nombre' => 'mau']);
// Route::view('/','home');// recomendado para cosas que son secillas y no nesecitan pases de variable como politicas de privacidad, terminos y condiciones 
// Route::view('/','home')->name('home'); //version siplificada 
// Route::view('/','home')->name('home');////////##primer atributo es la ruta(url),'2° nombre de  la vista en la carpeta (views)'->( 3° nombre de la ruta(url) )
// Route::view('/about','about')->name('about');
// Route::view('/portafolio','portafolio')->name('portafolio');
// Route::view('/contact','contact')->name('contact');
//------------------- #14- esctrutura de control con blade------------------------------------------------------------------------------------------------- 
// $portafolio=[['title'=>'proyecto#1'],
//              ['title'=>'proyecto#2'],
// 			 ['title'=>'proyecto#3'],
// 			 ['title'=>'proyecto#4']];
// Route::view('/','home')->name('home');////////##primer atributo es la ruta(url),'2° nombre de  la vista en la carpeta (views)'->( 3° nombre de la ruta(url))
// Route::view('/about','about')->name('about');
// Route::view('/portafolio','portafolio')->name('portafolio');
// Route::view('/contact','contact')->name('contact');

// Route::view('/','home')->name('home');////////##primer atributo es la ruta(url),'2° nombre de  la vista en la carpeta (views)'->( 3° nombre de la ruta(url))
// Route::view('/about','about')->name('about');
// // Route::view('/portafolio','portafolio',compact('portafolio'))->name('portafolio');//compact  son las variables que puede usar las vistas 
// // Route::get('/portafolio','PortafolioController')->name('portafolio');//por cotrolador con el i en la migracion
// Route::get('/portafolio','PortafolioController@index')->name('portafolio');
// Route::view('/contact','contact')->name('contact');

// Route::view('/','home')->name('home');////////##primer atributo es la ruta(url),'2° nombre de  la vista en la carpeta (views)'->( 3° nombre de la ruta(url))
// Route::view('/about','about')->name('about');
// Route::get('/portafolio','PortafolioController@index')->name('portafolio');
// Route::view('/contact','contact')->name('contact');
 
// Route::resource('proyectos','PortafolioController');// forma simple de crear todos estos metodos en ves de crearlos uno * uno investigar para que son todos estos metodos que crea  
// Route::resource('proyectos','portafolioController');//resource= comando para crear todas las metodos de   un controlador =Route::resource('nombre del recurso"eso no ayuda "','nombre del controlador ')
// Route::resource('projects','portafolioController')->only(['index','show']);//only = solo mostrara los metodos escritos en el arreglo 
// Route::resource('projects','portafolioController')->except(['index','show'])//except =se mostraran todos los metodos menos los que esten en el arreglo 

Route::view('/','home')->name('home');////////##primer atributo es la ruta(url),'2° nombre de  la vista en la carpeta (views)'->( 3° nombre de la ruta(url))
Route::view('/about','about')->name('about');

Route::get('/portafolio','ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

Route::post('/portafolio','ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

Route::delete('/portafolio/{project}','ProjectController@destroy')->name('projects.destroy');



Route::view('/contact','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');
