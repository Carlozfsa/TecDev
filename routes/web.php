<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Foda;
use App\Linea;
use Illuminate\Http\Request;
use App\User;
use App\Tutor;

Route::get('/', function () {
    return view('welcome');
});


Route::get('actPanel', 'ActivitiesController@index');

Route::delete('/eliminarActividad/{id}','ActivitiesController@destroy')->name('destroyActivity');


Route::get('/arsj', function(Request $request){

    $s = [
        "edad" => [
            "user2","user3","user4"
        ],
        "evento" => [
            "user2@gmail.com","user3@gmail.com","user4@gmail.com"
        ],
        "nivel" => [
            "90352065","69856352","903520658"
        ]
    ];





    return '';
    //return $a['edad'][0];



//     $t = Tutor::find(12345678);
//
//     $t->user->update(['is_active'=>9]);

//     $r = Tutor::all();
//
//     foreach($r as $r2){
//         echo $r2->user->is_active;
//     }


//$forts = '{"0":"soy bueno hablandp", "1":"me gusta aprender", "2":"", "3":"soy chido"}';
//$decode =  json_decode($forts, true);
//
//echo $forts;

//$decode['1'] = 'soy seguro de mi mismo';

//$data = array('4'=>'SEEEE');

//$new_data = json_encode($data);
 //$y = array_push($decode, $data);

//echo json_encode($y);

//echo '<h2>Fortalezas</h2>';
//
//foreach($decode as $key=>$value){
//    if(!$value==""){
//        echo  $value.'<br>';
//    }
//}

});

Route::get('fodaArray', function(){


//    $forts = array('1'=>'mega', '2'=>'hiper', '3'=>'deportes');
//    $forts2 = array_push(json_encode($forts), array('4'=>'y lo demas'));
//    $forts_encode = json_encode($forts2);
//    Foda::create(['user_id'=>4, 'fortalezas'=>$forts_encode, 'oportunidades'=>'jajajaj']);
//
//
//
//    $user_forts = Foda::where('user_id', 3)->first();
//
//
//    $user_forts_decode = json_decode($user_forts->fortalezas);
//
//    foreach($user_forts_decode as $key=>$value){
//        echo $key.' '.$value.'<br>';
//    }

    $a=array();
    $i=1;

for(;;){
        $a[$i]='dsds';
        $i++;
        if($i==10){
            break;
        }
}
    echo json_encode($a);

});




////*********ACTIVIDAD 0 --LINEA DEL TIEMPO--**********////
Route::get('/linea_tiempo', 'LineasController@create_lineas');

Route::post('/store/linea_tiempo', 'LineasController@store');

Route::post('/edit/linea_tiempo', 'LineasController@edit');

////*********ACTIVIDAD 1 --FODA--**********////

////*********FORTALEZAS**********////
///
Route::group(['middleware'=>'Avances'], function() {

    Route::get('/foda_1_1', 'FodaController@create_f1');
    Route::get('/foda_1_2', 'FodaController@create_f2');
    Route::get('/foda_1_3', 'FodaController@create_f3');
    Route::get('/foda_1_4', 'FodaController@create_f4');

});

Route::post('/store/foda_1_1', 'FodaController@store_f1');
Route::post('/store/foda_1_2', 'FodaController@store_f2');
Route::post('/store/foda_1_3', 'FodaController@store_f3');
Route::post('/store/foda_1_4', 'FodaController@store_f4');

Route::post('/edit/foda_1_1', 'FodaController@edit_f1');
Route::post('/edit/foda_1_2', 'FodaController@edit_f2');
Route::post('/edit/foda_1_3', 'FodaController@edit_f3');
Route::post('/edit/foda_1_4', 'FodaController@edit_f4');


////*********DEBILIDADES**********////
Route::get('/foda_2_1', 'FodaController@create_d1');
Route::get('/foda_2_2', 'FodaController@create_d2');
Route::get('/foda_2_3', 'FodaController@create_d3');
Route::get('/foda_2_4', 'FodaController@create_d4');

Route::post('/store/foda_2_1', 'FodaController@store_d1');
Route::post('/store/foda_2_2', 'FodaController@store_d2');
Route::post('/store/foda_2_3', 'FodaController@store_d3');
Route::post('/store/foda_2_4', 'FodaController@store_d4');

Route::post('/edit/foda_2_1', 'FodaController@edit_d1');
Route::post('/edit/foda_2_2', 'FodaController@edit_d2');
Route::post('/edit/foda_2_3', 'FodaController@edit_d3');
Route::post('/edit/foda_2_4', 'FodaController@edit_d4');


////*********AMENAZAS**********////
Route::get('/foda_3_1', 'FodaController@create_a1');
Route::get('/foda_3_2', 'FodaController@create_a2');
Route::get('/foda_3_3', 'FodaController@create_a3');
Route::get('/foda_3_4', 'FodaController@create_a4');
Route::get('/foda_3_5', 'FodaController@create_a5');


Route::post('/store/foda_3_1', 'FodaController@store_a1');
Route::post('/store/foda_3_2', 'FodaController@store_a2');
Route::post('/store/foda_3_3', 'FodaController@store_a3');
Route::post('/store/foda_3_4', 'FodaController@store_a4');
Route::post('/store/foda_3_5', 'FodaController@store_a5');

Route::post('/edit/foda_3_1', 'FodaController@edit_a1');
Route::post('/edit/foda_3_2', 'FodaController@edit_a2');
Route::post('/edit/foda_3_3', 'FodaController@edit_a3');
Route::post('/edit/foda_3_4', 'FodaController@edit_a4');
Route::post('/edit/foda_3_5', 'FodaController@edit_a5');


////*********OPORTUNIDADES**********////
Route::get('/foda_4_1', 'FodaController@create_o1');
Route::get('/foda_4_2', 'FodaController@create_o2');
Route::get('/foda_4_3', 'FodaController@create_o3');
Route::get('/foda_4_4', 'FodaController@create_o4');


Route::post('/store/foda_4_1', 'FodaController@store_o1');
Route::post('/store/foda_4_2', 'FodaController@store_o2');
Route::post('/store/foda_4_3', 'FodaController@store_o3');
Route::post('/store/foda_4_4', 'FodaController@store_o4');

Route::post('/edit/foda_4_1', 'FodaController@edit_o1');
Route::post('/edit/foda_4_2', 'FodaController@edit_o2');
Route::post('/edit/foda_4_3', 'FodaController@edit_o3');
Route::post('/edit/foda_4_4', 'FodaController@edit_o4');


////*********RESUMEN**********////

Route::get('/foda_r', 'FodaController@create_r');

Route::post('/store/foda_r', 'FodaController@store_r');



////*********ACTIVIDAD 2 --TIEMPO--**********////

/// ********* LECTURAS ********* ////

