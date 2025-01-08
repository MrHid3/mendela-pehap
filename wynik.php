<?php
if($_POST["age"] < "10"){
    echo "jesteś dzieckiem";
}elseif($_POST["age"] < "20"){
    echo "jesteś nastolatkiem";
}elseif($_POST["age"] < "30"){
    echo "jesteś dorosły";
}elseif($_POST["age"] < "40"){
    echo "trzydziestka na karku";
}else{
    echo "starość nie radośc";
}
?>