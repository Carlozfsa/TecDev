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

Route::get('/', function () {
    return view('welcome');
});


Route::get('actPanel', 'ActivitiesController@index');

Route::delete('/eliminarActividad/{id}','ActivitiesController@destroy')->name('destroyActivity');

Route::get('fodaj', function(){

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

//Route::group(['middleware'=>'Alumnos'], function() {

////*********ACTIVIDAD 1 --FODA--**********////

////*********FORTALEZAS**********////
Route::get('/foda_1_1', 'FodaController@create_f1');
Route::get('/foda_1_2', 'FodaController@create_f2');
Route::get('/foda_1_3', 'FodaController@create_f3');
Route::get('/foda_1_4', 'FodaController@create_f4');


Route::post('/store/foda_1_1', 'FodaController@store_f1');
Route::post('/store/foda_1_2', 'FodaController@store_f2');
Route::post('/store/foda_1_3', 'FodaController@store_f3');
Route::post('/store/foda_1_4', 'FodaController@store_f4');

////*********DEBILIDADES**********////
Route::get('/foda_2_1', 'FodaController@create_d1');
Route::get('/foda_2_2', 'FodaController@create_d2');
Route::get('/foda_2_3', 'FodaController@create_d3');
Route::get('/foda_2_4', 'FodaController@create_d4');

Route::post('/store/foda_2_1', 'FodaController@store_d1');
Route::post('/store/foda_2_2', 'FodaController@store_d2');
Route::post('/store/foda_2_3', 'FodaController@store_d3');
Route::post('/store/foda_2_4', 'FodaController@store_d4');

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

////*********OPORTUNIDADES**********////
Route::get('/foda_4_1', 'FodaController@create_o1');
Route::get('/foda_4_2', 'FodaController@create_o2');
Route::get('/foda_4_3', 'FodaController@create_o3');
Route::get('/foda_4_4', 'FodaController@create_o4');


Route::post('/store/foda_4_1', 'FodaController@store_o1');
Route::post('/store/foda_4_2', 'FodaController@store_o2');
Route::post('/store/foda_4_3', 'FodaController@store_o3');
Route::post('/store/foda_4_4', 'FodaController@store_o4');

////*********RESUMEN**********////

Route::get('/foda_r', 'FodaController@create_r');

Route::post('/store/foda_r', 'FodaController@store_r');

//});

////*********ACTIVIDAD 2 --TIEMPO--**********////
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

////*********ACTIVIDAD 3 --SER HUMANO INTEGRAL--**********////

Route::get('/hum_int_ej_1', 'HumanointegralController@create_hum_int_1');

Route::post('/store/hum_int_ej_1', 'HumanointegralController@store_hum_int_ej_1');

////*********ACTIVIDAD 4 --DESARROLLO HUMANO INTEGRAL--**********////

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

////*********ACTIVIDAD 5 --INTELIGENCIAS MULTIPLES--**********////
Route::get('/int_mult_ej_1', 'InteligenciaController@create_int_mult_ej_1');
Route::get('/int_mult_ej_2', 'InteligenciaController@create_int_mult_ej_2');
Route::get('/int_mult_ej_3', 'InteligenciaController@create_int_mult_ej_3');
Route::get('/int_mult_ej_4', 'InteligenciaController@create_int_mult_ej_4');
Route::get('/int_mult_ej_res', 'InteligenciaController@create_int_mult_res');

Route::post('/store/int_mult_ej_1', 'InteligenciaController@store_int_mult_ej_1');


////*********ACTIVIDAD 6 --HABILIDADES DE ESTUDIO--**********////
Route::get('/hab_est_1', 'HabilidadsController@create_hab_est_1');

Route::post('/store/hab_est_1', 'HabilidadsController@store_hab_est_1');

////*********ACTIVIDAD 7 --MEMORIA--**********////
Route::get('/mem_1', 'MemoriasController@create_mem_1');
Route::get('/mem_2', 'MemoriasController@create_mem_2');
Route::get('/mem_3', 'MemoriasController@create_mem_3');
Route::get('/mem_4', 'MemoriasController@create_mem_4');


Route::post('/store/mem_1', 'MemoriasController@store_mem_1');
Route::post('/store/mem_2', 'MemoriasController@store_mem_2');
Route::post('/store/mem_3', 'MemoriasController@store_mem_3');
Route::post('/store/mem_4', 'MemoriasController@store_mem_4');

////*********ACTIVIDAD 8 --PENSAMIENTO--**********////
Route::get('/pens_1', 'PensamientosController@create_pens_1');
Route::get('/pens_2', 'PensamientosController@create_pens_2');
Route::get('/pens_3', 'PensamientosController@create_pens_3');
Route::get('/pens_4', 'PensamientosController@create_pens_4');
Route::get('/pens_5', 'PensamientosController@create_pens_5');


Route::post('/store/pens_1', 'PensamientosController@store_pens_1');
Route::post('/store/pens_3', 'PensamientosController@store_pens_3');
Route::post('/store/pens_4', 'PensamientosController@store_pens_4');
Route::post('/store/pens_5', 'PensamientosController@store_pens_5');

////*********ACTIVIDAD 9 --MAPA MENTAL Y CONCEPTUAL--**********////
Route::get('/mapas_1', 'MapasController@create_mapas_1');

Route::post('/store/mapas_1', 'MapasController@store');


////*********ACTIVIDAD 10 --ESQUEMA Y CUADRO COMPARATIVO--**********////
Route::get('/esq_1', 'EsquemasController@create_esqs_1');
Route::get('/esq_2', 'EsquemasController@create_esqs_2');


////*********ACTIVIDAD 11 --RESUMEN Y ENSAYO--**********////
Route::get('/ens_1', 'EnsayosController@create_ens_1');


////*********ACTIVIDAD 12 --MATEMATICAS--**********////
Route::get('/mat_1', 'MatsController@create_mat_1');
Route::get('/mat_2', 'MatsController@create_mat_2');


Route::post('/store/mat_1', 'MatsController@store_mat_1');
Route::post('/store/mat_2', 'MatsController@store_mat_2');

////*********ACTIVIDAD 13 --INFERENCIAS LÓGICAS--**********////
Route::get('/inf_1', 'InferenciasController@create_inf_1');
Route::get('/inf_2', 'InferenciasController@create_inf_2');

Route::post('/store/inf_1', 'InferenciasController@store_inf_1');
Route::post('/store/inf_2', 'InferenciasController@store_inf_2');

////*********ACTIVIDAD 14 --RELACIÓN Y SIMBLOLIZACIÓN--**********////
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

//Route::group(['middleware'=>'Tutores'], function() {

////*********TUTOR ACTIVIDAD 1 --FODA--*******************////
    Route::get('/tutor_foda_1_1', 'TutorFodaController@create_f1');
    Route::get('/tutor_foda_1_2', 'TutorFodaController@create_f2');
    Route::get('/tutor_foda_1_3', 'TutorFodaController@create_f3');
    Route::get('/tutor_foda_1_4', 'TutorFodaController@create_f4');


    Route::post('/store/tutor_foda_1_1', 'TutorFodaController@store_f1');
    Route::post('/store/tutor_foda_1_2', 'TutorFodaController@store_f2');
    Route::post('/store/tutor_foda_1_3', 'TutorFodaController@store_f3');
    Route::post('/store/tutor_foda_1_4', 'TutorFodaController@store_f4');

    Route::get('/tutor_foda_2_1', 'TutorFodaController@create_d1');
    Route::get('/tutor_foda_2_2', 'TutorFodaController@create_d2');
    Route::get('/tutor_foda_2_3', 'TutorFodaController@create_d3');
    Route::get('/tutor_foda_2_4', 'TutorFodaController@create_d4');

    Route::post('/store/tutor_foda_2_1', 'TutorFodaController@store_d1');
    Route::post('/store/tutor_foda_2_2', 'TutorFodaController@store_d2');
    Route::post('/store/tutor_foda_2_3', 'TutorFodaController@store_d3');
    Route::post('/store/tutor_foda_2_4', 'TutorFodaController@store_d4');


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

    Route::get('/tutor_foda_4_1', 'TutorFodaController@create_o1');
    Route::get('/tutor_foda_4_2', 'TutorFodaController@create_o2');
    Route::get('/tutor_foda_4_3', 'TutorFodaController@create_o3');
    Route::get('/tutor_foda_4_4', 'TutorFodaController@create_o4');


    Route::post('/store/tutor_foda_4_1', 'TutorFodaController@store_o1');
    Route::post('/store/tutor_foda_4_2', 'TutorFodaController@store_o2');
    Route::post('/store/tutor_foda_4_3', 'TutorFodaController@store_o3');
    Route::post('/store/tutor_foda_4_4', 'TutorFodaController@store_o4');

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


////*********TUTOR ACTIVIDAD 3 --SER HUMANO INTEGRAL--*******************////
Route::get('/tutor_hum_int_ej_1', 'TutorHumanointegralController@create_hum_int_1');

Route::post('/store/tutor_hum_int_ej_1', 'TutorHumanointegralController@store_create_hum_int_1');

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

////*********TUTOR ACTIVIDAD 5 --INTELIGENCIAS MULTIPLES --*******************////
 //-- PENSANDO EN UNA MEJOR SOLUCION

////*********TUTOR ACTIVIDAD 6 --HABILIDADES DE ESTUDIO --*******************////
Route::get('/tutor_hab_est_1', 'TutorHabilidadsController@create_hab_est_1');
Route::post('/store/tutor_hab_est_1', 'TutorHabilidadsController@store_hab_est_1');

////*********TUTOR ACTIVIDAD 7 --MEMORIA --*******************////
Route::get('/tutor_mem_1', 'TutorMemoriasController@create_mem_1');
Route::get('/tutor_mem_2', 'TutorMemoriasController@create_mem_2');
Route::get('/tutor_mem_3', 'TutorMemoriasController@create_mem_3');
Route::get('/tutor_mem_4', 'TutorMemoriasController@create_mem_4');

Route::post('/store/tutor_mem_1', 'TutorMemoriasController@store_mem_1');
Route::post('/store/tutor_mem_2', 'TutorMemoriasController@store_mem_2');
Route::post('/store/tutor_mem_3', 'TutorMemoriasController@store_mem_3');
Route::post('/store/tutor_mem_4', 'TutorMemoriasController@store_mem_4');

////*********TUTOR ACTIVIDAD 8 --PENSAMIENTO--**********////
Route::get('/tutor_pens_1', 'TutorPensamientosController@create_pens_1');
Route::get('/tutor_pens_2', 'TutorPensamientosController@create_pens_2');
Route::get('/tutor_pens_3', 'TutorPensamientosController@create_pens_3');
Route::get('/tutor_pens_4', 'TutorPensamientosController@create_pens_4');

Route::post('/store/tutor_pens_1', 'TutorPensamientosController@store_pens_1');
Route::post('/store/tutor_pens_2', 'TutorPensamientosController@store_pens_2');
Route::post('/store/tutor_pens_3', 'TutorPensamientosController@store_pens_3');
Route::post('/store/tutor_pens_4', 'TutorPensamientosController@store_pens_4');

////*********TUTOR ACTIVIDAD 9 --MAPA MENTAL Y CONCEPTUAL--**********////
Route::get('/tutor_mapas_1', 'TutorMapasController@create_mapas_1');
//Route::post('/store/mapas_1', 'MapasController@store_mapas_1');
//--PENDIENTE DE TERMINAR


////*********TUTOR ACTIVIDAD 10 --ESQUEMA Y CUADRO COMPARATIVO--**********////
Route::get('/tutor_esq_1', 'TutorEsquemasController@create_esqs_1');
Route::get('/tutor_esq_2', 'TutorEsquemasController@create_esqs_2');
//--PENDIENTE DE TERMINAR

////*********TUTOR ACTIVIDAD 11 --RESUMEN Y ENSAYO--**********////
Route::get('/tutor_ens_1', 'TutorEnsayosController@create_ens_1');
//--PENDIENTE DE TERMINAR

////*********TUTOR ACTIVIDAD 12 --MATEMATICAS--**********////
Route::get('/tutor_mat_1', 'TutorMatsController@create_mat_1');
Route::get('/tutor_mat_2', 'TutorMatsController@create_mat_2');

Route::post('/store/tutor_mat_1', 'TutorMatsController@store_mat_1');
Route::post('/store/tutor_mat_2', 'TutorMatsController@store_mat_2');


////*********TUTOR ACTIVIDAD 13 --INFERENCIAS LÓGICAS--**********////
Route::get('/tutor_inf_1', 'TutorInferenciasController@create_inf_1');
Route::get('/tutor_inf_2', 'TutorInferenciasController@create_inf_2');

Route::post('/store/tutor_inf_1', 'TutorInferenciasController@store_inf_1');
Route::post('/store/tutor_inf_2', 'TutorInferenciasController@store_inf_2');



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


///*********ADMINISTRADOR GLOBAL PANEL DE CREACIÓN DE GRUPOS--**********////
Route::get('/admin_grupos_create', 'GruposController@create_grupos');

Route::post('/store/admin_grupos_create', 'GruposController@store_grupos');



Route::get('lecs', function(){

    return view('activities.13_Inferencias_logicas.lecturas.lectura_1');

});

Route::get('ejs', function(){
    return view('activities.14_Relacion_y_simbolizacion.ejercicios.ejercicio_5');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