Route::get('/tiempo_l_1', 'TiempoController@create_l_t1');
Route::get('/tiempo_l_2', 'TiempoController@create_l_t2');
Route::get('/tiempo_l_3', 'TiempoController@create_l_t3');
Route::get('/tiempo_l_4', 'TiempoController@create_l_t4');


Route::get('/tiempo_ej_1', 'TiempoController@create_t1');
Route::get('/tiempo_ej_2', 'TiempoController@create_t2');
Route::get('/tiempo_ej_3', 'TiempoController@create_t3');
Route::get('/tiempo_ej_4', 'TiempoController@create_t4');
Route::get('/tiempo_ej_5', 'TiempoController@create_t5');
Route::get('/tiempo_ej_6', 'TiempoController@create_t6');
Route::get('/tiempo_ej_7', 'TiempoController@create_t7');
Route::get('/tiempo_ej_8', 'TiempoController@create_t8');
Route::get('/tiempo_ej_f', 'TiempoController@create_tf');


Route::post('/store/tiempo_ej_2', 'TiempoController@store_t1_2');
Route::post('/store/tiempo_ej_3', 'TiempoController@store_t1_3');
Route::post('/store/tiempo_ej_4', 'TiempoController@store_t1_4');
Route::post('/store/tiempo_ej_5', 'TiempoController@store_t1_5');
Route::post('/store/tiempo_ej_6', 'TiempoController@store_t1_6');
Route::post('/store/tiempo_ej_7', 'TiempoController@store_t1_7');
Route::post('/store/tiempo_ej_8', 'TiempoController@store_t1_8');

Route::post('/edit/tiempo_ej_2', 'TiempoController@edit_t1_2');
Route::post('/edit/tiempo_ej_3', 'TiempoController@edit_t1_3');
Route::post('/edit/tiempo_ej_4', 'TiempoController@edit_t1_4');
Route::post('/edit/tiempo_ej_5', 'TiempoController@edit_t1_5');
Route::post('/edit/tiempo_ej_6', 'TiempoController@edit_t1_6');
Route::post('/edit/tiempo_ej_7', 'TiempoController@edit_t1_7');
Route::post('/edit/tiempo_ej_8', 'TiempoController@edit_t1_8');




Route::get('/tiempo_ej_2_1', 'TiempoController@create_t2_1');
Route::get('/tiempo_ej_2_2', 'TiempoController@create_t2_2');
Route::get('/tiempo_ej_2_3', 'TiempoController@create_t2_3');
Route::get('/tiempo_ej_2_4', 'TiempoController@create_t2_4');
Route::get('/tiempo_ej_2_5', 'TiempoController@create_t2_5');
Route::get('/tiempo_ej_2_6', 'TiempoController@create_t2_6');
Route::get('/tiempo_ej_2_7', 'TiempoController@create_t2_7');
Route::get('/tiempo_ej_2_8', 'TiempoController@create_t2_8');

Route::post('/store/tiempo_ej_2_2', 'TiempoController@store_t2_2');
Route::post('/store/tiempo_ej_2_3', 'TiempoController@store_t2_3');
Route::post('/store/tiempo_ej_2_4', 'TiempoController@store_t2_4');
Route::post('/store/tiempo_ej_2_5', 'TiempoController@store_t2_5');
Route::post('/store/tiempo_ej_2_6', 'TiempoController@store_t2_6');
Route::post('/store/tiempo_ej_2_7', 'TiempoController@store_t2_7');
Route::post('/store/tiempo_ej_2_8', 'TiempoController@store_t2_8');


Route::post('/edit/tiempo_ej_2_2', 'TiempoController@edit_t2_2');
Route::post('/edit/tiempo_ej_2_3', 'TiempoController@edit_t2_3');
Route::post('/edit/tiempo_ej_2_4', 'TiempoController@edit_t2_4');
Route::post('/edit/tiempo_ej_2_5', 'TiempoController@edit_t2_5');
Route::post('/edit/tiempo_ej_2_6', 'TiempoController@edit_t2_6');
Route::post('/edit/tiempo_ej_2_7', 'TiempoController@edit_t2_7');
Route::post('/edit/tiempo_ej_2_8', 'TiempoController@edit_t2_8');


////*********ACTIVIDAD 3 --SER HUMANO INTEGRAL--**********////

/// ********* LECTURAS ********* ////
Route::get('/hum_int_l_1', 'HumanointegralController@create_hum_l_1');
Route::get('/hum_int_l_2', 'HumanointegralController@create_hum_l_2');


Route::get('/hum_int_ej_1', 'HumanointegralController@create_hum_int_1');

Route::post('/store/hum_int_ej_1', 'HumanointegralController@store_hum_int_ej_1');

Route::post('/edit/hum_int_ej_1', 'HumanointegralController@edit_hum_int_ej_1');


////*********ACTIVIDAD 4 --DESARROLLO HUMANO INTEGRAL--**********////

/// ********* LECTURAS ********* ////
Route::get('/des_hum_int_l_1', 'DesarrolloHumanoController@create_des_hum_l_1');
Route::get('/des_hum_int_l_2', 'DesarrolloHumanoController@create_des_hum_l_2');
Route::get('/des_hum_int_l_3', 'DesarrolloHumanoController@create_des_hum_l_3');
Route::get('/des_hum_int_l_4', 'DesarrolloHumanoController@create_des_hum_l_4');
Route::get('/des_hum_int_l_5', 'DesarrolloHumanoController@create_des_hum_l_5');
Route::get('/des_hum_int_l_6', 'DesarrolloHumanoController@create_des_hum_l_6');
Route::get('/des_hum_int_l_7', 'DesarrolloHumanoController@create_des_hum_l_7');
Route::get('/des_hum_int_l_8', 'DesarrolloHumanoController@create_des_hum_l_8');
Route::get('/des_hum_int_l_9', 'DesarrolloHumanoController@create_des_hum_l_9');
Route::get('/des_hum_int_l_10', 'DesarrolloHumanoController@create_des_hum_l_10');
Route::get('/des_hum_int_l_11', 'DesarrolloHumanoController@create_des_hum_l_11');
Route::get('/des_hum_int_l_12', 'DesarrolloHumanoController@create_des_hum_l_12');
Route::get('/des_hum_int_l_13', 'DesarrolloHumanoController@create_des_hum_l_13');
Route::get('/des_hum_int_l_14', 'DesarrolloHumanoController@create_des_hum_l_14');


