<?php
//Counts quantity of bills and coins

echo "Enter amount of money to be quantified: ";
$readBill = fgets(STDIN);

function moneyChanger($readBill){
    if($readBill >= 1000){
        $countBillThousand = $readBill/1000;
        $readBill = $readBill%1000;
        echo "Php 1000: ".(int)$countBillThousand ."\n";
    }
    if($readBill >= 500){
        $countBillFiveH = $readBill/500;
        $readBill = $readBill%500;
        echo "Php 500: ".(int)$countBillFiveH ."\n";
    }
    if($readBill >= 200){
        $countBillTwoH = $readBill/200;
        $readBill = $readBill%200;
        echo "Php 200: ".(int)$countBillTwoH ."\n";
    }
    if($readBill >= 100){
        $countBillOneH = $readBill/100;
        $readBill = $readBill%100;
        echo "Php 100: ".(int)$countBillOneH ."\n";
    }elseif($readBill >= 50){ 
        $countBillFifty = $readBill/50;
        $readBill = $readBill%50;
        echo "Php 50: ".(int)$countBillFifty ."\n";
    }
    if($readBill >= 20){
        $countBillTwenty= $readBill/20;
        $readBill = $readBill%20;
        echo "Php 20: ".(int)$countBillTwenty ."\n";
    }
    if($readBill >= 10){
        $countBillTen= $readBill/10;
        $readBill = $readBill%10;
        echo "Php 10: ".(int)$countBillTen ."\n";
    }
    if($readBill >= 5){
        $countBillFive= $readBill/5;
        $readBill = $readBill%5;
        echo "Php 5: ".(int)$countBillFive ."\n";
    }
    if($readBill >= 1){
        $countBillOne= $readBill/1;
        echo "Php 1: ".(int)$countBillOne ."\n";
    }
}

    moneyChanger($readBill);
?>