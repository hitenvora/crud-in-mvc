

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<center>
    <input type="text" name="fnm" value="<?php echo $shwlist[0]["name"]; ?>"  <br><br>
    <input type="email" name="em" value="<?php echo $shwlist[0]["email"]; ?>"  <br><br>
    <input type="text" name="ph" value="<?php echo $shwlist[0]["phone"]; ?>"  <br><br>
    <input type="submit" name="upd" value="submit">

</form>    
</center>
</body>
</html>
