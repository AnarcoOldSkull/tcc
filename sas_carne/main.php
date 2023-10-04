<?php   

        $foot="";
        for($i=1;$i<=6;$i++){
        $foot .="<button class=\"btn indi";
        if($i==1){
        $foot.=" showin ";    
        } 
        $foot.="\" onclick=\"mainapresenta(".$i.")\">".$i."</button>";    
        }

  echo selecionar_corpo("",$foot,"");      
?>