Route::get('/des_hum_int_ej_1', 'DesarrolloHumanoController@create_des_hum_int_1');
Route::get('/des_hum_int_ej_2', 'DesarrolloHumanoController@create_des_hum_int_2');
Route::get('/des_hum_int_ej_3', 'DesarrolloHumanoController@create_des_hum_int_3');
Route::get('/des_hum_int_ej_4', 'DesarrolloHumanoController@create_des_hum_int_4');
Route::get('/des_hum_int_ej_5', 'DesarrolloHumanoController@create_des_hum_int_5');
Route::get('/des_hum_int_ej_6', 'DesarrolloHumanoController@create_des_hum_int_6');

Route::post('/store/des_hum_int_ej_1', 'DesarrolloHumanoController@store_des_hum_int_1');
Route::post('/store/des_hum_int_ej_2', 'DesarrolloHumanoController@store_des_hum_int_2');
Route::post('/store/des_hum_int_ej_3', 'DesarrolloHumanoController@store_des_hum_int_3');
Route::post('/store/des_hum_int_ej_4', 'DesarrolloHumanoController@store_des_hum_int_4');
Route::post('/store/des_hum_int_ej_5', 'DesarrolloHumanoController@store_des_hum_int_5');
Route::post('/store/des_hum_int_ej_6', 'DesarrolloHumanoController@store_des_hum_int_6');

Route::post('/edit/des_hum_int_ej_1', 'DesarrolloHumanoController@edit_des_hum_int_1');
Route::post('/edit/des_hum_int_ej_2', 'DesarrolloHumanoController@edit_des_hum_int_2');
Route::post('/edit/des_hum_int_ej_3', 'DesarrolloHumanoController@edit_des_hum_int_3');
Route::post('/edit/des_hum_int_ej_4', 'DesarrolloHumanoController@edit_des_hum_int_4');
Route::post('/edit/des_hum_int_ej_5', 'DesarrolloHumanoController@edit_des_hum_int_5');
Route::post('/edit/des_hum_int_ej_6', 'DesarrolloHumanoController@edit_des_hum_int_6');

////*********ACTIVIDAD 5 --INTELIGENCIAS MULTIPLES--**********////

/// ********* LECTURAS ********* ////
Route::get('/int_mult_l_1', 'InteligenciaController@create_int_mult_l_1');
Route::get('/int_mult_l_2', 'InteligenciaController@create_int_mult_l_2');
Route::get('/int_mult_l_3', 'InteligenciaController@create_int_mult_l_3');


Route::get('/int_mult_ej_1', 'InteligenciaController@create_int_mult_ej_1');
Route::get('/int_mult_ej_2', 'InteligenciaController@create_int_mult_ej_2');
Route::get('/int_mult_ej_3', 'InteligenciaController@create_int_mult_ej_3');
Route::get('/int_mult_ej_4', 'InteligenciaController@create_int_mult_ej_4');
Route::get('/int_mult_ej_res', 'InteligenciaController@create_int_mult_res');

Route::post('/store/int_mult_ej_1', 'InteligenciaController@store_int_mult_ej_1');
Route::post('/store/int_mult_ej_2', 'InteligenciaController@store_int_mult_ej_2');
Route::post('/store/int_mult_ej_3', 'InteligenciaController@store_int_mult_ej_3');
Route::post('/store/int_mult_ej_4', 'InteligenciaController@store_int_mult_ej_4');

Route::post('/edit/int_mult_ej_1', 'InteligenciaController@edit_int_mult_ej_1');
Route::post('/edit/int_mult_ej_2', 'InteligenciaController@edit_int_mult_ej_2');
Route::post('/edit/int_mult_ej_3', 'InteligenciaController@edit_int_mult_ej_3');
Route::post('/edit/int_mult_ej_4', 'InteligenciaController@edit_int_mult_ej_4');

////*********ACTIVIDAD 6 --HABILIDADES DE ESTUDIO--**********////

/// ********* LECTURAS ********* ////
Route::get('/hab_est_l_1', 'HabilidadsController@create_hab_est_l_1');
Route::get('/hab_est_l_2', 'HabilidadsController@create_hab_est_l_2');
Route::get('/hab_est_l_3', 'HabilidadsController@create_hab_est_l_3');


Route::get('/hab_est_1', 'HabilidadsController@create_hab_est_1');

Route::post('/store/hab_est_1', 'HabilidadsController@store_hab_est_1');

Route::post('/edit/hab_est_1', 'HabilidadsController@edit_hab_est_1');

////*********ACTIVIDAD 7 --MEMORIA--**********////

/// ********* LECTURAS ********* ////
Route::get('/mem_l_1', 'MemoriasController@create_mem_l_1');
Route::get('/mem_l_2', 'MemoriasController@create_mem_l_2');


Route::get('/mem_1', 'MemoriasController@create_mem_1');
Route::get('/mem_2', 'MemoriasController@create_mem_2');
Route::get('/mem_3', 'MemoriasController@create_mem_3');
Route::get('/mem_4', 'MemoriasController@create_mem_4');


Route::post('/store/mem_1', 'MemoriasController@store_mem_1');
Route::post('/store/mem_2', 'MemoriasController@store_mem_2');
Route::post('/store/mem_3', 'MemoriasController@store_mem_3');
Route::post('/store/mem_4', 'MemoriasController@store_mem_4');


Route::post('/edit/mem_1', 'MemoriasController@edit_mem_1');
Route::post('/edit/mem_2', 'MemoriasController@edit_mem_2');
Route::post('/edit/mem_3', 'MemoriasController@edit_mem_3');
Route::post('/edit/mem_4', 'MemoriasController@edit_mem_4');

////*********ACTIVIDAD 8 --PENSAMIENTO--**********////

/// ********* LECTURAS ********* ////
Route::get('/pens_l_1', 'PensamientosController@create_pens_l_1');
Route::get('/pens_l_2', 'PensamientosController@create_pens_l_2');
Route::get('/pens_l_3', 'PensamientosController@create_pens_l_3');
Route::get('/pens_l_4', 'PensamientosController@create_pens_l_4');


Route::get('/pens_1', 'PensamientosController@create_pens_1');
Route::get('/pens_2', 'PensamientosController@create_pens_2');
Route::get('/pens_3', 'PensamientosController@create_pens_3');
Route::get('/pens_4', 'PensamientosController@create_pens_4');
Route::get('/pens_5', 'PensamientosController@create_pens_5');


Route::post('/store/pens_1', 'PensamientosController@store_pens_1');
Route::post('/store/pens_3', 'PensamientosController@store_pens_3');
Route::post('/store/pens_4', 'PensamientosController@store_pens_4');
Route::post('/store/pens_5', 'PensamientosController@store_pens_5');

Route::post('/edit/pens_1', 'PensamientosController@edit_pens_1');
Route::post('/edit/pens_3', 'PensamientosController@edit_pens_3');
Route::post('/edit/pens_4', 'PensamientosController@edit_pens_4');
Route::post('/edit/pens_5', 'PensamientosController@edit_pens_5');


