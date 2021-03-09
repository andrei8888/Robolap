<!DOCTYPE html>
<html>
<?php include 'connect.php'; ?>
<head>
<title>Admin Page</title>
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="insert.css">
    <link rel="stylesheet" href="drop.css">
    <link rel="stylesheet" href="back.css">
    <link rel="stylesheet" href="back.css">
    <link rel="stylesheet" href="collapse.css">
</head>
<body style="background-image: url('icons/wall.jpg');">
<ul  style="list-style-type:none">
    <li><a href="intro.html"><img src="icons/robolap.png" style="height: 70px"></a></li>

</ul>
<ul style="list-style-type:none">
    <li>
        <button id="myBtn">Adauga laptop in baza de date</button>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
    			<form action="" method="post" class="mb-3">
                *required
                <ul style="list-style-type:none">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Compania Producatoare*</button>
                            <div class="dropdown-content">
                                <input type="radio" id="p1" name="prod" value=1>
                                <label for="p1">Lenovo</label><br>
                                <input type="radio" id="p2" name="prod" value=2>
                                <label for="p2">ASUS</label><br>
                                <input type="radio" id="p3" name="prod" value=3>
                                <label for="p3">Dell</label><br>
                                <input type="radio" id="p4" name="prod" value=4>
                                <label for="p4">HP</label><br>
                                <input type="radio" id="p5" name="prod" value=5>
                                <label for="p5">Acer</label><br>
                                <input type="radio" id="p6" name="prod" value=6>
                                <label for="p6">Apple</label><br>
                                <input type="radio" id="p7" name="prod" value=7>
                                <label for="p7">MSI</label><br>
                                <input type="radio" id="p8" name="prod" value=8>
                                <label for="p8">Clevo</label><br>
                                <input type="radio" id="p9" name="prod" value=9>
                                <label for="p9">Microsoft</label><br>
                                <input type="radio" id="p10" name="prod" value=10>
                                <label for="p10">Toshiba</label><br>
                                <input type="radio" id="p11" name="prod" value=11>
                                <label for="p11">Alienware</label><br>
                                <input type="radio" id="p12" name="prod" value=12>
                                <label for="p12">Razer</label><br>
                                <input type="radio" id="p13" name="prod" value=16>
                                <label for="p13">Huawei</label><br>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Cod Laptop*" id="cl" name="cod">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Pret(lei)*" id="pr" name="pret">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Tip Laptop*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="t1" name="tp" value=1>
                                    <label for="t1">Home</label><br>
                                    <input type="radio" id="t2" name="tp" value=2>
                                    <label for="t2">Ultraportabil</label><br>
                                    <input type="radio" id="t3" name="tp" value=3>
                                    <label for="t3">Business</label><br>
                                    <input type="radio" id="t4" name="tp" value=4>
                                    <label for="t4">Gaming</label><br>
                                    <input type="radio" id="t5" name="tp" value=5>
                                    <label for="t5">2in1</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Sistemul de Operare*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="ms" name="OS" value=1>
                                    <label for="ms">Windows</label><br>
                                    <input type="radio" id="ln" name="OS" value=2>
                                    <label for="ln">Linux</label><br>
                                    <input type="radio" id="mac" name="OS" value=3>
                                    <label for="mac">MacOS</label><br>
                                    <input type="radio" id="fr" name="OS" value=4>
                                    <label for="fr">Free DOS</label><br>
                                    <input type="radio" id="efi" name="OS" value=5>
                                    <label for="efi">EFI Shell</label><br>
                                    <input type="radio" id="end" name="OS" value=6>
                                    <label for="end">Endless OS</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Procesor*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="intel1" name="proc" value=1>
                                    <label for="intel1">Intel Celeron</label><br>
                                    <input type="radio" id="intel6" name="proc" value=2>
                                    <label for="intel6">Intel Pentium</label><br>
                                    <input type="radio" id="intel2" name="proc" value=3>
                                    <label for="intel2">Intel Core i3</label><br>
                                    <input type="radio" id="intel3" name="proc" value=4>
                                    <label for="intel3">Intel Core i5</label><br>
                                    <input type="radio" id="intel4" name="proc" value=5>
                                    <label for="intel4">Intel Core i7</label><br>
                                    <input type="radio" id="intel5" name="proc" value=6>
                                    <label for="intel5">Intel Core i9</label><br>
                                    <input type="radio" id="amd1" name="proc" value=7>
                                    <label for="amd1">AMD Ryzen 3</label><br>
                                    <input type="radio" id="amd2" name="proc" value=8>
                                    <label for="amd2">AMD Ryzen 5</label><br>
                                    <input type="radio" id="amd3" name="proc" value=9>
                                    <label for="amd3">AMD Ryzen 7</label><br>
                                    <input type="radio" id="amd4" name="proc" value=10>
                                    <label for="amd4">AMD Ryzen 9</label><br>
                                    <input type="radio" id="amd5" name="proc" value=11>
                                    <label for="amd5">AMD Athlon</label><br>
                                    <input type="radio" id="amd6" name="proc" value=12>
                                    <label for="amd6">AMD A9-Series</label><br>
                                    <input type="radio" id="amd7" name="proc" value=13>
                                    <label for="amd7">AMD A4-Series</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Model procesor" id="cod_proc" name="cod_proc">
                            </div>
                        </li>
                        <li>
                        <div class="dropdown">
                                <button class="dropbtn">Memorie RAM*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="m1" name="mem" value=1>
                                    <label for="m1">4 GB</label><br>
                                    <input type="radio" id="m2" name="mem" value=2>
                                    <label for="m2">6 GB</label><br>
                                    <input type="radio" id="m3" name="mem" value=3>
                                    <label for="m3">8 GB</label><br>
                                    <input type="radio" id="m4" name="mem" value=4>
                                    <label for="m4">12 GB</label><br>
                                    <input type="radio" id="m5" name="mem" value=5>
                                    <label for="m5">16 GB</label><br>
                                    <input type="radio" id="m6" name="mem" value=6>
                                    <label for="m6">32 GB</label><br>
                                    <input type="radio" id="m7" name="mem" value=7>
                                    <label for="m7">48 GB</label><br>
                                    <input type="radio" id="m8" name="mem" value=8>
                                    <label for="m8">64 GB</label><br>
                                </div>
                        </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Compania Producatoare a Placii video*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="pv1" name="prod_pv" value=13>
                                    <label for="pv1">Intel</label><br>
                                    <input type="radio" id="pv2" name="prod_pv" value=14>
                                    <label for="pv2">AMD</label><br>
                                    <input type="radio" id="pv3" name="prod_pv" value=15>
                                    <label for="pv3">Nvidia</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Cod Placa video*" id="cod_pv" name="cod_pv">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Tipul Placii Video</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="tpv1" name="tp_pv" value="Integrata">
                                    <label for="tpv1">Integrata</label><br>
                                    <input type="radio" id="tpv2" name="tp_pv" value="Dedicata">
                                    <label for="tpv2">Dedicata</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Diagonala*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="dg1" name="dg" value=1>
                                    <label for="dg1">12.0'</label><br>
                                    <input type="radio" id="dg2" name="dg" value=2>
                                    <label for="dg2">12.3'</label><br>
                                    <input type="radio" id="dg3" name="dg" value=3>
                                    <label for="dg3">12.5'</label><br>
                                    <input type="radio" id="dg4" name="dg" value=4>
                                    <label for="dg4">13.0'</label><br>
                                    <input type="radio" id="dg5" name="dg" value=5>
                                    <label for="dg5">13.3'</label><br>
                                    <input type="radio" id="dg6" name="dg" value=6>
                                    <label for="dg6">13.4'</label><br>
                                    <input type="radio" id="dg7" name="dg" value=7>
                                    <label for="dg7">13.5'</label><br>
                                    <input type="radio" id="dg8" name="dg" value=8>
                                    <label for="dg8">13.9'</label><br>
                                    <input type="radio" id="dg9" name="dg" value=9>
                                    <label for="dg9">14.0'</label><br>
                                    <input type="radio" id="dg10" name="dg" value=10>
                                    <label for="dg10">15.6'</label><br>
                                    <input type="radio" id="dg11" name="dg" value=11>
                                    <label for="dg11">16.0'</label><br>
                                    <input type="radio" id="dg12" name="dg" value=12>
                                    <label for="dg12">17.0'</label><br>
                                    <input type="radio" id="dg13" name="dg" value=13>
                                    <label for="dg13">17.3'</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Rata de refresh(Hz)" id="rt_ref" name="rt_ref">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" placeholder="Stocare (GB)*" id="stc" name="stc">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Disponibil in stoc*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="s1" name="d_s" value=1>
                                    <label for="s1">Da</label><br>
                                    <input type="radio" id="s2" name="d_s" value=0>
                                    <label for="s2">Nu</label><br>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <input type="submit" name="submit" value="Adauga">
                    </form>
					</div>
            </div>
        </div>
    </li>
    <li><br>
    <button id="myBtn1">Sterge laptop din baza de date</button>
    <div id="myModal1" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!--<div class="dropdown">-->
                <form method="post", action="">
                <?php 
                    $sql="SELECT B.Nume_Producator, A.Cod_Laptop FROM Laptopuri A LEFT JOIN Producatori B ON A.Id_Producator=B.Id_Producator";
                    $result=sqlsrv_query($conn,$sql);
                    $n_lap=0;
                    while( $row = sqlsrv_fetch_array( $result) ) {
                        $Nume_Producator=$row['Nume_Producator'];
                        $Cod_Laptop=$row['Cod_Laptop'];
                        echo "<input type='checkbox' id='cod$n_lap' name='cod_st[]' value='$Cod_Laptop' >
                                <label for='cod$n_lap'>$Nume_Producator $Cod_Laptop</label><br>";
                        $n_lap=$n_lap+1;
                    }
                ?>
                
            <input id="stbtn" type="submit" style="background-color:rgb(227, 55, 16)" name="submit_st" value="Sterge">
            </form>
        </div>
    </div>
    </li>
    <li><br>
    <button id="myBtn2">Actualizeaza specificatii laptop din baza de date</button>
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!--<div class="dropdown">-->
                <form method="post", action="">
                <?php 
                    $sql="SELECT B.Nume_Producator, A.Cod_Laptop FROM Laptopuri A LEFT JOIN Producatori B ON A.Id_Producator=B.Id_Producator";
                    $result=sqlsrv_query($conn,$sql);
                    $n_lap=0;
                    while( $row = sqlsrv_fetch_array( $result) ) {
                        $Nume_Producator=$row['Nume_Producator'];
                        $Cod_Laptop=$row['Cod_Laptop'];
                        echo "<input type='radio' id='cod_a$n_lap' name='cod_act' value='$Cod_Laptop'>
                                <label for='cod_a$n_lap'>$Nume_Producator $Cod_Laptop</label><br>";
                        $n_lap=$n_lap+1;
                    }
                ?>
            <input id="actbtn" type="submit" style="background-color:#075A86" name="submit_ac" value="Actualizeaza informatii->">
            </form>
        </div>
    </div>
    </li>
    <li><br>
    <?php 
        if(isset($_POST['submit_ac'])){
            if(isset($_POST['cod_act'])){
                global $cod_act;
                $cod_act=$_POST['cod_act'];
                $query="SELECT * from Laptopuri A JOIN Diagonale B ON A.Id_Diagonala=B.Id_Diagonala WHERE Cod_Laptop='$cod_act'";
                $res_query=sqlsrv_query($conn,$query);
                $array_act=sqlsrv_fetch_array($res_query);
            }
            else{
                echo "Nu ati selectat laptopul!";
            }
        }
    ?>
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!--<div class="dropdown">-->
            <form action="" method="post" class="mb-3">
                <ul style="list-style-type:none">
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Compania Producatoare</button>
                            <div class="dropdown-content">
                                <input type="radio" id="p1_" name="prod_" value=1 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==1) echo 'checked';?>>
                                <label for="p1_">Lenovo</label><br>
                                <input type="radio" id="p2_" name="prod_" value=2 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==2) echo 'checked';?>>
                                <label for="p2_">ASUS</label><br>
                                <input type="radio" id="p3_" name="prod_" value=3 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==3) echo 'checked';?>>
                                <label for="p3_">Dell</label><br>
                                <input type="radio" id="p4_" name="prod_" value=4 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==4) echo 'checked';?>>
                                <label for="p4_">HP</label><br>
                                <input type="radio" id="p5_" name="prod_" value=5 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==5) echo 'checked';?>>
                                <label for="p5_">Acer</label><br>
                                <input type="radio" id="p6_" name="prod_" value=6 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==6) echo 'checked';?>>
                                <label for="p6_">Apple</label><br>
                                <input type="radio" id="p7_" name="prod_" value=7 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==7) echo 'checked';?>>
                                <label for="p7_">MSI</label><br>
                                <input type="radio" id="p8_" name="prod_" value=8 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==8) echo 'checked';?>>
                                <label for="p8_">Clevo</label><br>
                                <input type="radio" id="p9_" name="prod_" value=9 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==9) echo 'checked';?>>
                                <label for="p9_">Microsoft</label><br>
                                <input type="radio" id="p10_" name="prod_" value=10 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==10) echo 'checked';?>>
                                <label for="p10_">Toshiba</label><br>
                                <input type="radio" id="p11_" name="prod_" value=11 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==11) echo 'checked';?>>
                                <label for="p11_">Alienware</label><br>
                                <input type="radio" id="p12_" name="prod_" value=12 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==12) echo 'checked';?>>
                                <label for="p12_">Razer</label><br>
                                <input type="radio" id="p13_" name="prod_" value=16 <?php if(isset($array_act['Id_Producator']) && $array_act['Id_Producator']==16) echo 'checked';?>>
                                <label for="p13_">Huawei</label><br>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" value="<?php if(isset($array_act['Cod_Laptop'])) echo $array_act['Cod_Laptop']?>" id="cl_d" name="cod_d" readonly>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" value="<?php if(isset($array_act['Cod_Laptop'])) echo $array_act['Cod_Laptop']?>" id="cl_" name="cod_">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <input type="text" value="<?php if(isset($array_act['Pret'])) echo $array_act['Pret']?>" id="pr_" name="pret_">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Tip Laptop</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="t1_" name="tp_" value=1 <?php if(isset($array_act['Id_Tip']) && $array_act['Id_Tip']==1) echo 'checked';?>>
                                    <label for="t1_">Home</label><br>
                                    <input type="radio" id="t2_" name="tp_" value=2 <?php if(isset($array_act['Id_Tip']) && $array_act['Id_Tip']==2) echo 'checked';?>>
                                    <label for="t2_">Ultraportabil</label><br>
                                    <input type="radio" id="t3_" name="tp_" value=3 <?php if(isset($array_act['Id_Tip']) && $array_act['Id_Tip']==3) echo 'checked';?>>
                                    <label for="t_3">Business</label><br>
                                    <input type="radio" id="t4_" name="tp_" value=4 <?php if(isset($array_act['Id_Tip']) && $array_act['Id_Tip']==4) echo 'checked';?>>
                                    <label for="t4_">Gaming</label><br>
                                    <input type="radio" id="t5_" name="tp_" value=5 <?php if(isset($array_act['Id_Tip']) && $array_act['Id_Tip']==5) echo 'checked';?>>
                                    <label for="t5_">2in1</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Sistemul de Operare</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="OS1_" name="OS_" value=1 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==1) echo 'checked';?>>
                                    <label for="OS1_">Windows</label><br>
                                    <input type="radio" id="OS2_" name="OS_" value=2 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==2) echo 'checked';?>>
                                    <label for="OS2_">Linux</label><br>
                                    <input type="radio" id="OS3_" name="OS_" value=3 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==3) echo 'checked';?>>
                                    <label for="OS3_">MacOS</label><br>
                                    <input type="radio" id="OS4_" name="OS_" value=4 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==4) echo 'checked';?>>
                                    <label for="OS4_">Free DOS</label><br>
                                    <input type="radio" id="OS6_" name="OS_" value=5 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==5) echo 'checked';?>>
                                    <label for="OS6_">EFI Shell</label><br>
                                    <input type="radio" id="OS5_" name="OS_" value=6 <?php if(isset($array_act['Id_SO']) && $array_act['Id_SO']==6) echo 'checked';?>>
                                    <label for="OS5_">Endless OS</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Procesor*</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="intel1_" name="proc_" value=1 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==1) echo 'checked';?>>
                                    <label for="intel1_">Intel Celeron</label><br>
                                    <input type="radio" id="intel6_" name="proc_" value=2 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==2) echo 'checked';?>>
                                    <label for="intel6_">Intel Pentium</label><br>
                                    <input type="radio" id="intel2_" name="proc_" value=3 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==3) echo 'checked';?>>
                                    <label for="intel2_">Intel Core i3</label><br>
                                    <input type="radio" id="intel3_" name="proc_" value=4 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==4) echo 'checked';?>>
                                    <label for="intel3_">Intel Core i5</label><br>
                                    <input type="radio" id="intel4_" name="proc_" value=5 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==5) echo 'checked';?>>
                                    <label for="intel4_">Intel Core i7</label><br>
                                    <input type="radio" id="intel5_" name="proc_" value=6 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==6) echo 'checked';?>>
                                    <label for="intel5_">Intel Core i9</label><br>
                                    <input type="radio" id="amd1_" name="proc_" value=7 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==7) echo 'checked';?>>
                                    <label for="amd1_">AMD Ryzen 3</label><br>
                                    <input type="radio" id="amd2_" name="proc_" value=8 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==8) echo 'checked';?>>
                                    <label for="amd2_">AMD Ryzen 5</label><br>
                                    <input type="radio" id="amd3_" name="proc_" value=9 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==9) echo 'checked';?>>
                                    <label for="amd3_">AMD Ryzen 7</label><br>
                                    <input type="radio" id="amd4_" name="proc_" value=10 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==10) echo 'checked';?>>
                                    <label for="amd4_">AMD Ryzen 9</label><br>
                                    <input type="radio" id="amd5_" name="proc_" value=11 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==11) echo 'checked';?>>
                                    <label for="amd5_">AMD Athlon</label><br>
                                    <input type="radio" id="amd6_" name="proc_" value=12 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==12) echo 'checked';?>>
                                    <label for="amd6_">AMD A9-Series</label><br>
                                    <input type="radio" id="amd7_" name="proc_" value=13 <?php if(isset($array_act['Id_Procesor']) && $array_act['Id_Procesor']==13) echo 'checked';?>>
                                    <label for="amd7_">AMD A4-Series</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">Model Procesor
                                <input type="text" value=" <?php if(isset($array_act['Model_Procesor'])) echo $array_act['Model_Procesor'];?>" id="cod_proc_" name="cod_proc_">
                            </div>
                        </li>
                        <li>
                        <div class="dropdown">
                                <button class="dropbtn">Memorie RAM</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="m1_" name="mem_" value=1  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==1) echo 'checked';?>>
                                    <label for="m1_">4 GB</label><br>
                                    <input type="radio" id="m2_" name="mem_" value=2  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==2) echo 'checked';?>>
                                    <label for="m2_">6 GB</label><br>
                                    <input type="radio" id="m3_" name="mem_" value=3  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==3) echo 'checked';?>>
                                    <label for="m3_">8 GB</label><br>
                                    <input type="radio" id="m4_" name="mem_" value=4  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==4) echo 'checked';?>>
                                    <label for="m4_">12 GB</label><br>
                                    <input type="radio" id="m5_" name="mem_" value=5  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==5) echo 'checked';?>>
                                    <label for="m5_">16 GB</label><br>
                                    <input type="radio" id="m6_" name="mem_" value=6  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==6) echo 'checked';?>>
                                    <label for="m6_">32 GB</label><br>
                                    <input type="radio" id="m7_" name="mem_" value=7  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==7) echo 'checked';?>>
                                    <label for="m7_">48 GB</label><br>
                                    <input type="radio" id="m8_" name="mem_" value=8  <?php if(isset($array_act['Id_RAM']) && $array_act['Id_RAM']==8) echo 'checked';?>>
                                    <label for="m8_">64 GB</label><br>
                                </div>
                        </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Compania Producatoare a Placii video</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="pv1_" name="prod_pv_" value=13 <?php if(isset($array_act['Id_Producator_Placa_Video']) && $array_act['Id_Producator_Placa_Video']==13) echo 'checked';?>>
                                    <label for="pv1_">Intel</label><br>
                                    <input type="radio" id="pv2_" name="prod_pv_" value=14 <?php if(isset($array_act['Id_Producator_Placa_Video']) && $array_act['Id_Producator_Placa_Video']==14) echo 'checked';?>>
                                    <label for="pv2_">AMD</label><br>
                                    <input type="radio" id="pv3_" name="prod_pv_" value=15 <?php if(isset($array_act['Id_Producator_Placa_Video']) && $array_act['Id_Producator_Placa_Video']==15) echo 'checked';?>>
                                    <label for="pv3_">Nvidia</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">Cod Placa Video
                                <input type="text" value="<?php if(isset($array_act['Cod_Placa'])) echo $array_act['Cod_Placa'];?>" id="cod_pv_" name="cod_pv_">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Tipul Placii Video</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="tpv1_" name="tp_pv_" value="Integrata" <?php if(isset($array_act['Tip_Placa']) && str_replace(' ', '', $array_act['Tip_Placa'])=="Integrata") echo 'checked';?>>
                                    <label for="tpv1_">Integrata</label><br>
                                    <input type="radio" id="tpv2_" name="tp_pv_" value="Dedicata" <?php if(isset($array_act['Tip_Placa']) && str_replace(' ', '', $array_act['Tip_Placa'])=="Dedicata") echo 'checked';?>>
                                    <label for="tpv2_">Dedicata</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Diagonala</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="dg1_" name="dg_" value=12.0 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==12.0) echo 'checked';?>>
                                    <label for="dg1_">12.0'</label><br>
                                    <input type="radio" id="dg2_" name="dg_" value=12.3 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==12.3) echo 'checked';?>>
                                    <label for="dg2_">12.3'</label><br>
                                    <input type="radio" id="dg3_" name="dg_" value=12.5 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==12.5) echo 'checked';?>>
                                    <label for="dg3_">12.5'</label><br>
                                    <input type="radio" id="dg4_" name="dg_" value=13.0 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==13.0) echo 'checked';?>>
                                    <label for="dg4_">13.0'</label><br>
                                    <input type="radio" id="dg5_" name="dg_" value=13.3 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==13.3) echo 'checked';?>>
                                    <label for="dg5_">13.3'</label><br>
                                    <input type="radio" id="dg6_" name="dg_" value=13.4 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==13.4) echo 'checked';?>>
                                    <label for="dg6_">13.4'</label><br>
                                    <input type="radio" id="dg7_" name="dg_" value=13.5 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==13.5) echo 'checked';?>>
                                    <label for="dg7_">13.5'</label><br>
                                    <input type="radio" id="dg8_" name="dg_" value=13.9 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==13.9) echo 'checked';?>>
                                    <label for="dg8_">13.9'</label><br>
                                    <input type="radio" id="dg9_" name="dg_" value=14.0 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==14.0) echo 'checked';?>>
                                    <label for="dg9_">14.0'</label><br>
                                    <input type="radio" id="dg10_" name="dg_" value=15.6 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==15.6) echo 'checked';?>>
                                    <label for="dg10_">15.6'</label><br>
                                    <input type="radio" id="dg11_" name="dg_" value=16.0 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==16.0) echo 'checked';?>>
                                    <label for="dg11_">16.0'</label><br>
                                    <input type="radio" id="dg12_" name="dg_" value=17.0 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==17.0) echo 'checked';?>>
                                    <label for="dg12_">17.0'</label><br>
                                    <input type="radio" id="dg13_" name="dg_" value=17.3 <?php if(isset($array_act['Id_Diagonala']) && $array_act['Diagonala_Ecran']==17.3) echo 'checked';?>>
                                    <label for="dg13_">17.3'</label><br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">Rata de refresh(Hz)
                                <input type="text" value="<?php if(isset($array_act['Rata_de_refresh'])) echo $array_act['Rata_de_refresh'];?>" id="rt_ref_" name="rt_ref_">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">Stocare(GB)
                                <input type="text" value=" <?php if(isset($array_act['Stocare'])) echo $array_act['Stocare'];?>" id="stc_" name="stc_">
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Disponibil in stoc</button>
                                <div class="dropdown-content">
                                    <input type="radio" id="s1_" name="d_s_" value=1  <?php if(isset($array_act['Disponibil_in_stoc']) && $array_act['Disponibil_in_stoc']==1) echo 'checked';?>>
                                    <label for="s1_">Da</label><br>
                                    <input type="radio" id="s2_" name="d_s_" value=0 <?php if(isset($array_act['Disponibil_in_stoc']) && $array_act['Disponibil_in_stoc']==0) echo 'checked';?>>
                                    <label for="s2_">Nu</label><br>
                                </div>
                            </div>
                        </li>
            <input id="act1btn" type="submit"  name="submit_ac1_" value="Actualizeaza informatii pentru laptopul selectat">
            </form>
        </div>
    </div>
    </li>
    <li>
    <button id="myBtn4">Statistici</button>
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <button type="button" class="collapsible">Statistici preturi</button>
                <div class="content">
                
                    <button type="button" class="collapsible">Cel mai ieftin respectiv cel mai scump laptop</button>
                    <div class="content1">
                        <p>Cel mai ieftin:
                            <?php
                                $query="SELECT TOP 1 B.Nume_Producator, A.Cod_Laptop,A.Pret FROM Laptopuri A JOIN Producatori B ON A.Id_Producator=B.Id_Producator ORDER BY A.Pret";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['Nume_Producator']." ".$res['Cod_Laptop']." (".$res['Pret']." lei)";
                            ?>
                            <br>
                            Cel mai scump:
                            <?php
                                $query="SELECT TOP 1 B.Nume_Producator, A.Cod_Laptop,A.Pret FROM Laptopuri A JOIN Producatori B ON A.Id_Producator=B.Id_Producator ORDER BY A.Pret DESC";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['Nume_Producator']." ".$res['Cod_Laptop']." (".$res['Pret']." lei)";
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Pretul mediu al laptopurilor</button>
                    <div class="content1">
                        <p>Toate:
                            <?php
                                $query="SELECT AVG(B.Pret) AS PretMediu FROM Laptopuri B";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['PretMediu']." lei";
                            ?>
                            <br>
                            Cele din stoc:
                            <?php
                                $query="SELECT AVG(B.Pret) AS PretMediu FROM Laptopuri B where B.Disponibil_in_stoc=1";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['PretMediu']." lei";
                            ?>
                        </p>
                        
                    </div>
                    <button type="button" class="collapsible">Numarul de laptopuri cu pret mai mare decat media preturilor laptopurilor cu pret intre cele doua valori introduse de administrator (<?php echo $_POST['fname']."-".$_POST['fname1']?>)*</button>
                    <div class="content1">
                        <p>
                            <?php
                            if(isset($_POST['fname']) && isset($_POST['fname1'])){
                                $p1=$_POST['fname'];
                                $p2=$_POST['fname1'];
                                $query="SELECT COUNT(*) AS NrLap FROM Laptopuri A WHERE A.Pret >= (SELECT AVG(B.Pret) FROM Laptopuri B WHERE B.Pret BETWEEN $p1 AND $p2) AND A.Pret BETWEEN $p1 AND $p2";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['NrLap'];
                            }
                            else 
                                echo "Nu ati introdus valorile";
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Numarul de laptopuri cu pret mai mare respectiv mai mic decat media*</button>
                    <div class="content1">
                        <p>Toate (pret mai MARE decat media):
                            <?php
                                $query="SELECT COUNT(*) AS NrLap FROM Laptopuri A WHERE A.Pret >= (SELECT AVG(B.Pret) FROM Laptopuri B)";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['NrLap'];
                            ?>
                            <br>
                            Cele din stoc (pret mai MARE decat media):
                            <?php
                                $query="SELECT COUNT(*) AS NrLap FROM Laptopuri A WHERE A.Pret >= (SELECT AVG(B.Pret) FROM Laptopuri B where B.Disponibil_in_stoc=1) AND A.Disponibil_in_stoc=1";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['NrLap'];
                            ?>
                            <br>
                            Toate (pret mai MIC decat media):
                            <?php
                                $query="SELECT COUNT(*) AS NrLap FROM Laptopuri A WHERE A.Pret < (SELECT AVG(B.Pret) FROM Laptopuri B)";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['NrLap'];
                            ?>
                            <br>
                            Cele din stoc (pret mai MIC decat media):
                            <?php
                                $query="SELECT COUNT(*) AS NrLap FROM Laptopuri A WHERE A.Pret < (SELECT AVG(B.Pret) FROM Laptopuri B where B.Disponibil_in_stoc=1) AND A.Disponibil_in_stoc=1";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['NrLap'];
                            ?>
                        </p>
                    </div>
                    
                </div>
            <br>
            <button type="button" class="collapsible">Statistici Memorii RAM</button>
                <div class="content">
                    <button type="button" class="collapsible">Numarul si numele laptopurilor cu cea mai multa, respectiv cea mai putina memorie RAM disponibila*</button>
                    <div class="content1">
                        
                        <p>Cu cea mai putina
                            <?php
                                $query="SELECT MIN(B.Memorie) AS MinMem FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo "(".$res['MinMem']."GB):  ";
                                $query="SELECT COUNT(*) AS Nr FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM
                                            WHERE B.Memorie = (SELECT MIN(B.Memorie) FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM)";
                                $result=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $result['Nr'];
                                $query="SELECT A.Cod_Laptop,C.Nume_Producator FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM JOIN Producatori C ON A.Id_Producator=C.Id_Producator WHERE B.Memorie = (SELECT MIN(B.Memorie) FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM)";
                                $res=sqlsrv_query($conn,$query);
                                echo " ( ";
                                while($result=sqlsrv_fetch_array($res))
                                    echo $result['Nume_Producator']." ".$result['Cod_Laptop'].", ";
                                echo ")";
                            ?>
                            <br>
                            Cu cea mai multa
                            <?php
                                $query="SELECT MAX(B.Memorie) AS MaxMem FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo "(".$res['MaxMem']."GB):  ";
                                $query="SELECT COUNT(*) AS Nr FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM WHERE B.Memorie = (SELECT MAX(B.Memorie) FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM)";
                                $result=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $result['Nr'];
                                $query="SELECT A.Cod_Laptop,C.Nume_Producator FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM JOIN Producatori C ON A.Id_Producator=C.Id_Producator WHERE B.Memorie = (SELECT MAX(B.Memorie) FROM Laptopuri A JOIN [Memorie RAM] B ON A.Id_RAM=B.Id_RAM)";
                                $res=sqlsrv_query($conn,$query);
                                echo " ( ";
                                while($result=sqlsrv_fetch_array($res))
                                    echo $result['Nume_Producator']." ".$result['Cod_Laptop'].", ";
                                echo ")";
                            ?>
                        </p>
                    </div>
                </div>
            <br>
            <button type="button" class="collapsible">Statistici cele mai populare componente</button>
                <div class="content">
                    <button type="button" class="collapsible">Cel mai folosit tip de procesor*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT C.Nume_Producator,B.Cod_Procesor FROM Procesoare B JOIN Producatori C ON B.Id_Producator=C.Id_Producator
                                    WHERE B.Id_Procesor=(SELECT TOP 1 A.Id_Procesor FROM Laptopuri A GROUP BY A.Id_Procesor ORDER BY COUNT(A.Id_Procesor) DESC)";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['Nume_Producator']." ".$res['Cod_Procesor'];
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Cea mai folosita cantitate de memorie RAM*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT B.Memorie FROM [Memorie RAM] B 
                                WHERE B.Id_RAM=(SELECT TOP 1 A.Id_RAM FROM Laptopuri A GROUP BY A.Id_RAM ORDER BY COUNT(A.Id_RAM) DESC)";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['Memorie']. " GB";
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Cea mai folosita diagonala*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT B.Diagonala_Ecran FROM Diagonale B
                                WHERE B.Id_Diagonala =(SELECT TOP 1 A.Id_Diagonala FROM Laptopuri A GROUP BY A.Id_Diagonala ORDER BY COUNT(A.Id_Diagonala) DESC)";
                                $res=sqlsrv_fetch_array(sqlsrv_query($conn,$query));
                                echo $res['Diagonala_Ecran']. " inch";
                            ?>
                        </p>
                    </div>
                </div>
            <br>
            <button type="button" class="collapsible">Statistici cei mai populari producatori</button>
                <div class="content">
                    <button type="button" class="collapsible">Cel/Cei mai popular/i producator/i de laptop*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT Nume_Producator FROM Producatori WHERE Id_Producator in
                                            (SELECT Id_Producator FROM Laptopuri GROUP BY Id_Producator HAVING COUNT(Id_Producator)=
                                            (SELECT TOP 1 COUNT(Id_Producator) FROM Laptopuri  GROUP BY Id_Producator ORDER BY COUNT(Id_Producator) DESC ))";
                                $resultat=sqlsrv_query($conn,$query);
                                while($res=sqlsrv_fetch_array($resultat))
                                    echo $res['Nume_Producator']." | ";
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Cel/Cei mai popular/i producator/i de procesoare pentru laptopuri*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT B.Nume_Producator,A.Cod_Procesor FROM Procesoare A JOIN Producatori B ON A.Id_Producator=B.Id_Producator WHERE A.Id_Procesor=
                                            (SELECT Id_Procesor FROM Laptopuri GROUP BY Id_Procesor HAVING COUNT(Id_Procesor)=
                                            (SELECT TOP 1 COUNT(Id_Procesor) FROM Laptopuri GROUP BY Id_Procesor ORDER BY  COUNT(Id_Procesor) DESC ))";
                                $resultat=sqlsrv_query($conn,$query);
                                while($res=sqlsrv_fetch_array($resultat))
                                    echo $res['Nume_Producator']." | ";
                            ?>
                        </p>
                    </div>
                    <button type="button" class="collapsible">Cel/Cei mai popular/i producator/i de placi video pentru laptopuri*</button>
                    <div class="content1">
                        <p>
                            <?php
                                $query="SELECT Nume_Producator FROM Producatori where Id_Producator in
                                            (SELECT Id_Producator_Placa_Video FROM Laptopuri GROUP BY Id_Producator_Placa_Video HAVING COUNT(Id_Producator_Placa_Video)=
                                            (SELECT TOP 1 COUNT(Id_Producator_Placa_Video) FROM Laptopuri  GROUP BY Id_Producator_Placa_Video ORDER BY COUNT(Id_Producator_Placa_Video) DESC ))";
                                $resultat=sqlsrv_query($conn,$query);
                                while($res=sqlsrv_fetch_array($resultat))
                                    echo $res['Nume_Producator']." | ";
                            ?>
                        </p>
                    </div>
                </div>
            <br>
            
            <button type="button" class="collapsible">Rezolutii si Rata de refresh</button>
            <div class="content1">
                <p>
                    <?php
                        $query="SELECT * FROM Diagonale ORDER BY Id_Diagonala";
                        $result=sqlsrv_query($conn,$query);
                        while($res=sqlsrv_fetch_array($result)){
                            echo $res['Id_Diagonala']." | ".$res['Diagonala_Ecran']." | ".$res['Rata_de_refresh']."<br>";
                        }
                    ?>
                </p>
            </div>

            </div>
        </div>
    </div>
    </li>
    <li><br>
        <form action="" method="post">
            <label for="fname">Pret min introdus de administrator:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="fname1">Pret max introdus de administrator:</label>
            <input type="text" id="fname1" name="fname1"><br><br>
            <input type="submit" value="Submit">
        </form>
        
        <!--</form>-->
        </div>
    </div>
    </li>
