public function edit_t1_7(Request $request){


//// HORA 1
$f1=array();
$i=1;
$k=0;

while($i<=count($request->de1)){
$f1[$i]=$request->de1[$k];
$i++;
$k++;
}

$f1_output1 = json_encode($f1);

// HORA 2
$f2=array();
$i2=1;
$k2=0;

while($i2<=count($request->de2)){
$f2[$i2]=$request->de2[$k2];
$i2++;
$k2++;
}

$f1_output2 = json_encode($f2);


// HORA 3
$f3=array();
$i3=1;
$k3=0;

while($i3<=count($request->de3)){
$f3[$i3]=$request->de3[$k3];
$i3++;
$k3++;
}

$f1_output3 = json_encode($f3);

// HORA 4
$f4=array();
$i4=1;
$k4=0;

while($i4<=count($request->de4)){
$f4[$i4]=$request->de4[$k4];
$i4++;
$k4++;
}

$f1_output4 = json_encode($f4);


// HORA 5
$f5=array();
$i5=1;
$k5=0;

while($i5<=count($request->de5)){
$f5[$i5]=$request->de5[$k5];
$i5++;
$k5++;
}

$f1_output5 = json_encode($f5);

// HORA 6
$f6=array();
$i6=1;
$k6=0;

while($i6<=count($request->de6)){
$f6[$i6]=$request->de6[$k6];
$i6++;
$k6++;
}

$f1_output6 = json_encode($f6);



// HORA 7
$f7=array();
$i7=1;
$k7=0;

while($i7<=count($request->de7)){
$f7[$i7]=$request->de7[$k7];
$i7++;
$k7++;
}

$f1_output7 = json_encode($f7);

// HORA 8
$f8=array();
$i8=1;
$k8=0;

while($i8<=count($request->de8)){
$f8[$i8]=$request->de8[$k8];
$i8++;
$k8++;
}

$f1_output8 = json_encode($f8);

// HORA 9
$f9=array();
$i9=1;
$k9=0;

while($i9<=count($request->de9)){
$f9[$i9]=$request->de9[$k9];
$i9++;
$k9++;
}

$f1_output9 = json_encode($f9);



// HORA 10
$f10=array();
$i10=1;
$k10=0;

while($i10<=count($request->de10)){
$f10[$i10]=$request->de10[$k10];
$i10++;
$k10++;
}

$f1_output10 = json_encode($f10);


// HORA 11
$f11=array();
$i11=1;
$k11=0;

while($i11<=count($request->de11)){
$f11[$i11]=$request->de11[$k11];
$i11++;
$k11++;
}

$f1_output11 = json_encode($f11);


// HORA 12
$f12=array();
$i12=1;
$k12=0;

while($i12<=count($request->de12)){
$f12[$i12]=$request->de12[$k12];
$i12++;
$k12++;
}

$f1_output12 = json_encode($f12);


// HORA 13
$f13=array();
$i13=1;
$k13=0;

while($i13<=count($request->de13)){
$f13[$i13]=$request->de13[$k13];
$i13++;
$k13++;
}

$f1_output13 = json_encode($f13);


$_h1domingo = Tiempo::where('numero_control', 14021073)->first();

$_h1domingo->domingo_h1 = $f1_output1;
$_h1domingo->domingo_h2 = $f1_output2;
$_h1domingo->domingo_h3 = $f1_output3;
$_h1domingo->domingo_h4 = $f1_output4;
$_h1domingo->domingo_h5 = $f1_output5;
$_h1domingo->domingo_h6 = $f1_output6;
$_h1domingo->domingo_h7 = $f1_output7;
$_h1domingo->domingo_h8 = $f1_output8;
$_h1domingo->domingo_h9 = $f1_output9;
$_h1domingo->domingo_h10 = $f1_output10;
$_h1domingo->domingo_h11 = $f1_output11;
$_h1domingo->domingo_h12 = $f1_output12;
$_h1domingo->domingo_h13 = $f1_output13;

$_h1domingo->save();

return redirect()->back();

}