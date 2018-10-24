//********h9********
$h9=array();
$h9_i=1;
$h9_k=0;

while($h9_i<=count($request->h9)){
$h9[$h9_i]=$request->h9[$h9_k];
$h9_i++;
$h9_k++;
}
$h9_output = json_encode($h9);