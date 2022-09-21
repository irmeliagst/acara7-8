<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap.css">
    <title>Hitung jumlah huruf</title>
</head>

<body>
    <div style="width: 500px; height: 500px; padding-top: 10rem;" class="mx-auto">
      
        <div class="card">
            <div class="card-body">

                <form action="calc.php" method="POST">
                    <div class="mb-3">
                        <label for="kata" class="form-label">tuliskan sesuatu</label>
                        <input type="text" class="form-control" name="kata">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
                </form>
            </div>
        </div>
    </div>
  
</body>

</html>
<?php 
  if (isset($_POST['submit'])) 
  {
    $kata = $_POST['kata'];
    if(!empty($_POST['kata'])) {
    echo "'<div id='hasil'>Jumlah Kalimat: ".strlen($kata)."<br>"."Kalimat: ".$kata."</div>";
    }
}
?>

<?php

class Calc
{
    var $kata;
   
    public function setInput($kata)
    {
        $this->kata = $kata;
    }
   

    public function jumlah_huruf($kata)
    {

        $hasil = $kata;
        return $hasil;
    }
} 

?>