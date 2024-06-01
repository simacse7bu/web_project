<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <h3>Anushondhan</h3>
        <p>A helping hand to find missing people</p>

    </div>
    <div class="nav">
        <a href="ini.php">Home</a>
        <a href="creatpost.php">Creat Post</a>
        <a href="">My Posts</a>
        <a href="">Logout</a>
    </div>
<center>
    <div class="fhead"><h2>Provide Following Informations</h2></div>
    <div class="fbody">
     <form action="" method="post" >
        <label for="fname">First Name:  </label>
        <input type="text" name="fname" id="fname" class="box"><br><br>
        <label for="lname">Last Name:   </label>
        <input type="lname" name="lname" id="fname" class="box"><br><br>

        <label for="gender">Gender: </label>
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="catagory">Catagory</label>
        <input type="radio" name="catagory" value="missing">
        <label for="missing">Missing</label>
        <input type="radio" name="catagory" value="founded">
        <label for="founded">Founded</label><br><br>

        <label for="pdate">Date </label>
        <input type="date" name="pdate" id="pdate" class="box"><br><br>
        <label for="location">Location:  </label>
        <input type="text" name="location" id="location" class="box" required><br><br>
        <label for="pcontract">Contract No:  </label>
        <input type="tel" name="pcontract" id="pcontract" class="box"><br><br>
        <label for="pimage">Insert Image:    </label>
        <input type="file" name="pimage" id="pimage" class="box" required><br><br>
        
        <button type="submit" value="submit">Create Post</button>
     </form>


    
   
    </center>

    
</body>
</html>