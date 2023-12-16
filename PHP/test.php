<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="test.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <style>

    h1 {

      text-align: center;
    }



      
  </style> 
  </head>


  <body>
    <main>
        <h1>Currency Calculator</h1>  
          </main>
    
    <form method="post" action="test.php">
      <label> Input GBP: </label>
      <input type="test" name="gbp">
      <label> Select a currency to convert to: </label>
      <select name = "value"> 
        <option value="euro">EURO</option>
          <option value="inr">INR</option>
            <option value="lira">LIRA</option>        
             <option value="usd">USD</option>
              <option value="sar">RAND</option>
      </select>
      <input type="submit">
    </form><br>
    
    <?php 

    $gbp = $_POST['gbp'];
    $convertto = $_POST['value'];
    if($convertto == "euro")  {
      $euro = $gbp * 1.16;
    echo $gbp . " GBP converted to EURO is: " . $euro;
       }
    elseif($convertto == "sar")  {
      $sar = $gbp * 23.27;
    echo $gbp . " GBP converted to RAND is: " . $sar;
      }
    elseif($convertto == "usd") {
      $usd = $gbp * 1.25;
    echo $gbp . " GBP converted to USD is: " . $usd;
      }
    elseif($convertto == "inr") {
      $inr = $gbp * 104.49;
    echo $gbp . " GBP converted to INR is: " . $inr;
    }
    elseif($convertto = "lira") {
      $lira = $gbp * 36.07;
    echo $gbp . " GBP converted to LIRA is: " . $lira;

    }
     ?>
    
   


  

  </body>
</html>





