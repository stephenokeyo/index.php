<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body></body>
<?php
  $name="stephen";
  $todo=[array("item"=> "mark attendance",
  "status"=> 1,
  "key"=> 0),array("item"=> "watch amovie",
  "status"=>0)];
echo "<h1> $name TO DO LIST</h1>";
function show_list($list){
    echo "<ol>";
    foreach($list as $item){
        echo "<li>$item[item] </li>";
    }
    echo "<ol>";
}
show_list($todo);

?>

</html>