////*********ACTIVIDAD 9 --MAPA MENTAL Y CONCEPTUAL--**********////
/// ********* LECTURAS ********* ////

Route::get('/mapas_l_1', 'MapasController@create_mapas_l_1');
Route::get('/mapas_l_2', 'MapasController@create_mapas_l_2');
Route::get('/mapas_l_3', 'MapasController@create_mapas_l_3');
Route::get('/mapas_l_4', 'MapasController@create_mapas_l_4');
Route::get('/mapas_l_5', 'MapasController@create_mapas_l_5');
Route::get('/mapas_l_6', 'MapasController@create_mapas_l_6');


Route::get('/mapas_1', 'MapasController@create_mapas_1');

Route::post('/store/mapas_1', 'MapasController@store');

Route::post('/edit/mapas_1', 'MapasController@edit');

////*********ACTIVIDAD 10 --ESQUEMA Y CUADRO COMPARATIVO--**********////
/// ********* LECTURAS ********* ////
Route::get('/esq_l_1', 'EsquemasController@create_esqs_l_1');
Route::get('/esq_l_2', 'EsquemasController@create_esqs_l_2');


Route::get('/esq_1', 'EsquemasController@create_esqs_1');
Route::get('/esq_2', 'EsquemasController@create_esqs_2');

Route::post('/store/esq_1', 'EsquemasController@store_esqs_1');
Route::post('/store/esq_2', 'EsquemasController@store_esqs_2');

Route::post('/edit/esq_1', 'EsquemasController@edit_esqs_1');
Route::post('/edit/esq_2', 'EsquemasController@edit_esqs_2');

////*********ACTIVIDAD 11 --RESUMEN Y ENSAYO--**********////
/// ********* LECTURAS ********* ////

Route::get('/ens_l_1', 'EnsayosController@create_ens_l_1');
Route::get('/ens_l_2', 'EnsayosController@create_ens_l_2');
Route::get('/ens_l_3', 'EnsayosController@create_ens_l_3');


Route::get('/ens_1', 'EnsayosController@create_ens_1');

Route::post('/store/ens_1', 'EnsayosController@store_ens_1');

Route::post('/edit/ens_1', 'EnsayosController@edit_ens_1');


////*********ACTIVIDAD 12 --MATEMATICAS--**********////
/// ********* LECTURAS ********* ////
Route::get('/mat_l_1', 'MatsController@create_mat_l_1');
Route::get('/mat_l_2', 'MatsController@create_mat_l_2');


Route::get('/mat_1', 'MatsController@create_mat_1');
Route::get('/mat_2', 'MatsController@create_mat_2');


Route::post('/store/mat_1', 'MatsController@store_mat_1');
Route::post('/store/mat_2', 'MatsController@store_mat_2');

Route::post('/edit/mat_1', 'MatsController@edit_mat_1');
Route::post('/edit/mat_2', 'MatsController@edit_mat_2');


////*********ACTIVIDAD 13 --INFERENCIAS LÓGICAS--**********////
/// ********* LECTURAS ********* ////
/// N/A

Route::get('/inf_1', 'InferenciasController@create_inf_1');
Route::get('/inf_2', 'InferenciasController@create_inf_2');

Route::post('/store/inf_1', 'InferenciasController@store_inf_1');
Route::post('/store/inf_2', 'InferenciasController@store_inf_2');

Route::post('/edit/inf_1', 'InferenciasController@edit_inf_1');
Route::post('/edit/inf_2', 'InferenciasController@edit_inf_2');


////*********ACTIVIDAD 14 --RELACIÓN Y SIMBLOLIZACIÓN--**********////
/// ********* LECTURAS ********* ////
/// N/A

Route::get('/rel_sim_1', 'RelacionsController@create_rel_sim_1');
Route::get('/rel_sim_2', 'RelacionsController@create_rel_sim_2');
Route::get('/rel_sim_3', 'RelacionsController@create_rel_sim_3');
Route::get('/rel_sim_4', 'RelacionsController@create_rel_sim_4');
Route::get('/rel_sim_5', 'RelacionsController@create_rel_sim_5');

Route::post('/store/rel_sim_1', 'RelacionsController@store_rel_sim_1');
Route::post('/store/rel_sim_2', 'RelacionsController@store_rel_sim_2');
Route::post('/store/rel_sim_3', 'RelacionsController@store_rel_sim_3');
Route::post('/store/rel_sim_4', 'RelacionsController@store_rel_sim_4');
Route::post('/store/rel_sim_5', 'RelacionsController@store_rel_sim_5');

Route::post('/edit/rel_sim_1', 'RelacionsController@edit_rel_sim_1');
Route::post('/edit/rel_sim_2', 'RelacionsController@edit_rel_sim_2');
Route::post('/edit/rel_sim_3', 'RelacionsController@edit_rel_sim_3');
Route::post('/edit/rel_sim_4', 'RelacionsController@edit_rel_sim_4');
Route::post('/edit/rel_sim_5', 'RelacionsController@edit_rel_sim_5');


//Route::group(['middleware'=>'Tutores'], function() {

////*********TUTOR ACTIVIDAD  0 --Linea de tiempo--*******************////
Route::get('/tutor_linea', 'TutorLinea@create_linea');
Route::post('/store/tutor_linea', 'TutorLinea@store_linea');
Route::post('/edit/tutor_linea', 'TutorLinea@edit_linea');

