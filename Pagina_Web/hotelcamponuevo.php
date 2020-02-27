<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $contador = 0;
$habi = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    include 'links.php';
    include 'conexionbd.php';
    $consulta_color = "select * from habitacion;";

    foreach ($db->query($consulta_color) as $fila) {
        $prueba = $fila['codHabitacion'];
        $prueba2 = $fila['reservada'];
            if ($habi[$contador] ==  $prueba) {

                if ($prueba2 == "SI") {
                    $habi[$contador] = "rojo";
                } else if ($prueba2 == "NO") {

                    $habi[$contador] = "azul";
                }

            }
            $contador++;

    }

    ?>


    <title>Document</title>
</head>
<body>
<?php
include 'cabecera.php';
?>
<div class="container">

    <!--Empieza numero de plantas del hotel-->
    <div class="card" style="width: 35rem;">
        <div class="card-body">
            <table class="table table-bordered table1">
                <caption>Planta1</caption>

                <tbody>
                <tr>
                    <td id="11" scope="row" class="<?php echo $habi[0] ?>">1</td>
                    <td id="1-7" class="<?php echo $habi[6] ?>">7</td>
                    <td id="1-8" class="<?php echo $habi[7] ?>">8</td>
                    <td id="1-9" class="<?php echo $habi[8] ?>">9</td>
                    <td id="1-10" class="<?php echo $habi[9] ?>">10</td>
                    <td id="111" class="<?php echo $habi[10] ?>">11</td>
                </tr>
                <tr>
                    <td id="1-2" scope="row"  class="<?php echo $habi[1] ?>">2</td>
                    <td class="piscina" colspan="4" rowspan="4"></td>
                    <td id="112"  class="<?php echo $habi[11] ?>">12</td>

                </tr>
                <tr>
                    <td id="1-3" scope="row"  class="<?php echo $habi[2] ?>">3</td>
                    <td id="113"  class="<?php echo $habi[12] ?>">13</td>
                </tr>
                <tr>
                    <td id="1-4" scope="row"  class="<?php echo $habi[3] ?>">4</td>
                    <td id="114"  class="<?php echo $habi[13] ?>">14</td>
                </tr>
                <tr>
                    <td id="1-5" scope="row"  class="<?php echo $habi[4] ?>">5</td>
                    <td id="1-15"  class="<?php echo $habi[14] ?>">15</td>
                </tr>
                <tr>
                    <td id="1-6" scope="row"  class="<?php echo $habi[5] ?>">6</td>
                    <td id="1-16"  class="<?php echo $habi[15] ?>">16</td>
                    <td id="1-17 "  class="<?php echo $habi[16] ?>">17</td>
                    <td id="1-18"  class="<?php echo $habi[17] ?>">18</td>
                    <td id="1-19"  class="<?php echo $habi[18] ?>">19</td>
                    <td id="1-20"  class="<?php echo $habi[19] ?>">20</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered table2">
                <caption>Planta2</caption>

                <tbody>
                <tr>
                    <td id="2-1" scope="row" class="<?php echo $habi[20] ?>">1</td>
                    <td id="2-8" class="<?php echo $habi[26] ?>">7</td>
                    <td id="2-7" class="<?php echo $habi[27] ?>">8</td>
                    <td id="2-9" class="<?php echo $habi[28] ?>">9</td>
                    <td id="2-10" class="<?php echo $habi[29] ?>">10</td>
                    <td id="2-11 " class="<?php echo $habi[30] ?>">11</td>
                </tr>
                <tr>
                    <td id="2-2" scope="row" class="<?php echo $habi[21] ?>">2</td>
                    <td class="piscina" colspan="4" rowspan="4"></td>
                    <td id="2-12" class="<?php echo $habi[31] ?>">12</td>

                </tr>
                <tr>
                    <td id="2-3" scope="row" class="<?php echo $habi[22] ?>"> 3</td>
                    <td id="2-13" class="<?php echo $habi[32] ?>">13</td>
                </tr>
                <tr>
                    <td id="2-4" scope="row" class="<?php echo $habi[23] ?>">4</td>
                    <td id="2-14" class="<?php echo $habi[33] ?>">14</td>
                </tr>
                <tr>
                    <td id="2-5" scope="row" class="<?php echo $habi[24] ?>">5</td>
                    <td id="2-15" class="<?php echo $habi[34] ?>">15</td>
                </tr>
                <tr>
                    <td id="2-6" scope="row" class="<?php echo $habi[25] ?>">6</td>
                    <td id="2-16" class="<?php echo $habi[35] ?>">16</td>
                    <td id="2-17" class="<?php echo $habi[36] ?>">17</td>
                    <td id="2-18 "class="<?php echo $habi[37] ?>">18</td>
                    <td id="2-19" class="<?php echo $habi[38] ?>">19</td>
                    <td id="2-20" class="<?php echo $habi[39] ?>">20</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered table3">
                <caption>Planta3</caption>

                <tbody>
                <tr>
                    <td id="3-1" scope="row" class="<?php echo $habi[40] ?>">1</td>
                    <td id="3-7" class="<?php echo $habi[46] ?>">7</td>
                    <td id="3-8" class="<?php echo $habi[47] ?>">8</td>
                    <td id="3-9" class="<?php echo $habi[48] ?>">9</td>
                    <td id="3-10" class="<?php echo $habi[49] ?>">10</td>
                    <td id="3-11" class="<?php echo $habi[50] ?>">11</td>
                </tr>
                <tr>
                    <td id="3-2" scope="row" class="<?php echo $habi[41] ?>">2</td>
                    <td class="piscina" colspan="4" rowspan="4"></td>
                    <td id="3-12" class="<?php echo $habi[51] ?>">12</td>

                </tr>
                <tr>
                    <td id="3-3" scope="row" class="<?php echo $habi[43] ?>">3</td>
                    <td id="3-14" class="<?php echo $habi[53] ?>">14</td>
                </tr>
                <tr>
                    <td id="3-4" scope="row" class="<?php echo $habi[33] ?>">4</td>
                    <td id="3-13" class="<?php echo $habi[52] ?>">13</td>
                </tr>
                <tr>
                    <td id="3-5" scope="row" class="<?php echo $habi[44] ?>">5</td>
                    <td id="3-15" class="<?php echo $habi[54] ?>">15</td>
                </tr>
                <tr>
                    <td id="3-6" scope="row" class="<?php echo $habi[45] ?>">6</td>
                    <td id="3-16" class="<?php echo $habi[55] ?>">16</td>
                    <td id="3-17" class="<?php echo $habi[56] ?>">17</td>
                    <td id="3-18" class="<?php echo $habi[57] ?>">18</td>
                    <td id="3-19" class="<?php echo $habi[58 ] ?>">19</td>
                    <td id="3-20" class="<?php echo $habi[59] ?>">20</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered table4">
                <caption>Planta4</caption>

                <tbody>
                <tr>
                    <td id="4-1" scope="row" class="<?php echo $habi[60] ?>">1</td>
                    <td id="4-7" class="<?php echo $habi[66] ?>">7</td>
                    <td id="4-8" class="<?php echo $habi[67] ?>">8</td>
                    <td id="4-10" class="<?php echo $habi[69] ?>">10</td>
                    <td id="4-9" class="<?php echo $habi[68] ?>">9</td>
                    <td id="4-11" class="<?php echo $habi[70] ?>">11</td>
                </tr>
                <tr>
                    <td id="4-2" scope="row"  class="<?php echo $habi[61] ?>">2</td>
                    <td class="piscina" colspan="4" rowspan="4"></td>
                    <td id="4-12"  class="<?php echo $habi[71] ?>">12</td>

                </tr>
                <tr>
                    <td id="4-3" scope="row"  class="<?php echo $habi[62] ?>">3</td>
                    <td id="4-13"  class="<?php echo $habi[72] ?>">13</td>
                </tr>
                <tr>
                    <td id="4-4" scope="row"  class="<?php echo $habi[63] ?>">4</td>
                    <td id="4-14"  class="<?php echo $habi[73] ?>">14</td>
                </tr>
                <tr>
                    <td id="4-5" scope="row"  class="<?php echo $habi[64] ?>">5</td>
                    <td id="4-15"  class="<?php echo $habi[74] ?>">15</td>
                </tr>
                <tr>
                    <td id="4-16" scope="row"  class="<?php echo $habi[75] ?>">16</td>
                    <td id="4-6"  class="<?php echo $habi[65] ?>">6</td>
                    <td id="4-17 "  class="<?php echo $habi[76] ?>">17</td>
                    <td id="4-18"  class="<?php echo $habi[77] ?>">18</td>
                    <td id="4-19"  class="<?php echo $habi[78] ?>">19</td>
                    <td id="4-20" class="<?php echo $habi[79] ?>">20</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--FIN numero de plantas del hotel-->


    <button id="1">Planta1</button>
    <button id="2">Planta2</button>
    <button id="3">Planta3</button>
    <button id="4">Planta4</button>


    <?php
    include 'pie.php';
    ?>
