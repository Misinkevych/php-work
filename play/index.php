<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
</head>
<body>


<!-- <form method="post">
    <p>Оберіть число від "1"</p>
    
     <p>до "10" </p>

    <input type="number" name="guess" min="<?php echo $_SESSION['min_range']; ?>" max="<?php echo $_SESSION['max_range']; ?>">
    <input type="submit" value="Вгадати">
</form> -->






<?php
session_start();

// загальна кількість спроб
$number_attempts= 3; 
// рандомне число
$number_rand = rand(1, 10);
// скільки спроб у нас залишилось
$attempts = 3;
// Оголошення повідомлення
$messege="Початок гри";
// підключення формим отримання числа,яке обрав користувач
$number_select=0;
// Додаємо кнопку для ресет гри
$button_text = "Вгадати";

// Беремо із сесії кількість спроб,яка в нас залишилась 
if (isset($_SESSION['attempts'])){
$attempts=$_SESSION['attempts'];

}
// Перевіряємо наявність обраного числа переданого з форми
if(isset($_GET['number_select'])){
    $number_select=$_GET['number_select'];


    // Записуємо в сесію загадане число
  $_SESSION['number_select']=$number_select;

// -------------------------------------
// Не знаю як зробити щоб загадане число не було активне
// ??????????????????????????????????????

  if($number_select)
    // Прирівнюємо наше прийняте значення з випадковим числом
    if($number_rand==$number_select){
        $messege="Вітаємо! Ви виграли!"; 
        $attempts = $number_attempts; // Скидаємо спроби після виграшу
        $button_text = "Нова гра";
 
    }else {
        $messege="ви не виграли"; 

    }
}
// зменшуємо кількість спроб, якщо закінчилась записуємо в сесію початкове значення (максимальної кількості спроб)
if($attempts>0){
    $attempts--;
    $_SESSION['attempts']=$attempts; 
}else {
    // Дописуємо повідомлення
    $messege.="Спроби закінчились";
    $_SESSION['attempts']=$number_attempts;
    $button_text = "Нова гра"; 
}







?>
<h1>Гра "Екстрасенс"</h1>
<form method='get'>
<p>Оберіть число від "1" до "10" </p>

<select name="number_select">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
<input type="submit" value="<?=$button_text?>">

<p> <?=$messege?>
</p>

</form>
</body>
</html>





