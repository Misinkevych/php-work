<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        output{
            font-size: 38px; 
            color: purple; 
        }
        input{         
            width: 200px;
            height: 30px;
            border:none;
            background-color: green;
            color:white;
        }
        p{
            font-size: 18px;
        }
    .pour-water {
      color: orange;
      
    }
    .full-cup {
      color: green;
     
    }

    .remainder-water{
      color: red;
     
    }
    .brewing-time{
        color: pink;

    }
    .stir-tea{
        color: blue;  
    }
    .ready-tea{
        color: purple;  
    }
    .sugar-tea{
        color: brown;  
    }
  </style>
</head>
<body>
<form method="POST" >
<input type="range" name="totalWater" value="50" mim="50" max="1000" step="50" oninput="this.nextElementSibling.value=this.value"> 
<output>50</output>
<input  type="submit" value="Розпочати заварювання">
</form>
    <?php




$totalWater = 1000; 
$totalTeaBags = 4;
$sugarPerCup = 0.5; 
$totalCups = 3; 
$brewTime = 2/5;

// Підвязуємо метод пост обираємо змінну   $totalWater
if(isset($_POST['totalWater'])){
    $totalWater=$_POST['totalWater'];
}
// Перший цикл в якому розраховуємо кількість води до чашок
for($j=$totalWater; $j>0; $j-=250){
    $totalSugar = 0;
    echo "<p class=remainder-water>залишилось води:$j </p>";
    $totalTime=0;

$totalValue=250;
// Якщо у нас залишок менше 250 то наступний цикл буде виконувати 
// менші дії відповідно обсягу
if($j<250){
    $totalValue=$j;
}

// 2 цикл розлиття води, розрахунок цукру , розрахунок часу заварювання
for($i=50; $i<= ($totalValue); $i+=50){
    echo  " <p class= pour-water >Налито: $i  мл води</p> ";
    $totalSugar +=$sugarPerCup;
    $totalTime += $brewTime;

}
// вивеення повідомлень
$waterPerCup = $totalWater / $totalCups;
echo "<p class='brewing-time'  >час заварювання: $totalTime сек</p>";

echo "<p class=sugar-tea>кількість цукру: $totalSugar г</p>";

echo "<p class= full-cup>Кружка повна</p>";

echo "<p class = stir-tea>Розмішуємо</p>";
echo "<p class=ready-tea>Кружка чаю готова</p>";
}

 












// if($totalWater=="1000"){
//     echo " Налито:$totalWater мл води Чайник закипів";
// echo "<br>";
// }
// else if ($totalWater="50"){
//     echo " Налито:$totalWater мл води"; 
    
// }
// echo "<br>";
// if($totalWater="100"){
//     echo " Налито:$totalWater мл води"; 
// }
// echo "<br>";
// if($totalWater="150"){
//     echo " Налито:$totalWater мл води"; 
// }
// echo "<br>";
// if($totalWater="200"){
//     echo " Налито:$totalWater мл води"; 
// }
// echo "<br>";
// if($totalWater="250"){
//     echo " Налито:$totalWater мл води"; 
//     echo "<br>";
//     echo " Кружка повна"; 
// }
// if($totalSugar){

// }


























// $water = 1000;

// $Cups = 3;

// $sugar= 2.5;

// $time = 2;






// for ($i = 1; $i <= $Cups; $i++) {
//     // Налито води
//     $waterAmount = $water * $i;
//     $log= "$i. Налито {$waterAmount}мл води";

//     // Кількість цукру для даної чашки
//     $sugarAmount = $sugar * $i;
//     $log = "   Кидаємо {$sugarAmount} ложки цукру";

//     // Опускаємо чайний пакетик і чекаємо
//     $log = "   Опускаємо чайний пакетик на {$time} секунд";
    
//     // Розмішуємо
//     $log = "   Розмішуємо";
    
//     // Кружка чаю готова
//     $log = "   Кружка чаю готова";
// }














// $totalWater = 1000; 
// $totalTeaBags = 4;
// $sugarPerCup = 2; 
// $brewTime = 3;
// $totalCups = 3; 

// $totalSugar = $sugarPerCup * $totalCups;
// $waterPerCup = $totalWater / $totalCups;




















// // Перевірка на правильність введених даних
// if ($totalWater < 50 || $sugarPerCup  < 1 || $totalCups < 0 || $brewTime  < 1) {
//     // die("Невірні вхідні дані");
// }

// // Величина кроку для рівномірного розподілу ресурсів
// $step = $totalWater / $totalCups;

// // Лог операцій
// $log = [];

// // Чайник закипів
// $log[] = "1. Чайник закипів";

// for ($i = 1; $i <= $totalCups ; $i++) {
//     // Налито води
//     $waterAmount = $step * $i;
//     $log[] = "$i. Налито {$waterAmount}мл води";

//     // Кількість цукру для даної чашки
//     $sugarAmount = $sugarPerCup * $i;
//     $log[] = "   Кидаємо {$sugarAmount} ложки цукру";

//     // Опускаємо чайний пакетик і чекаємо
//     $log[] = "   Опускаємо чайний пакетик на {$totalTeaBags} секунд";
    
//     // Розмішуємо
//     $log[] = "   Розмішуємо";
    
//     // Кружка чаю готова
//     $log[] = "   Кружка чаю готова";
// }

// // Виводимо лог операцій на екран
// foreach ($log as $step => $operation) {
//     echo ($step + 1) . ". " . $operation . "<br>";
// }
?>
</body>
</html>