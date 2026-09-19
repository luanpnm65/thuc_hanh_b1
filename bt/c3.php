<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(-101, 101);
        echo "n = $n", "<br>    ";
        if($n>0){
            echo "Cac uoc so cua n: ";
            for($i = 1; $i<=$n; $i++){
                if($n % $i == 0){
                    echo "$i ";
                }
            }
            echo "<br>";
            if($n < 2){
                echo "$n không phải số nguyên tố", "<br>";
            }else if($n == 2){
                echo "$n là số nguyên tố", "<br>";
            }else{
                $temp=0;
                for($i = 2; $i<$n; $i++){
                    if($n % $i == 0)
                        $temp++;
                }
                if($temp == 0)
                    echo "$n là số nguyên tố", "<br>";
                else echo "$n Không phải số nguyên tố.", "<br>";
            }
            $tongNT = 0;
            $j=1;
            while($j < $n){
                if($j < 2){
                    $tongNT +=0;
                }else if($j == 2){
                    $tongNT += $j;
                }else{
                    $temp=0;
                    for($i = 2; $i<$j; $i++){
                        if($j % $i == 0)
                            $temp++;
                    }
                    if($temp == 0)
                        $tongNT += $j;
                }
                $j++;
            }
            echo "Tổng các số nguyên tố bé hơn $n là: $tongNT", "<br>";
            if(sqrt($n)==(int)sqrt($n))
                echo "$n là số chính phương";
            else echo "$n không phải là số chính phương.";
        }
        else{
            echo "$n Không phải là số dương!";
        }
        
    ?>
</body>
</html>