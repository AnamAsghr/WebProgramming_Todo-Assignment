<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

    <title> Anam Asghar Todo List </title>
</head>

<body>

<form method="post">
    <input type = "text"   name = "input">
    <input type = "submit" value = "add" Name = "send">
</form>

<?php
if(isset($_SESSION['todo'])!=1)
{$_SESSION['todo'] = array(); }

else
{ 
    $temp = $_SESSION['todo'];
    if(isset($_POST['send']))
    { $task = $_POST['input'];
      if($task != "")
      { 
          array_push($temp,$task);
      }
    }
    if ($temp != NULL)
    {
        $i_counter = 1;
        foreach($temp as $values)
        {
            if($values != "")
            {
                echo "<p><strong>".strval($i_counter)."</strong> : $values </p>";
                $i_counter
                ++;
            }
        }
    }
    $_SESSION['todo'] = $temp;
}
?>
</body>
</html>