<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    
<form action="send.php" method="post">
    <h1>Contact Form</h1>
    <input type="text" name="name" placeholder="Enter your name"><br>
   <input type="email" name="email" placeholder="Enter your email"><br>
     <input type="text" name="phone" placeholder="Enter your phone number"><br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea><br>
    <button type='submit' name='send'>Submit</button>
</form>


</body>
</html>