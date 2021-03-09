<?php
    $sql="SELECT *
    FROM Laptopuri A LEFT JOIN Producatori B ON A.Id_Producator=B.Id_Producator
        LEFT JOIN [Tipuri Laptop] C ON A.Id_Tip=C.Id_Tip
        LEFT JOIN [Sisteme de Operare] D ON A.Id_SO=D.Id_SO
        LEFT JOIN [Procesoare] E ON A.Id_Procesor=E.Id_Procesor
        LEFT JOIN [Memorie RAM] F ON A.Id_RAM=F.Id_RAM
        LEFT JOIN [Diagonale] G ON A.Id_Diagonala=G.Id_Diagonala ";
    $result=sqlsrv_query($conn,$sql);
    $n_lap=0;
    echo '<div class="grid_lap">';
    while( $row = sqlsrv_fetch_array( $result) ) {
        echo '<li><div class="box">';
        $icon_name=$row['Cod_Laptop'].".png";
        $icon_name=str_replace(' ', '', $icon_name);
        $Nume_Producator=$row['Nume_Producator'];
        $Cod_Laptop=$row['Cod_Laptop'];
        $Pret=$row['Pret'];
        $Tip_Laptop=$row['Tip_Laptop'];
        $Nume_SO=$row['Nume_SO'];
        $Cod_Procesor=$row['Cod_Procesor'];
        $Model_Procesor=$row['Model_Procesor'];
        $query_prod_proc="SELECT C.Nume_Producator FROM Laptopuri A JOIN Procesoare B ON A.Id_Procesor=B.Id_Procesor JOIN Producatori C ON B.Id_Producator=C.Id_Producator
                                        WHERE A.Cod_Laptop='$Cod_Laptop'";
        $PP=sqlsrv_fetch_array(sqlsrv_query($conn,$query_prod_proc));
        $Producator_Procesor=$PP['Nume_Producator'];
        $Memorie=$row['Memorie'];
        $Cod_Placa=$row['Cod_Placa'];
        $query_prod_plv="SELECT C.Nume_Producator from Laptopuri A JOIN Producatori C ON A.Id_Producator_Placa_Video=C.Id_Producator
                                        WHERE A.Cod_Laptop='$Cod_Laptop'";
        $PPV=sqlsrv_fetch_array(sqlsrv_query($conn,$query_prod_plv));
        $Producator_Placa_Video=$PPV['Nume_Producator'];
        $Tip_Placa_Video=$row['Tip_Placa'];
        $Diagonala_Ecran=$row['Diagonala_Ecran'];
        $Rata_de_refresh=$row['Rata_de_refresh'];
        $Stocare=$row['Stocare'];
        if($row['Disponibil_in_stoc'])
            $stoc_img="icons/checked.png";
        else $stoc_img="icons/unchecked.png";
        $Tip_Placa_Video=str_replace(' ', '', $Tip_Placa_Video);
        echo "<img src='icons/laps/$icon_name' width='55%' height='55%'><br>";
        echo "<b>$Nume_Producator
                    $Cod_Laptop  <img src='$stoc_img' width='5%' height='5%'><br></b>
                    <text style='color:red'>Pret: $Pret lei</text><br>
                    Tip: $Tip_Laptop<br>
                    Sistem de Operare: $Nume_SO<br>
                    Procesor: $Producator_Procesor $Cod_Procesor$Model_Procesor<br>
                    Memorie: $Memorie GB<br>
                    Placa Video: $Producator_Placa_Video $Cod_Placa ($Tip_Placa_Video)<br>
                    Stocare: $Stocare <br>
                    Diagonala: $Diagonala_Ecran inch";
        if(isset($Rata_de_refresh))
            echo " ($Rata_de_refresh Hz)<br>";
        echo '</div></li>';
    }
    echo '</div>';
?>