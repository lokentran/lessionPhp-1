<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type='number'] {
            width: 150px;
        }
    </style>
</head>
<body>
    
<form action="" method="post">
    <input type="number" name="num" placeholder="Number" min="0" max="999" >
    <input type="submit" value="Read Number">
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $number = $_POST['num'];
        if($number <= 10) {
            switch ($number) {
                case '0': echo "Zero";break;
                case '1': echo "One";break;
                case '2': echo "Two";break;
                case '3': echo "Three";break;
                case '4': echo "Four";break;
                case '5': echo "Five";break;
                case '6': echo "Six";break;
                case '7': echo "Seven";break;
                case '8': echo "Eight";break;
                case '9': echo "Nine";break;
                case '10': echo "Ten";break;
                
            }
        } else if($number <= 20) {
            switch ($number) {
                case '11': echo "Eleven";break;
                case '12': echo "Twelve";break;
                case '13': echo "Thirteen";break;
                case '14': echo "Fourteen";break;
                case '15': echo "Fifteen";break;
                case '16': echo "Sixteen";break;
                case '17': echo "Seventeen";break;
                case '18': echo "Eighteen";break;
                case '19': echo "Nineteen";break;
                case '20': echo "Twenty";break;
            }
        } else if($number < 100) {
            $arrNumber = str_split($number);
            $firstNumber = $arrNumber[0];
            $secondNumber = $arrNumber[1];
            // echo $firstNumber . "," . $secondNumber;
            switch ($firstNumber) {
                case '2': $firstNumber = 'Twenty';break;
                case '3': $firstNumber = 'Thirty';break;
                case '4': $firstNumber = 'Forty';break;
                case '5': $firstNumber = 'Fifty';break;
                case '6': $firstNumber = 'Sixty';break;
                case '7': $firstNumber = 'Seventy';break;
                case '8': $firstNumber = 'Eighty';break;
                case '9': $firstNumber = 'Ninety';break;
            }
            switch ($secondNumber) {
                case '0': $secondNumber = '';break;
                case '1': $secondNumber = 'one';break;
                case '2': $secondNumber = 'two';break;
                case '3': $secondNumber = 'three';break;
                case '4': $secondNumber = 'four';break;
                case '5': $secondNumber = 'five';break;
                case '6': $secondNumber = 'six';break;
                case '7': $secondNumber = 'seven';break;
                case '8': $secondNumber = 'eight';break;
                case '9': $secondNumber = 'nine';break;
            }
            echo "$firstNumber $secondNumber";
        }   else {
            $arrNumber = str_split($number);
            $firstNumber = $arrNumber[0];
            $secondNumber = $arrNumber[1];         
            $thirdNumber = $arrNumber[2];   
            
            switch ($firstNumber) {
                case '1': $firstNumber = 'One';break;
                case '2': $firstNumber = 'Two';break;
                case '3': $firstNumber = 'Three';break;
                case '4': $firstNumber = 'Four';break;
                case '5': $firstNumber = 'Five';break;
                case '6': $firstNumber = 'Six';break;
                case '7': $firstNumber = 'Seven';break;
                case '8': $firstNumber = 'Eight';break;
                case '9': $firstNumber = 'Nine';break;
            }

            switch ($secondNumber) {
                case '0': $secondNumber = '';break;
                
                case '1':
                    $secondNumber = "";
                    switch ($thirdNumber) {
                        case '1': $thirdNumber = "eleven";break;
                        case '2': $thirdNumber = "twelve";break;
                        case '3': $thirdNumber = "thirteen";break;
                        case '4': $thirdNumber = "fourteen";break;
                        case '5': $thirdNumber = "fifteen";break;
                        case '6': $thirdNumber = "sixteen";break;
                        case '7': $thirdNumber = "seventeen";break;
                        case '8': $thirdNumber = "eighteen";break;
                        case '9': $thirdNumber = "nineteen";break;
                    };
                    break;

                case '2': $secondNumber = 'twenty';break;
                case '3': $secondNumber = 'thirty';break;
                case '4': $secondNumber = 'forty';break;
                case '5': $secondNumber = 'fifty';break;
                case '6': $secondNumber = 'sixty';break;
                case '7': $secondNumber = 'seventy';break;
                case '8': $secondNumber = 'eighty';break;
                case '9': $secondNumber = 'ninety';break;
            }

            switch ($thirdNumber) {
                case '0': $thirdNumber = '';break;
                case '1': $thirdNumber = 'one';break;
                case '2': $thirdNumber = 'two';break;
                case '3': $thirdNumber = 'three';break;
                case '4': $thirdNumber = 'four';break;
                case '5': $thirdNumber = 'five';break;
                case '6': $thirdNumber = 'six';break;
                case '7': $thirdNumber = 'seven';break;
                case '8': $thirdNumber = 'eight';break;
                case '9': $thirdNumber = 'nine';break;
            }

            if($secondNumber == '' && $thirdNumber == '') {
                echo "$firstNumber hunderd $secondNumber $thirdNumber";
            } else {
                echo "$firstNumber hunderd and $secondNumber $thirdNumber";
            }
   
            
        }


    }
?>

</body>
</html>