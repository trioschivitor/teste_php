<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background: lightblue;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }
    .box{
      background: lightseagreen;
      color: lightgoldenrodyellow;
      padding: 10px;
      border-radius: 12px;
    }
    .box input[type="submit"]{
      background: orangered;
      color: white;
      padding: 15px;
      font-size: 20px;
      font-weight: 400;
      border-radius: 10px;
      padding: 3px 10px;
      border: none;
      outline: none;
      display: block;
      margin: auto;
      cursor: pointer;
    }
    .box input[type="text"]{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
  </style>
  </head>
<body>
  
  
    <div class="box">
    <div class="imc"> 
    <?php 
    if(isset($_POST["submit"])){
      $altura = $_POST["altura"];
      $peso = $_POST["peso"];
    
      $imc = $peso/($altura*$altura);
      echo "Seu IMC é:".round($imc,2);
    }
    ?> 
    </div>
    <br><br> 
    <form action="index.php" method="POST">
    <label for="altura">Altura:</label>
    <input type="text" name="altura" id="altura" required>
    <br><br>
    <label for="peso">Peso:</label>
    <input type="text" name="peso" id="peso" required>
    <br><br>
    <input type="submit" name="submit" value="IMC">
    </form>
    <br><br>

    <div class="resultado">
    <?php 
  if(isset($_POST["submit"])){
    
    if($imc<18.5) {
      echo "Você está com baixo peso";
    } elseif($imc>18.5 and $imc<24.99) {
      echo "Você está com peso normal";
    } elseif ($imc>25 and $imc<29.99) {
      echo "Você está com sobrepeso";
    }elseif ($imc>30) {
      echo "Você está obeso";
    }

  }
    
  ?>
          
      </div>
  </div>
  
  
</body>
</html>