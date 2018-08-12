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
