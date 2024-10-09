<?php

    $bankActivity1 = true;
    $bankAccount1 = 400.0;

echo"<h3>Account bank 1</h3>";

    echo"<br>";

    echo"My balance : $bankAccount1";
    echo"<br>";

    if ($bankActivity1) {
    $bankActivity1 = false;
    echo"My account is now closed.";
    }

    echo"<br>";

    if (!$bankActivity1) {
    $bankActivity1 = true;
    echo"My account is now reopened.";
    }

    echo"<br>";

    $transaction = 150;
    echo"Doing transaction deposit (+$transaction) with current balance $bankAccount1";

    echo"<br>";

    $bankAccount1 += $transaction;
    echo"My new balance after deposit (+$transaction) : $bankAccount1";

    echo"<br>";

    $transaction = 25;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount1";

    echo"<br>";

    $bankAccount1 -= $transaction;
    echo"My new balance after withdrawal (-$transaction) : $bankAccount1";

    echo"<br>";

    $transaction = 600;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount1";

    echo"<br>";

    if (($bankAccount1 - $transaction) < 0) {
    echo"Error transaction: Insufficient balance to complete the withdrawal";
    }

    echo"<br>";

    echo"My balance after failed last transaction : $bankAccount1";

    echo"<br>";

    if ($bankActivity1) {
        echo"My account is now closed";
    }

    $bankAccount2 = 200.0;
    $bankActivity2 = true;
    $overdraftLimit = -100.0;

    echo"<br>";
    echo"<br>";

echo"<h3>Account bank 2</h3>";

    echo"<br>";

    echo"My balance : $bankAccount2";
    echo"<br>";

    $transaction = 100;
    echo"Doing transaction deposit (+$transaction) with current balance $bankAccount2";

    echo"<br>";

    $bankAccount2 += $transaction;
    echo"My new balance after deposit (+$transaction) : $bankAccount2";

    echo"<br>";

    $transaction = 300;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount2";

    echo"<br>";

    $bankAccount2 -= $transaction;
    echo"My new balance after withdrawal (-$transaction) : $bankAccount2";

    echo"<br>";

    $transaction = 50;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount2";

    echo"<br>";

    if (($bankAccount2 - $transaction) > $overdraftLimit) {
    $bankAccount2 -= $transaction;
    echo"My new balance after withdrawal (-$transaction) with founds : $bankAccount2";
    }

    echo"<br>";

    $transaction = 120;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount2";

    echo"<br>";

    if (($bankAccount2 - $transaction) > $overdraftLimit) {
    $bankAccount2 -= $transaction;
    echo"My new balance after withdrawal (-$transaction) with founds : $bankAccount2";
    }else{
    echo"Error transaction: Withdrawal exceeds overdraft limit";
    }

    echo"<br>";

    echo"My balance after failed last transaction : $bankAccount2";

    echo"<br>";

    $transaction = 20;
    echo"Doing transaction withdrawal (-$transaction) with current balance $bankAccount2";

    echo"<br>";

    if (($bankAccount2 - $transaction) > $overdraftLimit) {
        $bankAccount2 -= $transaction;
        echo"My new balance after withdrawal (-$transaction) with founds : $bankAccount2";
        }else{
        echo"Error transaction: Withdrawal exceeds overdraft limit";
        }

        echo"<br>";

        if ($bankActivity1) {
            $bankActivity1 = false;
            echo"My account is now closed.";
            }
        
            echo"<br>";
        
            if (!$bankActivity1) {
            echo"Error: Account is already closed.";
            }
