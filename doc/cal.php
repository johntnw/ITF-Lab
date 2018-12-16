<!DOCTYPE html>
<html>
  <head>
    <title>Twice Comeback</title>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <h1>TwiceLand Comeback YesOrYes Concert</h1>
    <a href="index.html">Back</a>
    <div align="center"><img class="main" src="yesoryes.jpg">
      <table>
        <thead>
          <tr>
            <?php
              $name = $_POST["name"];
              echo "<th>$name</th>";
            ?>
            <th>Price</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $amount1 = $_POST["amount1"];
            $amount2 = $_POST["amount2"];
            $amount3 = $_POST["amount3"];
            $amount4 = $_POST["amount4"];
            $amount5 = $_POST["amount5"];
            $amount6 = $_POST["amount6"];
            $totalamount = $amount1 + $amount2 + $amount3 + $amount4 + $amount5 + $amount6;
            $total = (5800*$amount1)+(5000*$amount2)+(4500*$amount3)+(3500*$amount4)+(3000*$amount5)+(2000*$amount6);
            echo "<tr>" .
                 "<td></td>" .
                 "<td>5,800</td>" .
                 "<td>$amount1</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td></td>" .
                 "<td>5,000</td>" .
                 "<td>$amount2</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td></td>" .
                 "<td>4,500</td>" .
                 "<td>$amount3</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td></td>" .
                 "<td>3,500</td>" .
                 "<td>$amount4</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td></td>" .
                 "<td>3,000</td>" .
                 "<td>$amount5</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td></td>" .
                 "<td>2,000</td>" .
                 "<td>$amount6</td>" .
                 "</tr>";
            echo "<tr>" .
                 "<td>Total</td>" .
                 "<td>$total</td>" .
                 "<td>$totalamount</td>" .
                 "</tr>";
          ?>
        </tbody>
      </table>

  </body>
</html>
