
<?php
$linear=[1,7,6,4,3,45];
$count=count($linear);
for($x=0;$x<=$count;$x++){
    for($y=0;$y<=$count-$x-1;$y++){
        if($linear[$y]>$linear[$y+1]){
         $temp=$linear[$y];
         $linear[$y]=$linear[$y+1];
         $linear[$y+1]=$temp;
        }
    }
}
for($o=0;$o<count($linear);$o++){
    echo"$linear[$o]<br>";
}
?>