</ul>

<?php
if(isset($_POST['submit'])){
    $valid=1;
    if(isset($_POST["prod"])){
        echo "Producator_Laptop: ".$_POST["prod"]."<br>"; $prod=$_POST["prod"];}
    else {"<text style='color:red'>Nu ati selectat Producatorul laptopului</text><br>";$valid=0;}
    if(isset($_POST["cod"])){
        echo "Cod_Laptop: ".$_POST["cod"]."<br>";$cod=$_POST["cod"];}
    else {echo "<text style='color:red'>Nu ati introdus codul laptopului</text><br>";$valid=0;}
    if(isset($_POST["pret"])){
        echo "Pret: ".$_POST["pret"]."<br>";$pret=$_POST["pret"];}
    else {echo "<text style='color:red'>Nu ati introdus pretul laptopului</text><br>";$valid=0;}
    if(isset($_POST["tp"])){
        echo "Tip_Laptop: ".$_POST["tp"]."<br>";$tp=$_POST["tp"];}
    else {echo "<text style='color:red'>Nu ati selectat tipul laptopului</text><br>";$valid=0;}
    if(isset($_POST["OS"])){
        echo "Sistemul_de_Operare ".$_POST["OS"]."<br>";$OS=$_POST["OS"];}
    else {echo "<text style='color:red'>Nu ati selectat sistemul de operare</text><br>";$valid=0;}
    if(isset($_POST["proc"])){
        echo "Procesorul: ".$_POST["proc"]."<br>";$proc=$_POST["proc"];}
    else {echo "<text style='color:red'>Nu ati selectat procesorul</text><br>";$valid=0;}
    if(isset($_POST['cod_proc'])){
        echo "Model Procesor: ".$_POST['cod_proc']."<br>"; $mod_proc="'".$_POST['cod_proc']."'";
    }
    else $mod_proc="NULL";
    if(isset($_POST["mem"])){
        echo "Memoria ".$_POST["mem"]."<br>";$mem=$_POST["mem"];}
    else {echo "<text style='color:red'>Nu ati selectat memoria RAM</text><br>";$valid=0;}
    if(isset($_POST["prod_pv"])){
        echo "Producator_Placa_Video ".$_POST["prod_pv"]."<br>";$prod_pv=$_POST["prod_pv"];}
    else {echo "<text style='color:red'>Nu ati selectat producatorul placii video</text><br>";$valid=0;}
    if(isset($_POST["cod_pv"])){
        echo "Cod_Placa_Video: ".$_POST["cod_pv"]."<br>";$cod_pv=$_POST["cod_pv"];}
    else {echo "<text style='color:red'>Nu ati introdus codul placii video</text><br>";$valid=0;}
    if(isset($_POST["tp_pv"])){
        echo "Tip_Placa_Video ".$_POST["tp_pv"]."<br>";$tp_pv=$_POST["tp_pv"];}
    else $tp_pv="Integrata";
    if(isset($_POST["dg"])){
        echo "Diagonala ".$_POST["dg"]."<br>";$dg=$_POST["dg"];}
    else {echo "<text style='color:red'>Nu ati selectat diagonala</text><br>";$valid=0;}
    if(isset($_POST["stc"])){
        echo "Stocare ".$_POST["stc"]."<br>";$stc=$_POST["stc"];}
    else {echo "<text style='color:red'>Nu ati introdus capacitatea memoriei de stocare</text><br>";$valid=0;}
    if(!empty($_POST['rt_ref'])){
        echo "Rata_de_refresh: ".$_POST['rt_ref']."<br>";
        $rf=$_POST['rt_ref'];
            if($_POST['dg']==1) $diag=12;
            if($_POST['dg']==2) $diag=12.3;
            if($_POST['dg']==3) $diag=12.5;
            if($_POST['dg']==4) $diag=13;
            if($_POST['dg']==5) $diag=13.3;
            if($_POST['dg']==6) $diag=13.4;
            if($_POST['dg']==7) $diag=13.5;
            if($_POST['dg']==8) $diag=13.9;
            if($_POST['dg']==9) $diag=14;
            if($_POST['dg']==10) $diag=15.6;
            if($_POST['dg']==11) $diag=16;
            if($_POST['dg']==12) $diag=17;
            if($_POST['dg']==13) $diag=17.3;
            $query1="INSERT INTO Diagonale VALUES($diag,$rf)";
            $result=sqlsrv_query($conn,$query1);
            $dg_query=sqlsrv_query($conn,"SELECT Id_Diagonala FROM Diagonale 
                                                WHERE Diagonala_Ecran=$diag AND Rata_de_refresh=$rf");
            echo $dg_query;
            $dgl=sqlsrv_fetch_array($dg_query);
            $dg=$dgl['Id_Diagonala'];
            echo $dg;
    }
        
    
    if(isset($_POST["d_s"])){
        echo "Disponibil_in_stoc: ".$_POST["d_s"]."<br>";$d_s=$_POST["d_s"];}
    else {echo "Nu ati selectat disponibilitatea laptopului<br>";$valid=0;}
    if($valid){
            $query="INSERT INTO Laptopuri VALUES('$cod',$prod,$pret,$tp,$OS,$proc,$mod_proc,$mem,$prod_pv,'$cod_pv','$tp_pv',
                                                                            $dg,$stc,$d_s)";
        //echo $query;
        $result=sqlsrv_query($conn,$query);
    }
}

