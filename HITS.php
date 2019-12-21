<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
function filehandling($file,$f){
  $filecontent = file_get_contents($file);
  $usercontent = $f;
  file_put_contents($file,$usercontent);

}
function neglect($file){
  $docarray=array(0,0,0,0,0);
  $arrfname=explode(".",$file);
  $chosenchar=$arrfname[0];
  $filestring=file_get_contents($file);
  $filearray = str_split($filestring);
  $chararray = array("A","B","C","D","E");
  for ($i=0; $i <sizeof($filearray) ; $i++) {
    for ($j=0; $j <5; $j++) {

      if ($filearray[$i]==$chararray[$j]) {
        $docarray[$i]=1;
      }
      if ($filearray[$i]==$chosenchar) {
      $docarray[$i]=0;
      }}}return $docarray;}
function matrixmult($mat,$vec){
  $m = array();
  for ($i=0; $i <5; $i++) {
    for ($j=0; $j <5; $j++) {
    $m[$i]+=$vec[$j]*$mat[$i][$j];
    }
  }
return $m;
}
function vectormultsum($v1,$v2){
  $sum=0;
  for ($i=0; $i <5; $i++) {
      $v=$v1[$i]*$v2[$i];
      $sum+=$v;

  }
  return $sum;
}

     ?>

  </body>
</html>