////*********TUTOR ACTIVIDAD 1 --FODA--*******************////
    Route::get('/tutor_foda_1_1', 'TutorFodaController@create_f1');
    Route::get('/tutor_foda_1_2', 'TutorFodaController@create_f2');
    Route::get('/tutor_foda_1_3', 'TutorFodaController@create_f3');
    Route::get('/tutor_foda_1_4', 'TutorFodaController@create_f4');


    Route::post('/store/tutor_foda_1_1', 'TutorFodaController@store_f1');
    Route::post('/store/tutor_foda_1_2', 'TutorFodaController@store_f2');
    Route::post('/store/tutor_foda_1_3', 'TutorFodaController@store_f3');
    Route::post('/store/tutor_foda_1_4', 'TutorFodaController@store_f4');

    Route::post('/edit/tutor_foda_1_1', 'TutorFodaController@edit_f1');
    Route::post('/edit/tutor_foda_1_2', 'TutorFodaController@edit_f2');
    Route::post('/edit/tutor_foda_1_3', 'TutorFodaController@edit_f3');
    Route::post('/edit/tutor_foda_1_4', 'TutorFodaController@edit_f4');


    Route::get('/tutor_foda_2_1', 'TutorFodaController@create_d1');
    Route::get('/tutor_foda_2_2', 'TutorFodaController@create_d2');
    Route::get('/tutor_foda_2_3', 'TutorFodaController@create_d3');
    Route::get('/tutor_foda_2_4', 'TutorFodaController@create_d4');

    Route::post('/store/tutor_foda_2_1', 'TutorFodaController@store_d1');
    Route::post('/store/tutor_foda_2_2', 'TutorFodaController@store_d2');
    Route::post('/store/tutor_foda_2_3', 'TutorFodaController@store_d3');
    Route::post('/store/tutor_foda_2_4', 'TutorFodaController@store_d4');

    Route::post('/edit/tutor_foda_2_1', 'TutorFodaController@edit_d1');
    Route::post('/edit/tutor_foda_2_2', 'TutorFodaController@edit_d2');
    Route::post('/edit/tutor_foda_2_3', 'TutorFodaController@edit_d3');
    Route::post('/edit/tutor_foda_2_4', 'TutorFodaController@edit_d4');


    Route::get('/tutor_foda_3_1', 'TutorFodaController@create_a1');
    Route::get('/tutor_foda_3_2', 'TutorFodaController@create_a2');
    Route::get('/tutor_foda_3_3', 'TutorFodaController@create_a3');
    Route::get('/tutor_foda_3_4', 'TutorFodaController@create_a4');
    Route::get('/tutor_foda_3_5', 'TutorFodaController@create_a5');

    Route::post('/store/tutor_foda_3_1', 'TutorFodaController@store_a1');
    Route::post('/store/tutor_foda_3_2', 'TutorFodaController@store_a2');
    Route::post('/store/tutor_foda_3_3', 'TutorFodaController@store_a3');
    Route::post('/store/tutor_foda_3_4', 'TutorFodaController@store_a4');
    Route::post('/store/tutor_foda_3_5', 'TutorFodaController@store_a5');

    Route::post('/edit/tutor_foda_3_1', 'TutorFodaController@edit_a1');
    Route::post('/edit/tutor_foda_3_2', 'TutorFodaController@edit_a2');
    Route::post('/edit/tutor_foda_3_3', 'TutorFodaController@edit_a3');
    Route::post('/edit/tutor_foda_3_4', 'TutorFodaController@edit_a4');
    Route::post('/edit/tutor_foda_3_5', 'TutorFodaController@edit_a5');


    Route::get('/tutor_foda_4_1', 'TutorFodaController@create_o1');
    Route::get('/tutor_foda_4_2', 'TutorFodaController@create_o2');
    Route::get('/tutor_foda_4_3', 'TutorFodaController@create_o3');
    Route::get('/tutor_foda_4_4', 'TutorFodaController@create_o4');


    Route::post('/store/tutor_foda_4_1', 'TutorFodaController@store_o1');
    Route::post('/store/tutor_foda_4_2', 'TutorFodaController@store_o2');
    Route::post('/store/tutor_foda_4_3', 'TutorFodaController@store_o3');
    Route::post('/store/tutor_foda_4_4', 'TutorFodaController@store_o4');

    Route::post('/edit/tutor_foda_4_1', 'TutorFodaController@edit_o1');
    Route::post('/edit/tutor_foda_4_2', 'TutorFodaController@edit_o2');
    Route::post('/edit/tutor_foda_4_3', 'TutorFodaController@edit_o3');
    Route::post('/edit/tutor_foda_4_4', 'TutorFodaController@edit_o4');


//});


////*********TUTOR ACTIVIDAD 2 --ADMON TIEMPO--*******************////
Route::get('/tutor_tiempo_ej_2', 'TutorTiempoController@create_t2');
Route::get('/tutor_tiempo_ej_3', 'TutorTiempoController@create_t3');
Route::get('/tutor_tiempo_ej_4', 'TutorTiempoController@create_t4');
Route::get('/tutor_tiempo_ej_5', 'TutorTiempoController@create_t5');
Route::get('/tutor_tiempo_ej_6', 'TutorTiempoController@create_t6');
Route::get('/tutor_tiempo_ej_7', 'TutorTiempoController@create_t7');
Route::get('/tutor_tiempo_ej_8', 'TutorTiempoController@create_t8');

Route::post('/store/tutor_tiempo_ej_2', 'TutorTiempoController@store_t2');
Route::post('/store/tutor_tiempo_ej_3', 'TutorTiempoController@store_t3');
Route::post('/store/tutor_tiempo_ej_4', 'TutorTiempoController@store_t4');
Route::post('/store/tutor_tiempo_ej_5', 'TutorTiempoController@store_t5');
Route::post('/store/tutor_tiempo_ej_6', 'TutorTiempoController@store_t6');
Route::post('/store/tutor_tiempo_ej_7', 'TutorTiempoController@store_t7');
Route::post('/store/tutor_tiempo_ej_8', 'TutorTiempoController@store_t8');

Route::post('/edit/tutor_tiempo_ej_2', 'TutorTiempoController@edit_t2');
Route::post('/edit/tutor_tiempo_ej_3', 'TutorTiempoController@edit_t3');
Route::post('/edit/tutor_tiempo_ej_4', 'TutorTiempoController@edit_t4');
Route::post('/edit/tutor_tiempo_ej_5', 'TutorTiempoController@edit_t5');
Route::post('/edit/tutor_tiempo_ej_6', 'TutorTiempoController@edit_t6');
Route::post('/edit/tutor_tiempo_ej_7', 'TutorTiempoController@edit_t7');
Route::post('/edit/tutor_tiempo_ej_8', 'TutorTiempoController@edit_t8');


Route::get('/tutor_tiempo_ej_2_2', 'TutorTiempoController@create_t2_2');
Route::get('/tutor_tiempo_ej_2_3', 'TutorTiempoController@create_t2_3');
Route::get('/tutor_tiempo_ej_2_4', 'TutorTiempoController@create_t2_4');
Route::get('/tutor_tiempo_ej_2_5', 'TutorTiempoController@create_t2_5');
Route::get('/tutor_tiempo_ej_2_6', 'TutorTiempoController@create_t2_6');
Route::get('/tutor_tiempo_ej_2_7', 'TutorTiempoController@create_t2_7');
Route::get('/tutor_tiempo_ej_2_8', 'TutorTiempoController@create_t2_8');

Route::post('/store/tutor_tiempo_ej_2_2', 'TutorTiempoController@store_t2_2');
Route::post('/store/tutor_tiempo_ej_2_3', 'TutorTiempoController@store_t2_3');
Route::post('/store/tutor_tiempo_ej_2_4', 'TutorTiempoController@store_t2_4');
Route::post('/store/tutor_tiempo_ej_2_5', 'TutorTiempoController@store_t2_5');
Route::post('/store/tutor_tiempo_ej_2_6', 'TutorTiempoController@store_t2_6');
Route::post('/store/tutor_tiempo_ej_2_7', 'TutorTiempoController@store_t2_7');
Route::post('/store/tutor_tiempo_ej_2_8', 'TutorTiempoController@store_t2_8');

