<!DOCTYPE html>
<html>
<?php include 'connect.php'; ?>
<head>
<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<title>Robolap</title>
    <link rel="stylesheet" href="meta.css">
    <link rel="stylesheet" href="drop.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="lap_box.css">
    <link rel="stylesheet" href="select.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="back.css">
</head>
<style>
    fnt { font-family: 'Droid Sans', arial, serif; }
</style>
<body style="background-image: url('icons/wall.jpg')";>
<div class="bg">
<fnt>
<ul>
    <li><a class="active" href="intro.html"><img src="icons/robolap.png" style="height: 48px"></a></li>
    <li style="float:right"><a href="admin.html"><img src="icons/admin.png" style="height: 48px"></a></li>
</ul>
<div class="grid-container">
    <form action="front_page.php" method="post">
        <div class="grid-drops"><br>
            <div class="dropdown"><input type="image" src="icons/checked.png" alt="Submit" name="submit" value="Get Selected Values" style="height: 48px" text-align="center"></div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/stock.png"><br>Alegeti disponibilitatea</button>
                <div class="dropdown-content">
                    <input type="radio" <?php if(!isset($_POST['stoc']) || $_POST['stoc']==1) echo 'checked'?> id="st1" name="stoc" value=1>
                    <label for="st1">Toate</label><br>
                    <input type="radio" <?php if(isset($_POST['stoc']) && $_POST['stoc']==2) echo 'checked'?> id="st2" name="stoc" value=2>
                    <label for="st2">In stoc</label><br>
                    <input type="radio" <?php if(isset($_POST['stoc']) && $_POST['stoc']==3) echo 'checked'?> id="st3" name="stoc" value=3>
                    <label for="st3">Nu sunt in stoc</label>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/sorting.png"><br>Ordoneaza dupa</button>
                <div class="dropdown-content">
                    <input type="radio" id="ord0" name="order" value=0 <?php if(!isset($_POST['order']) || $_POST['order']==0) echo 'checked' ?>>
                    <label for="ord0">Neordonate</label><br>
                    <input type="radio" id="ord1" name="order" value=1 <?php if(isset($_POST['order']) && $_POST['order']==1) echo 'checked' ?>>
                    <label for="ord1">Dupa pret (ascendent)</label><br>
                    <input type="radio" id="ord2" name="order" value=2 <?php if(isset($_POST['order']) && $_POST['order']==2) echo 'checked' ?>>
                    <label for="ord2">Dupa pret (descendent)</label><br>
                    <input type="radio" id="ord3" name="order" value=3 <?php if(isset($_POST['order']) && $_POST['order']==3) echo 'checked' ?>>
                    <label for="ord3">Alfabetic (dupa compania producatoare)</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/money.png"><br>Pret</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="pret1" name="pret1" value="1000-2000"  onclick="disable_range()" <?php if(isset($_POST['pret1'])) echo 'checked';?>>
                    <label for="pret1">1000-2000 lei</label><br>
                    <input type="checkbox" id="pret2" name="pret2" value="2000-3000" onclick="disable_range()"<?php if(isset($_POST['pret2'])) echo 'checked' ?>>
                    <label for="pret2">2000-3000 lei</label><br>
                    <input type="checkbox" id="pret3" name="pret3" value="3000-4000" onclick="disable_range()" <?php if(isset($_POST['pret3'])) echo 'checked' ?>>
                    <label for="pret3">3000-4000 lei</label><br>
                    <input type="range" name="pretmin" min="1000" max="10000" value="<?php echo isset($_POST['pretmin']) ? $_POST['pretmin'] : 1000?>" class="slider" id="minpret" onchange="updatemin(this.value)">
                    <label for="minipret"><input size="3" type="text" id="textInput1" value="<?php echo isset($_POST['pretmin']) ? $_POST['pretmin'] : 1000?>" onchange="updatemin_r(this.value)"></label><br>
                    <script>
                        function disable_range(){
                            var check1=document.getElementById("pret1");
                            var check2=document.getElementById("pret2");
                            var check3=document.getElementById("pret3");
                            if(check1.checked==true || check2.checked==true || check3.checked==true){
                                document.getElementById("minpret").disabled = true;
                                document.getElementById("textInput1").disabled = true;
                                document.getElementById("maxpret").disabled = true;
                                document.getElementById("textInput2").disabled = true;
                            } else {
                                document.getElementById("minpret").disabled = false;
                                document.getElementById("textInput1").disabled = false;
                                document.getElementById("maxpret").disabled = false;
                                document.getElementById("textInput2").disabled = false;
                            }
                        }
                        function updatemin(val) {
                            document.getElementById('textInput1').value=val; 
                        }
                        function updatemin_r(val) {
                            document.getElementById('minpret').value=val; 
                        }
                    </script>
                    <input type="range" name="pretmax" min="1000" max="20000" value="<?php echo isset($_POST['pretmax']) ? $_POST['pretmax'] : 20000?>" class="slider" id="maxpret" onchange="updatemax(this.value)">
                    <label for="maxpret"><input size="3" type="text" id="textInput2" value="<?php echo isset($_POST['pretmax']) ? $_POST['pretmax'] : 20000?>" onchange="updatemax_r(this.value)"></label>
                    <script>
                        function updatemax(val) {
                            document.getElementById('textInput2').value=val; 
                        }
                        function updatemax_r(val) {
                            document.getElementById('maxpret').value=val; 
                        }
                    </script>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/company.png"><br>Compania Producatoare</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="p1" name="comp[]" value=1 <?php if(isset($_POST['comp']) && in_array(1,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p1">Lenovo</label><br>
                    <input type="checkbox" id="p2" name="comp[]" value=2 <?php if(isset($_POST['comp']) && in_array(2,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p2">ASUS</label><br>
                    <input type="checkbox" id="p3" name="comp[]" value=3 <?php if(isset($_POST['comp']) && in_array(3,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p3">Dell</label><br>
                    <input type="checkbox" id="p4" name="comp[]" value=4 <?php if(isset($_POST['comp']) && in_array(4,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p4">HP</label><br>
                    <input type="checkbox" id="p5" name="comp[]" value=5 <?php if(isset($_POST['comp']) && in_array(5,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p5">Acer</label><br>
                    <input type="checkbox" id="p6" name="comp[]" value=6 <?php if(isset($_POST['comp']) && in_array(6,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p6">Apple</label><br>
                    <input type="checkbox" id="p7" name="comp[]" value=7 <?php if(isset($_POST['comp']) && in_array(7,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p7">MSI</label><br>
                    <input type="checkbox" id="p8" name="comp[]" value=8 <?php if(isset($_POST['comp']) && in_array(8,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p8">Clevo</label><br>
                    <input type="checkbox" id="p9" name="comp[]" value=9 <?php if(isset($_POST['comp']) && in_array(9,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p9">Microsoft</label><br>
                    <input type="checkbox" id="p10" name="comp[]" value=10 <?php if(isset($_POST['comp']) && in_array(10,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p10">Toshiba</label><br>
                    <input type="checkbox" id="p11" name="comp[]" value=11 <?php if(isset($_POST['comp']) && in_array(11,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p11">Alienware</label><br>
                    <input type="checkbox" id="p12" name="comp[]" value=12 <?php if(isset($_POST['comp']) && in_array(12,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p12">Razer</label><br>
                    <input type="checkbox" id="p13" name="comp[]" value=16 <?php if(isset($_POST['comp']) && in_array(16,$_POST['comp'])) echo 'checked' ?>>
                    <label for="p13">Huawei</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/tip.png"><br>Tip laptop</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="t1" name="tp[]" value=1 <?php if(isset($_POST['tp']) && in_array(1,$_POST['tp'])) echo 'checked' ?>>
                    <label for="t1">Home</label><br>
                    <input type="checkbox" id="t2" name="tp[]" value=2 <?php if(isset($_POST['tp']) && in_array(2,$_POST['tp'])) echo 'checked' ?>>
                    <label for="t2">Ultraportabil</label><br>
                    <input type="checkbox" id="t3" name="tp[]" value=3 <?php if(isset($_POST['tp']) && in_array(3,$_POST['tp'])) echo 'checked' ?>>
                    <label for="t3">Business</label><br>
                    <input type="checkbox" id="t4" name="tp[]" value=4 <?php if(isset($_POST['tp']) && in_array(4,$_POST['tp'])) echo 'checked' ?>>
                    <label for="t4">Gaming</label><br>
                    <input type="checkbox" id="t5" name="tp[]" value=5 <?php if(isset($_POST['tp']) && in_array(5,$_POST['tp'])) echo 'checked' ?>>
                    <label for="t5">2in1</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/os.png"><br>Sistemul de Operare</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="os1" name="os[]" value=1 <?php if(isset($_POST['os']) && in_array(1,$_POST['os'])) echo 'checked' ?>>
                    <label for="os1">Windows</label><br>
                    <input type="checkbox" id="os2" name="os[]" value=2 <?php if(isset($_POST['os']) && in_array(2,$_POST['os'])) echo 'checked' ?>>
                    <label for="os2">Linux</label><br>
                    <input type="checkbox" id="os3" name="os[]" value=3 <?php if(isset($_POST['os']) && in_array(3,$_POST['os'])) echo 'checked' ?>>
                    <label for="os3">MacOS</label><br>
                    <input type="checkbox" id="os4" name="os[]" value=4 <?php if(isset($_POST['os']) && in_array(4,$_POST['os'])) echo 'checked' ?>>
                    <label for="os4">Free DOS</label><br>
                    <input type="checkbox" id="os5" name="os[]" value=5 <?php if(isset($_POST['os']) && in_array(5,$_POST['os'])) echo 'checked' ?>>
                    <label for="os5">EFI Shell</label><br>
                    <input type="checkbox" id="os6" name="os[]" value=6 <?php if(isset($_POST['os']) && in_array(6,$_POST['os'])) echo 'checked' ?>>
                    <label for="os6">Endless OS</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/cpu2.png"><br>Procesor</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="intel2" name="proc[]" value=1  <?php if(isset($_POST['proc']) && in_array(1,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel2">Intel Celeron</label><br>
                    <input type="checkbox" id="intel1" name="proc[]" value=2 <?php if(isset($_POST['proc']) && in_array(2,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel1">Intel Pentium</label><br>
                    <input type="checkbox" id="intel3" name="proc[]" value=3 <?php if(isset($_POST['proc']) && in_array(3,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel3">Intel Core i3</label><br>
                    <input type="checkbox" id="intel4" name="proc[]" value=4 <?php if(isset($_POST['proc']) && in_array(4,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel4">Intel Core i5</label><br>
                    <input type="checkbox" id="intel5" name="proc[]" value=5 <?php if(isset($_POST['proc']) && in_array(5,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel5">Intel Core i7</label><br>
                    <input type="checkbox" id="intel6" name="proc[]" value=6 <?php if(isset($_POST['proc']) && in_array(6,$_POST['proc'])) echo 'checked' ?>>
                    <label for="intel6">Intel Core i9</label><br>
                    <input type="checkbox" id="amd1" name="proc[]" value=7 <?php if(isset($_POST['proc']) && in_array(7,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd1">AMD Ryzen 3</label><br>
                    <input type="checkbox" id="amd2" name="proc[]" value=8 <?php if(isset($_POST['proc']) && in_array(8,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd2">AMD Ryzen 5</label><br>
                    <input type="checkbox" id="amd3" name="proc[]" value=9 <?php if(isset($_POST['proc']) && in_array(9,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd3">AMD Ryzen 7</label><br>
                    <input type="checkbox" id="amd4" name="proc[]" value=10 <?php if(isset($_POST['proc']) && in_array(10,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd4">AMD Ryzen 9</label><br>
                    <input type="checkbox" id="amd5" name="proc[]" value=11 <?php if(isset($_POST['proc']) && in_array(11,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd5">AMD Athlon</label><br>
                    <input type="checkbox" id="amd6" name="proc[]" value=12 <?php if(isset($_POST['proc']) && in_array(12,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd6">AMD A9-Series</label><br>
                    <input type="checkbox" id="amd7" name="proc[]" value=13 <?php if(isset($_POST['proc']) && in_array(13,$_POST['proc'])) echo 'checked' ?>>
                    <label for="amd7">AMD A4-Series</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/ram.png"><br>Memorie RAM</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="ram1" name="mem[]" value=1 <?php if(isset($_POST['mem']) && in_array(1,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram1">4 GB</label><br>
                    <input type="checkbox" id="ram2" name="mem[]" value=2 <?php if(isset($_POST['mem']) && in_array(2,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram2">6 GB</label><br>
                    <input type="checkbox" id="ram3" name="mem[]" value=3 <?php if(isset($_POST['mem']) && in_array(3,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram3">8 GB</label><br>
                    <input type="checkbox" id="ram4" name="mem[]" value=4 <?php if(isset($_POST['mem']) && in_array(4,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram4">12 GB</label><br>
                    <input type="checkbox" id="ram5" name="mem[]" value=5 <?php if(isset($_POST['mem']) && in_array(5,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram5">16 GB</label><br>
                    <input type="checkbox" id="ram6" name="mem[]" value=6 <?php if(isset($_POST['mem']) && in_array(6,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram6">32 GB</label><br>
                    <input type="checkbox" id="ram7" name="mem[]" value=7 <?php if(isset($_POST['mem']) && in_array(7,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram7">48 GB</label><br>
                    <input type="checkbox" id="ram8" name="mem[]" value=8 <?php if(isset($_POST['mem']) && in_array(8,$_POST['mem'])) echo 'checked' ?>>
                    <label for="ram8">64 GB</label><br>
                </div>
            </div>
        </div>
    </form>
    <div class="grid-drops">
        <div>
            <?php 
            if(empty($_POST))
                include 'select_all.php'; 
            else
                include 'select_by.php';
            ?>
        </div>
    </div>
</div>
</fnt>
</div>
</body>
</html>