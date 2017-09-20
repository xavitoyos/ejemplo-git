<?php
  function TodosNegativos($a){
    if(count($a)==0) return false;
    for($i=0; $i<count($a); $i++){
      if(!($a[$i]<0)) return false;
    }
    return true;
}
?>