Route::post('/edit/tutor_tiempo_ej_2_2', 'TutorTiempoController@edit_t2_2');
Route::post('/edit/tutor_tiempo_ej_2_3', 'TutorTiempoController@edit_t2_3');
Route::post('/edit/tutor_tiempo_ej_2_4', 'TutorTiempoController@edit_t2_4');
Route::post('/edit/tutor_tiempo_ej_2_5', 'TutorTiempoController@edit_t2_5');
Route::post('/edit/tutor_tiempo_ej_2_6', 'TutorTiempoController@edit_t2_6');
Route::post('/edit/tutor_tiempo_ej_2_7', 'TutorTiempoController@edit_t2_7');
Route::post('/edit/tutor_tiempo_ej_2_8', 'TutorTiempoController@edit_t2_8');


////*********TUTOR ACTIVIDAD 3 --SER HUMANO INTEGRAL--*******************////
Route::get('/tutor_hum_int_ej_1', 'TutorHumanointegralController@create_hum_int_1');

Route::post('/store/tutor_hum_int_ej_1', 'TutorHumanointegralController@store_create_hum_int_1');

Route::post('/edit/tutor_hum_int_ej_1', 'TutorHumanointegralController@edit_create_hum_int_1');

////*********TUTOR ACTIVIDAD 4 --DESARROLLO HUMANO INTEGRAL--*******************////
Route::get('/tutor_des_hum_int_ej_1', 'TutorDesarrolloHumanoController@create_des_hum_int_1');
Route::get('/tutor_des_hum_int_ej_2', 'TutorDesarrolloHumanoController@create_des_hum_int_2');
Route::get('/tutor_des_hum_int_ej_3', 'TutorDesarrolloHumanoController@create_des_hum_int_3');
Route::get('/tutor_des_hum_int_ej_4', 'TutorDesarrolloHumanoController@create_des_hum_int_4');
Route::get('/tutor_des_hum_int_ej_5', 'TutorDesarrolloHumanoController@create_des_hum_int_5');
Route::get('/tutor_des_hum_int_ej_6', 'TutorDesarrolloHumanoController@create_des_hum_int_6');

Route::post('/store/tutor_des_hum_int_ej_1', 'TutorDesarrolloHumanoController@store_des_hum_int_1');
Route::post('/store/tutor_des_hum_int_ej_2', 'TutorDesarrolloHumanoController@store_des_hum_int_2');
Route::post('/store/tutor_des_hum_int_ej_3', 'TutorDesarrolloHumanoController@store_des_hum_int_3');
Route::post('/store/tutor_des_hum_int_ej_4', 'TutorDesarrolloHumanoController@store_des_hum_int_4');
Route::post('/store/tutor_des_hum_int_ej_5', 'TutorDesarrolloHumanoController@store_des_hum_int_5');
Route::post('/store/tutor_des_hum_int_ej_6', 'TutorDesarrolloHumanoController@store_des_hum_int_6');

Route::post('/edit/tutor_des_hum_int_ej_1', 'TutorDesarrolloHumanoController@edit_des_hum_int_1');
Route::post('/edit/tutor_des_hum_int_ej_2', 'TutorDesarrolloHumanoController@edit_des_hum_int_2');
Route::post('/edit/tutor_des_hum_int_ej_3', 'TutorDesarrolloHumanoController@edit_des_hum_int_3');
Route::post('/edit/tutor_des_hum_int_ej_4', 'TutorDesarrolloHumanoController@edit_des_hum_int_4');
Route::post('/edit/tutor_des_hum_int_ej_5', 'TutorDesarrolloHumanoController@edit_des_hum_int_5');
Route::post('/edit/tutor_des_hum_int_ej_6', 'TutorDesarrolloHumanoController@edit_des_hum_int_6');


////*********TUTOR ACTIVIDAD 5 --INTELIGENCIAS MULTIPLES --*******************////
Route::get('/tutor_int_mult_ej_1', 'TutorInteligenciasController@create_int_mult_ej_1');
Route::get('/tutor_int_mult_ej_2', 'TutorInteligenciasController@create_int_mult_ej_2');
Route::get('/tutor_int_mult_ej_3', 'TutorInteligenciasController@create_int_mult_ej_3');
Route::get('/tutor_int_mult_ej_4', 'TutorInteligenciasController@create_int_mult_ej_4');
Route::get('/tutor_asign', 'TutorInteligenciasController@create_asign');


Route::post('/store/tutor_int_mult_ej_1', 'TutorInteligenciasController@store_int_mult_ej_1');
Route::post('/store/tutor_int_mult_ej_2', 'TutorInteligenciasController@store_int_mult_ej_2');
Route::post('/store/tutor_int_mult_ej_3', 'TutorInteligenciasController@store_int_mult_ej_3');
Route::post('/store/tutor_int_mult_ej_4', 'TutorInteligenciasController@store_int_mult_ej_4');
Route::post('/store/tutor_asign', 'TutorInteligenciasController@store_asign');


Route::post('/edit/tutor_int_mult_ej_1', 'TutorInteligenciasController@edit_int_mult_ej_1');
Route::post('/edit/tutor_int_mult_ej_2', 'TutorInteligenciasController@edit_int_mult_ej_2');
Route::post('/edit/tutor_int_mult_ej_3', 'TutorInteligenciasController@edit_int_mult_ej_3');
Route::post('/edit/tutor_int_mult_ej_4', 'TutorInteligenciasController@edit_int_mult_ej_4');


////*********TUTOR ACTIVIDAD 6 --HABILIDADES DE ESTUDIO --*******************////
Route::get('/tutor_hab_est_1', 'TutorHabilidadsController@create_hab_est_1');
Route::post('/store/tutor_hab_est_1', 'TutorHabilidadsController@store_hab_est_1');
Route::post('/edit/tutor_hab_est_1', 'TutorHabilidadsController@edit_hab_est_1');

////*********TUTOR ACTIVIDAD 7 --MEMORIA --*******************////
Route::get('/tutor_mem_1', 'TutorMemoriasController@create_mem_1');
Route::get('/tutor_mem_2', 'TutorMemoriasController@create_mem_2');
Route::get('/tutor_mem_3', 'TutorMemoriasController@create_mem_3');
Route::get('/tutor_mem_4', 'TutorMemoriasController@create_mem_4');

Route::post('/store/tutor_mem_1', 'TutorMemoriasController@store_mem_1');
Route::post('/store/tutor_mem_2', 'TutorMemoriasController@store_mem_2');
Route::post('/store/tutor_mem_3', 'TutorMemoriasController@store_mem_3');
Route::post('/store/tutor_mem_4', 'TutorMemoriasController@store_mem_4');

