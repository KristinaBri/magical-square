<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Įveskite duomenis</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="data" class="form-label"></label>
                                <textarea name="data" id="data" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-success">Skaičiuoti</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Apskaičiuotas masyvas</div>
                    <div class="card-body">
<?php
if (isset($_POST['data'])){
    $dataS=$_POST['data'];
    $dataSR=explode("\n",$dataS);
    $data=[];
    foreach ($dataSR as $t){
        $data[]=explode(" ",$t);
    }
    for($i=0; $i<sizeof($data); $i++){
        $data[$i][$i]=0;
        $data[$i][sizeof($data)-$i-1]=0;        
    }
?>
<table class="table">
    <?php foreach ($data as $row){ ?>
    <tr>
        <?php foreach($row as $d){ ?> 
            <td><?=$d?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

<?php
}
?>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">Projektų sąrašas</div>
                    <div class="card-body">
<?php include "data.php"; ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pavadinimas</th>
                                    <th>Metai</th>
                                    <th>Programa</th>
                                    <th>Suma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($projects as $project){ ?>
                                <tr>
                                    <td><?=$project['short_name'] ?></td>
                                    <td><?=$project['year'] ?></td>
                                    <td><?=$project['program'] ?></td>
                                    <td><?=$project['price'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

<?php
  
  foreach ($projects as $project){
    if (isset($pajamos[$project['year']])){
        $pajamos[$project['year']]+=$project['price'];
    }else{
        $pajamos[$project['year']]=$project['price'];
    }
    
  }

  ksort($pajamos);
  //print_r($pajamos);
?>
<hr>
        <table class="table">
            <thead>
                <tr>
                <?php foreach ($pajamos as $year=>$price){ ?> 
                    <th><?=$year?></th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                    //echo "<td>".implode( "</td><td>", $pajamos)."</td>"; 
                ?>
                <?php foreach ($pajamos as $year=>$price){ ?> 
                    <td><?=$price?></td>
                <?php } ?>
                </tr>
            </tbody>
        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>