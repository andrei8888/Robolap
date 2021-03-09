/*<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>*/

<?php
    // define variables and set to empty values
    $Comp_Prod = $Cod_Lap = $Pret = $Tip_Lap = "";
    $SO = $Proc = $RAM = $Comp_PV = $Cod_PV = "";
    $Tip_PV=$Diag=$Stoc=$D_Stoc="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Comp_Prod = test_input($_POST["prod"]);
        $Cod_Lap=test_input($_POST["cod"]);
        $Pret=test_input($_POST["pret"]);
        $Tip_Lap=test_input($_POST["tp"]);
        $SO=test_input($_POST["OS"]);
        $Proc=test_input($_POST["proc"]);
        $RAM=test_input($_POST["mem"]);
        $Comp_PV=test_input($_POST["prod_pv"]);
        $Cod_PV=test_input($_POST["cod_pv"]);
        $Tip_PV=test_input($_POST["tp_pv"]);
        $Diag=test_input($_POST["dg"]);
        $Stoc=test_input($_POST["stc"]);
        $D_Stoc=test_input($_POST["d_s"]);
    }
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    
    echo "<h2>Values:</h2>";
    echo "this";
    echo "@".$Comp_Prod."@" ; echo "<br>";
    echo "@".$Cod_Lap."@" ; echo "<br>";
    echo "@".$Pret."@" ; echo "<br>";
    echo "@".$Tip_Lap."@" ; echo "<br>";
    echo "@".$SO."@" ; echo "<br>";
    echo $Proc ; echo "<br>";
    echo $RAM ; echo "<br>";
    echo $Comp_PV ; echo "<br>";
    echo $Cod_PV = "" ; echo "<br>";
    echo $Tip_PV ; echo "<br>";
    echo $Diag ; echo "<br>";
    echo $Stoc ; echo "<br>";
    echo $D_Stoc="";
    echo "this";

?>