Route::post('/edit/tutor_mem_1', 'TutorMemoriasController@edit_mem_1');
Route::post('/edit/tutor_mem_2', 'TutorMemoriasController@edit_mem_2');
Route::post('/edit/tutor_mem_3', 'TutorMemoriasController@edit_mem_3');
Route::post('/edit/tutor_mem_4', 'TutorMemoriasController@edit_mem_4');

////*********TUTOR ACTIVIDAD 8 --PENSAMIENTO--**********////
Route::get('/tutor_pens_1', 'TutorPensamientosController@create_pens_1');
Route::get('/tutor_pens_2', 'TutorPensamientosController@create_pens_2');
Route::get('/tutor_pens_3', 'TutorPensamientosController@create_pens_3');
Route::get('/tutor_pens_4', 'TutorPensamientosController@create_pens_4');

Route::post('/store/tutor_pens_1', 'TutorPensamientosController@store_pens_1');
Route::post('/store/tutor_pens_2', 'TutorPensamientosController@store_pens_2');
Route::post('/store/tutor_pens_3', 'TutorPensamientosController@store_pens_3');
Route::post('/store/tutor_pens_4', 'TutorPensamientosController@store_pens_4');

Route::post('/edit/tutor_pens_1', 'TutorPensamientosController@edit_pens_1');
Route::post('/edit/tutor_pens_2', 'TutorPensamientosController@edit_pens_2');
Route::post('/edit/tutor_pens_3', 'TutorPensamientosController@edit_pens_3');
Route::post('/edit/tutor_pens_4', 'TutorPensamientosController@edit_pens_4');


////*********TUTOR ACTIVIDAD 9 --MAPA MENTAL Y CONCEPTUAL--**********////
Route::get('/tutor_mapas_1', 'TutorMapasController@create_mapas_1');

Route::post('/store/tutor_mapas_1', 'TutorMapasController@store_mapas_1');

Route::post('/edit/tutor_mapas_1', 'TutorMapasController@edit_mapas_1');

////*********TUTOR ACTIVIDAD 10 --ESQUEMA Y CUADRO COMPARATIVO--**********////
Route::get('/tutor_esq_1', 'TutorEsquemasController@create_esqs_1');
Route::get('/tutor_esq_2', 'TutorEsquemasController@create_esqs_2');

Route::post('/store/tutor_esq_1', 'TutorEsquemasController@store_esqs_1');
Route::post('/store/tutor_esq_2', 'TutorEsquemasController@store_esqs_2');

Route::post('/edit/tutor_esq_1', 'TutorEsquemasController@edit_esqs_1');
Route::post('/edit/tutor_esq_2', 'TutorEsquemasController@edit_esqs_2');


//--PENDIENTE DE TERMINAR

////*********TUTOR ACTIVIDAD 11 --RESUMEN Y ENSAYO--**********////
Route::get('/tutor_ens_1', 'TutorEnsayosController@create_ens_1');

Route::post('/store/tutor_ens_1', 'TutorEnsayosController@store_ens_1');

Route::post('/edit/tutor_ens_1', 'TutorEnsayosController@edit_ens_1');

////*********TUTOR ACTIVIDAD 12 --MATEMATICAS--**********////
Route::get('/tutor_mat_1', 'TutorMatsController@create_mat_1');
Route::get('/tutor_mat_2', 'TutorMatsController@create_mat_2');

Route::post('/store/tutor_mat_1', 'TutorMatsController@store_mat_1');
Route::post('/store/tutor_mat_2', 'TutorMatsController@store_mat_2');

Route::post('/edit/tutor_mat_1', 'TutorMatsController@edit_mat_1');
Route::post('/edit/tutor_mat_2', 'TutorMatsController@edit_mat_2');


////*********TUTOR ACTIVIDAD 13 --INFERENCIAS LÓGICAS--**********////
Route::get('/tutor_inf_1', 'TutorInferenciasController@create_inf_1');
Route::get('/tutor_inf_2', 'TutorInferenciasController@create_inf_2');

Route::post('/store/tutor_inf_1', 'TutorInferenciasController@store_inf_1');
Route::post('/store/tutor_inf_2', 'TutorInferenciasController@store_inf_2');

Route::post('/edit/tutor_inf_1', 'TutorInferenciasController@edit_inf_1');
Route::post('/edit/tutor_inf_2', 'TutorInferenciasController@edit_inf_2');


///*********TUTOR ACTIVIDAD 14 --RELACIÓN Y SIMBLOLIZACIÓN--**********////
Route::get('/tutor_rel_sim_1', 'TutorRelacionsController@create_rel_sim_1');
Route::get('/tutor_rel_sim_2', 'TutorRelacionsController@create_rel_sim_2');
Route::get('/tutor_rel_sim_3', 'TutorRelacionsController@create_rel_sim_3');
Route::get('/tutor_rel_sim_4', 'TutorRelacionsController@create_rel_sim_4');
Route::get('/tutor_rel_sim_5', 'TutorRelacionsController@create_rel_sim_5');

Route::post('/store/tutor_rel_sim_1', 'TutorRelacionsController@store_rel_sim_1');
Route::post('/store/tutor_rel_sim_2', 'TutorRelacionsController@store_rel_sim_2');
Route::post('/store/tutor_rel_sim_3', 'TutorRelacionsController@store_rel_sim_3');
Route::post('/store/tutor_rel_sim_4', 'TutorRelacionsController@store_rel_sim_4');
Route::post('/store/tutor_rel_sim_5', 'TutorRelacionsController@store_rel_sim_5');

Route::post('/edit/tutor_rel_sim_1', 'TutorRelacionsController@edit_rel_sim_1');
Route::post('/edit/tutor_rel_sim_2', 'TutorRelacionsController@edit_rel_sim_2');
Route::post('/edit/tutor_rel_sim_3', 'TutorRelacionsController@edit_rel_sim_3');
Route::post('/edit/tutor_rel_sim_4', 'TutorRelacionsController@edit_rel_sim_4');
Route::post('/edit/tutor_rel_sim_5', 'TutorRelacionsController@edit_rel_sim_5');

////*********FUNCIONES DEL TUTOR--**********////

Route::get('/tutor_panel', 'tutoresController@create_panel_tutor');
Route::get('/tutor_grupos', 'tutoresController@create_grupos_tutor');
Route::get('/tutor_grupos_alumnos/{c}', 'tutoresController@create_detalle_grupo');

Route::get('/avance_individual_alumno/{nc}', 'ActivitiesController@create_acts_tutor');

Route::get('/avance_grupo/{c}', 'ActivitiesController@create_avance_grupo');


////*********PANEL ACTS ALUMNO--**********////

Route::get('/panel_alumno', 'AlumnosController@create_panel_alumno');
Route::get('/panel_actividades', 'ActivitiesController@create_acts');
//Route::get('/alumno_perfil', 'ActivitiesController@create_acts');


