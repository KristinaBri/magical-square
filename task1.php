<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            background-image: radial-gradient(circle at 40% 91%, rgba(251, 251, 251,0.04) 0%, rgba(251, 251, 251,0.04) 50%,rgba(229, 229, 229,0.04) 50%, rgba(229, 229, 229,0.04) 100%),radial-gradient(circle at 66% 97%, rgba(36, 36, 36,0.04) 0%, rgba(36, 36, 36,0.04) 50%,rgba(46, 46, 46,0.04) 50%, rgba(46, 46, 46,0.04) 100%),radial-gradient(circle at 86% 7%, rgba(40, 40, 40,0.04) 0%, rgba(40, 40, 40,0.04) 50%,rgba(200, 200, 200,0.04) 50%, rgba(200, 200, 200,0.04) 100%),radial-gradient(circle at 15% 16%, rgba(99, 99, 99,0.04) 0%, rgba(99, 99, 99,0.04) 50%,rgba(45, 45, 45,0.04) 50%, rgba(45, 45, 45,0.04) 100%),radial-gradient(circle at 75% 99%, rgba(243, 243, 243,0.04) 0%, rgba(243, 243, 243,0.04) 50%,rgba(37, 37, 37,0.04) 50%, rgba(37, 37, 37,0.04) 100%),linear-gradient(90deg, rgb(34, 222, 237),rgb(135, 89, 215));
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
    </style>

    <title>TASK 1</title>
</head>
<body>
<!-- FORMA KAIREJE -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <div class="card">
                    <h5 class="card-title ps-3 pt-3">Įrašykite pasirinktus skaičius</h5>
                    <div class="card-body">
                        <form action="" method="POST">
                            <label for="data"               class="form-label"></label>
                            <textarea name="data" id="data" cols="30" rows="10" class="form-control"></textarea>
                            <button class="btn btn-primary mt-4">Rodyti rezultatą</button>
                        </form>                     
                    </div>
                </div>      
            </div>


<!-- REZULTATAS IS FORMOS DESINEJE -->
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title ps-3 pt-3">Gautas rezultatas</h5>
                    <div class="card-body">

                        <?php
                            if (isset($_POST['data'])) {
                                $dataAll = $_POST['data'];
                                $dataRow = explode("\n", $dataAll);
                                $data = [];

                                foreach ($dataRow as $x) {
                                    $data[] = explode(" ", $x); 
                                } 

                                $n = count($data);                                
                                for ($i = 0; $i < $n; $i++) {
                                    $sumRow = 0;
                                    $sumCol = 0;
                                   
                                    for ($j = 0; $j < $n; $j++) {
                                        $sumRow += $data[$i][$j];
                                        $sumCol += $data[$j][$i];
                                    }

                                    $sumDiag1 = 0;
                                    $sumDiag2 = 0;
                                    for ($i = 0; $i < $n; $i++) {
                                        $sumDiag1 += $data[$i][$i];
                                        $sumDiag2 += $data[$i][$n-$i-1];
                                    }
                                                                       
                                    // IŠVESTA EILUČIŲ SUMA.......
                                   // echo $sumRow;
                                    //echo "<br>";

                                    // IŠVESTA STULPELIŲ SUMA.......
                                    //echo ($sumCol . " ");

                                    // IŠVESTA VIENOS ĮSTRIŽAINĖS  SUMA.......
                                   //echo $sumDiag1;
                                   //echo "<br>";

                                  // IŠVESTA KITOS ĮSTRIŽAINĖS  SUMA.......
                                   //echo $sumDiag2;
                                   //echo "<br>";
                                } 
                                //PATIKRINIMAS
                                if ($sumRow != $sumCol) {
                                    echo "Ne magiškasis kvadratas 😪!";
                                } else if ($sumRow == $sumCol &&
                                            $sumRow == $sumDiag1 &&
                                            $sumCol == $sumDiag2 &&
                                            $sumDiag1 == $sumDiag2) {
                                    echo "Valio!!! Magiškasis kvadratas! 😁";
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>