if(isset($_POST['submit_st'])){
    if(isset($_POST['cod_st'])){
        $cd=$_POST['cod_st'];
        $query="DELETE FROM Laptopuri WHERE Laptopuri.Cod_Laptop IN ('" . implode('\',', $cd) . "')";
        echo $query;
        sqlsrv_query($conn,$query);
        echo "Laptopurile ".implode(',', $cd)." au fost sterse cu succes";
    }
}

if(isset($_POST['submit_ac1_'])){
    $cod_act=$_POST['cod_d'];
    $Cod_Laptop=$_POST['cod_'];
    $Id_Producator=$_POST['prod_'];
    $Pret=$_POST['pret_'];
    $Id_Tip=$_POST['tp_'];
    $Id_SO=$_POST['OS_'];
    $Id_Procesor=$_POST['proc_'];
    $Model_Procesor=$_POST['cod_proc_'];
    $Id_RAM=$_POST['mem_'];
    $Id_Producator_Placa_Video=$_POST['prod_pv_'];
    $Cod_Placa=$_POST['cod_pv_'];
    $Tip_Placa=$_POST['tp_pv_'];
    $Diagonala=$_POST['dg_'];
    $Rata_de_refresh=$_POST['rt_ref_'];
    $Stocare=$_POST['stc_'];
    $Disponibil_in_stoc=$_POST['d_s_'];
        if(!empty($Rata_de_refresh)){
            $query1="INSERT INTO Diagonale VALUES($Diagonala,$Rata_de_refresh)";
            $result=sqlsrv_query($conn,$query1);
            $dg_query=sqlsrv_query($conn,"SELECT Id_Diagonala FROM Diagonale 
                                                WHERE Diagonala_Ecran=$Diagonala AND Rata_de_refresh=$Rata_de_refresh");
                                                $da=1;
        }
        else{
            $query1="INSERT INTO Diagonale (Diagonala_Ecran) VALUES($Diagonala)";
            $result=sqlsrv_query($conn,$query1);
            $dg_query=sqlsrv_query($conn,"SELECT Id_Diagonala FROM Diagonale 
                                                WHERE Diagonala_Ecran=$Diagonala");
                                                $da=0;
        }
        echo $query1."<br>".$da."<br>";
            $Id_Diagonala_ar=sqlsrv_fetch_array($dg_query);
            $Id_Diagonala=$Id_Diagonala_ar['Id_Diagonala'];
    $update_query="UPDATE Laptopuri SET Cod_Laptop='$Cod_Laptop',
                                                                Id_Producator=$Id_Producator,
                                                                Pret=$Pret,
                                                                Id_Tip=$Id_Tip,
                                                                Id_SO=$Id_SO,
                                                                Id_Procesor=$Id_Procesor,
                                                                Model_Procesor='$Model_Procesor',
                                                                Id_RAM=$Id_RAM,
                                                                Id_Producator_Placa_Video=$Id_Producator_Placa_Video,
                                                                Cod_Placa='$Cod_Placa',
                                                                Tip_Placa='$Tip_Placa',
                                                                Id_Diagonala=$Id_Diagonala,
                                                                Stocare=$Stocare,
                                                                Disponibil_in_stoc=$Disponibil_in_stoc
                            WHERE Cod_Laptop='$cod_act'";
    //echo $update_query;
    $res=sqlsrv_query($conn,$update_query);
}

?>

<script>
    //document.getElementById("cl_d").disabled = true;

    var actual_lap=0;
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    var modal1 = document.getElementById("myModal1");
    var btn1 = document.getElementById("myBtn1");
    var span1 = document.getElementsByClassName("close")[1];
    btn1.onclick = function() {
        modal1.style.display = "block";
    }
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("myBtn2");
    var span2 = document.getElementsByClassName("close")[2];
    btn2.onclick = function() {
        modal2.style.display = "block";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    var modal3=document.getElementById("myModal3");
    var btn3 = document.getElementById("actbtn");
    var span3 = document.getElementsByClassName("close")[3];
    btn3.onclick = function() {
        modal2.style.display = "none";
    }
    span3.onclick = function() {
        modal3.style.display = "none";
    }
    actual_lap= <?php echo isset($_POST['cod_act']) ? json_encode("1", JSON_HEX_TAG) : json_encode("0", JSON_HEX_TAG); ?>;
    if(actual_lap==1){
        modal3.style.display = "block";
        actual_lap=0;
    }

    var modal4 = document.getElementById("myModal4");
    var btn4 = document.getElementById("myBtn4");
    var span4 = document.getElementsByClassName("close")[4];
    btn4.onclick = function() {
        modal4.style.display = "block";
    }
    span4.onclick = function() {
        modal4.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
        if (event.target == modal4) {
            modal4.style.display = "none";
        }
    }

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } 
        else {
            content.style.display = "block";
        }
    });
    }
</script>
</body>
</html>