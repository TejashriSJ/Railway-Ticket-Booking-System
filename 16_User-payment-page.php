<?php
session_start();
$html ='

<body>

    <form method="post">
        <p>
            <label>card number:</label>
            <input type="number" name="card_nuber"></p>
        <p>
            <label>name on card:</label>
            <input type="text" name="name" value="name"></p>
        <p>
            <label>card type:</label>
            <select name="card type" value="card type">
                <option value="debit">debit card</option>
            </select>

            <label>card expiry:</label>
            <input type="date" name="expiry" value="expiry">
            <label>cvv:</label>
            <input type="number" name="cvv" value="cvv">

        </p>
    </form>
    <p>
    total amount:'.$_SESSION['PRISE'].'</p> <input type="submit" name="submit" value="make payment">
    </body>
';
echo $html;
/////if(isset('submit'))
//echo "payment successfull";
?>

   
