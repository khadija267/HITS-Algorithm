<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Enter File1:<input type="text" name="f1"><br>
      Enter File2:<input type="text" name="f2"><br>
      Enter File3:<input type="text" name="f3"><br>
      Enter File4:<input type="text" name="f4"><br>
      Enter File5:<input type="text" name="f5"><br>
      Enter no of iter:<input type="text" name="itr"><br>
      <button type="submit" name="generate">generate</button><br>
    </form>
    <?php
    if (isset($_POST['generate'])) {
   $f1=$_POST['f1'];
   $f2=$_POST['f2'];
   $f3=$_POST['f3'];
   $f4=$_POST['f4'];
   $f5=$_POST['f5'];
   $itr=$_POST['itr'];
   include "A.txt";
   include "B.txt";
   include "C.txt";
   include "D.txt";
   include "E.txt";
   $file1="A.txt";
   $file2="B.txt";
   $file3="C.txt";
   $file4="D.txt";
   $file5="E.txt";
   include "HITS.php";
   filehandling($file1,$f1);
   filehandling($file2,$f2);
   filehandling($file3,$f3);
   filehandling($file4,$f4);
   filehandling($file5,$f5);
   $docarray1=neglect($file1);
   $docarray2=neglect($file2);
   $docarray3=neglect($file3);
   $docarray4=neglect($file4);
   $docarray5=neglect($file5);
   $adj=array($docarray1,$docarray2,$docarray3,$docarray4,$docarray5);
   for ($i=0; $i <5 ; $i++) {
     for ($j=0; $j <5 ; $j++) {
     $adjt[$j][$i]=$adj[$i][$j];
   }
   }

    $h=array(1,1,1,1,1);
  for ($k=0; $k <$itr ; $k++) {
    $a = matrixmult($adjt,$h);
    for ($l=0; $l <5 ; $l++) {
      $a[$l]/=(sqrt(vectormultsum($a,$a)));
    }
    $h =matrixmult($adj,$a);
    for ($m=0; $m <5 ; $m++) {
      $h[$l]/=(sqrt(vectormultsum($h,$h)));
    }

   }
print_r($a);
print_r($h);

      }
     ?>
  </body>
</html>
