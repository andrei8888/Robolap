<!DOCTYPE html>
<html>
<?php include 'connect.php'; ?>
<head>
<title>Robolap</title>
    <link rel="stylesheet" href="meta.css">
    <link rel="stylesheet" href="drop.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="lap_box.css">
    <link rel="stylesheet" href="select.css">
</head>
<style>
</style>
<body style="background-image: url('icons/wall.jpg')">
<ul>
    <li><a class="active" href="intro.html"><img src="icons/robolap.png" style="height: 48px"></a></li>
    <li style="float:right"><a href="admin.html"><img src="icons/admin.png" style="height: 48px"></a></li>
    <li style="float:right"><a href=""><img src="icons/chat.png" style="height: 48px"></a>
    </li>
</ul>
<div class="grid-container">
    <form action="sel_and_ord.php" method="post">
        <div class="grid-drops"><br>
        <div class="dropdown"><input type="image" src="icons/check.png" alt="Submit" name="submit" value="" style="height: 48px"></div>

            <div class="select">
                <select name="order" id="slct">
                        <option selected disabled>Ordoneza dupa</option>
                        <option value=1>Dupa pret (ascendent)</option>
                        <option value=2>Dupa pret (descendent)</option>
                        <option value=3>Alfabetic (dupa compania producatoare)</option>
                </select>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/money.png"><br>Pret</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="pret1" name="pret" value="1000-2000">
                    <label for="pret1">1000-2000 lei</label><br>
                    <input type="checkbox" id="pret2" name="pret" value="2000-3000">
                    <label for="pret2">2000-3000 lei</label><br>
                    <input type="checkbox" id="pret3" name="pret" value="3000-4000">
                    <label for="pret3">3000-4000 lei</label><br>
                    <input type="range" name="rangeInput" min="1000" max="10000" value="1000" class="slider" id="minpret" onchange="updatemin(this.value)">
                    <label for="minipret"><input size="3" type="text" id="textInput1" value=""></label><br>
                    <script>function updatemin(val) {
                            document.getElementById('textInput1').value=val; 
                            }
                    </script>
                    <input type="range" name="rangeInput1" min="1000" max="10000" value="1000" class="slider" id="maxpret" onchange="updatemax(this.value)">
                    <label for="maxpret"><input size="3" type="text" id="textInput2" value=""></label>
                    <script>function updatemax(val) {
                            document.getElementById('textInput2').value=val; 
                            }
                    </script>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/tip.png"><br>Tip laptop</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="t1" name="tp" value=1>
                    <label for="t1">Home</label><br>
                    <input type="checkbox" id="t2" name="tp" value=2>
                    <label for="t2">Ultraportabil</label><br>
                    <input type="checkbox" id="t3" name="tp" value=3>
                    <label for="t3">Business</label><br>
                    <input type="checkbox" id="t4" name="tp" value=4>
                    <label for="t4">Gaming</label><br>
                    <input type="checkbox" id="t5" name="tp" value=5>
                    <label for="t1">2in1</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/cpu2.png"><br>Procesor</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="intel2" name="proc" value=1>
                    <label for="intel2">Intel Celeron</label><br>
                    <input type="checkbox" id="intel1" name="proc" value=2>
                    <label for="intel1">Intel Pentium</label><br>
                    <input type="checkbox" id="intel3" name="proc" value=3>
                    <label for="intel3">Intel Core i3</label><br>
                    <input type="checkbox" id="intel4" name="proc" value=4>
                    <label for="intel4">Intel Core i5</label><br>
                    <input type="checkbox" id="intel5" name="proc" value=5>
                    <label for="intel5">Intel Core i7</label><br>
                    <input type="checkbox" id="intel6" name="proc" value=6>
                    <label for="intel6">Intel Core i9</label><br>
                    <input type="checkbox" id="amd1" name="proc" value=7>
                    <label for="amd1">AMD Ryzen 3</label><br>
                    <input type="checkbox" id="amd2" name="proc" value=8>
                    <label for="amd2">AMD Ryzen 5</label><br>
                    <input type="checkbox" id="amd3" name="proc" value=9>
                    <label for="amd3">AMD Ryzen 7</label><br>
                    <input type="checkbox" id="amd4" name="proc" value=10>
                    <label for="amd4">AMD Ryzen 9</label><br>
                    <input type="checkbox" id="amd5" name="proc" value=11>
                    <label for="amd5">AMD Athlon</label><br>
                    <input type="checkbox" id="amd6" name="proc" value=12>
                    <label for="amd6">AMD A9-Series</label><br>
                    <input type="checkbox" id="amd7" name="proc" value=13>
                    <label for="amd7">AMD A4-Series</label><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><img src="icons/ram.png"><br>Memorie RAM</button>
                <div class="dropdown-content">
                    <input type="checkbox" id="ram1" name="mem" value=1>
                    <label for="ram1">4 GB</label><br>
                    <input type="checkbox" id="ram2" name="mem" value=2>
                    <label for="ram2">6 GB</label><br>
                    <input type="checkbox" id="ram3" name="mem" value=3>
                    <label for="ram3">8 GB</label><br>
                    <input type="checkbox" id="ram4" name="mem" value=4>
                    <label for="ram1">12 GB</label><br>
                    <input type="checkbox" id="ram5" name="mem" value=5>
                    <label for="ram5">16 GB</label><br>
                    <input type="checkbox" id="ram6" name="mem" value=6>
                    <label for="ram6">32 GB</label><br>
                    <input type="checkbox" id="ram7" name="mem" value=7>
                    <label for="ram7">48 GB</label><br>
                    <input type="checkbox" id="ram8" name="mem" value=8>
                    <label for="ram8">64 GB</label><br>
                </div>
            </div>
        </div>
    </form>
    <div class="grid-drops">
        <div>
            <?php include 'select_by.php'; ?>
        </div>
    </div>
</div>
</body>
</html>