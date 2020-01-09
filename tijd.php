<?php
$numbersInSeconds = array();
$totalSeconds = 0;
foreach ($argv as $value)
{
  $character = substr($value, -1);
  $number = substr($value, 0, -1);
  switch ($character)
  {
    case 's':
      array_push($numbersInSeconds, (int)$number);
      break;
    case 'm':
      array_push($numbersInSeconds, ($number * 60));
      break;
      case 'u':
        array_push($numbersInSeconds, ($number * 60 * 60));
        break;
        case 'd':
          array_push($numbersInSeconds, ($number * 360 * 24));
          break;
    default:
      // code...
      break;
  }
}
foreach ($numbersInSeconds as $value)
{
  $totalSeconds += $value;
}
echo "Alles bij elkaar is $totalSeconds secondes";
 ?>