///*********REGISTRO ALUMNOS--**********////
Route::get('/panel_acts_alumno', 'AlumnosController@create_acts');
Route::get('/reg_alumno', 'AlumnosController@create_alumnos');
Route::post('/edit/reg_alumno', 'AlumnosController@edit');


Route::post('/store/reg_alumno', 'AlumnosController@store_alumnos');

///*********ADMINISTRADOR GLOBAL - PANEL DE CREACIÓN DE GRUPOS--**********////
//Route::get('/admin_panel_global', 'GruposController@create_panel');


///*********ADMINISTRADOR GLOBAL - REGISTRO DE GRUPOS--**********////
Route::get('/admin_panel', 'GruposController@create_panel');

Route::get('/admin_reg', 'AdministradoresController@create_reg_admin');
Route::post('/store/admin_reg', 'AdministradoresController@guardar_admin');


Route::get('/admin_academias_create', 'GruposController@create_academias');
Route::get('/admin_academias_manage', 'GruposController@create_man_academias');
Route::get('/admin_create_academias_edit/{id}', 'GruposController@create_edit_academias');
Route::post('/admin_guardar_academias_edit/{id}', 'GruposController@guardar_edit_academias');
Route::post('/softDelete_academias/{id}', 'GruposController@softDelete_academias');
Route::get('/papelera_academias', 'GruposController@reads_softDel_academias');
Route::post('/rest_academia/{id}', 'GruposController@rest_academia');

Route::get('/admin_carreras_create', 'GruposController@create_carreras');
Route::get('/admin_carreras_manage', 'GruposController@create_man_carreras');
Route::get('/admin_create_carreras_edit/{id}', 'GruposController@create_edit_carreras');
Route::post('/admin_guardar_carreras_edit/{id}', 'GruposController@guardar_edit_carreras');
Route::post('/softDelete_carreras/{id}', 'GruposController@softDelete_carreras');
Route::get('/papelera_carreras', 'GruposController@reads_softDel_carreras');
Route::post('/rest_carrera/{id}', 'GruposController@rest_carrera');


Route::get('/admin_periodos_create', 'GruposController@create_periodos');
Route::get('/admin_periodos_manage', 'GruposController@create_man_periodos');
Route::get('/admin_create_periodos_edit/{id}', 'GruposController@create_edit_periodos');
Route::post('/admin_guardar_periodos_edit/{id}', 'GruposController@guardar_edit_periodos');
Route::post('/softDelete_periodos/{id}', 'GruposController@softDelete_periodos');
Route::get('/papelera_periodos', 'GruposController@reads_softDel_periodos');
Route::post('/rest_periodos/{id}', 'GruposController@rest_periodos');

Route::get('/admin_materias_create', 'GruposController@create_materias');
Route::post('/store/admin_materias_create', 'GruposController@store_materias');
Route::get('/admin_materias_manage', 'GruposController@create_man_materias');
Route::get('/admin_create_materias_edit/{id}', 'GruposController@create_edit_materias');
Route::post('/admin_guardar_materias_edit/{id}', 'GruposController@guardar_edit_materias');
Route::post('/softDelete_materias/{id}', 'GruposController@softDelete_materias');
Route::get('/papelera_materias', 'GruposController@reads_softDel_materias');
Route::post('/rest_materias/{id}', 'GruposController@rest_materias');


Route::get('/admin_grupos_create', 'GruposController@create_grupos');
Route::get('/admin_grupos_manage', 'GruposController@create_man_grupos');
Route::get('/admin_grupos_create', 'GruposController@create_grupos');
Route::get('/admin_grupos_asignar/{clave}', 'GruposController@asignar_grupos');
Route::post('/store/admin_grupos_asignar/{c}', 'GruposController@store_asignar_grupos');

Route::get('/admin_alumnos_manage', 'AlumnosController@create_man_alumnos');
Route::post('/admin_rest_alumno/{numero_control}', 'AlumnosController@rest_alumno');

Route::get('/admin_alumnos_edit/{numero_control}', 'AlumnosController@create_edit_alumnos');
Route::post('/admin_alumnos_activar/{numero_control}', 'AlumnosController@activar_alumno');
Route::post('/softDelete_grupos/{numero_control}', 'AlumnosController@softDelete_alumno');
Route::post('/admin_store_edit_alumnos/{numero_control}', 'AlumnosController@admin_store_edit_alumnos');
Route::get('/papelera_alumnos', 'AlumnosController@reads_softDel_alumnos');


Route::get('/admin_grupos_edit/{clave}', 'GruposController@edit_grupos');
Route::get('/reads_softDel_grupo/', 'GruposController@reads_softDel_grupo');
//Route::get('/grupos_tutor/', 'GruposController@grupos_tutor');
Route::get('/lista_grupos_tutor/{numero_control}', 'GruposController@lista_grupos_tutor');


Route::post('/store/admin_carreras_create', 'GruposController@store_carreras');
Route::post('/store/admin_academias_create', 'GruposController@store_academias');
Route::post('/store/admin_periodos_create', 'GruposController@store_periodos');
Route::post('/store/admin_grupos_create', 'GruposController@store_grupos');
Route::post('/admin_grupos_activar/{clave}', 'GruposController@activar_grupo');
Route::post('/store/admin_grupos_editar/{clave}', 'GruposController@guardar_edit_grupo');
Route::post('/softDelete_grupos/{clave}', 'GruposController@softDelete_grupos');
Route::post('/rest_grupo/{clave}', 'GruposController@rest_grupo');

///*********ADMINISTRADOR GLOBAL - REGISTRO DE TUTORES--**********////

Route::get('/admin_tutores_create', 'tutoresController@create_tutores');
Route::get('/manejo_tutores', 'tutoresController@create_man_tutores');
Route::get('/edit_tutores/{numero_control}', 'tutoresController@create_edit_tutores');
Route::post('/guardar_edit_tutores/{numero_control}', 'tutoresController@guardar_edit_tutores');
Route::post('/activar_tutor/{numero_control}', 'tutoresController@activar_tutor');
Route::post('/softDelete_tutor/{numero_control}', 'tutoresController@softDelete_tutor');

Route::get('/reads_softDel_tutor/', 'tutoresController@reads_softDel_tutor');
Route::post('/rest_tutor/{numero_control}', 'tutoresController@rest_tutor');
Route::post('/del_tutor/{numero_control}', 'tutoresController@del_tutor');

Route::post('/store/admin_tutores_create', 'tutoresController@create');




Route::get('lecs', function(){

    return view('activities.13_Inferencias_logicas.lecturas.lectura_1');

});

Route::get('ejs', function(){
    return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5');

});


Route::get('ex', function(){
    return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
