<?php
session_start();?>

<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-image :url("admin.jpg") ;
        /* background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed; */
        color: #FFF;
        text-align: center;
    }
    .addbook{
        font-size: x-large;
        width: 500px;
        border: 3px groove yellow;
        margin: 0 auto ;
        text-align: center;display: block

    }
    input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

 #bt{
width: 100%;
background-color:  #4CAF50;
margin: 8px 0;
padding: 10px 5px;
color: #FFF;
font-size: xx-large;
}

</style>


</head>

<body>
 
 <div style="margin: 0 auto; text-align: center;display: block;">  
 <h2>Enter the book details then click <span style="color:  #4CAF50;">ADD</span> to be added : </h2></div>
<div class="addbook"> 
<!-- the div that contain the form of adding book -->
<form action="addbook.php" method="POST" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;" >
<div><label for="bookid">bookID : </label> <input type="text" placeholder="BookID" name="bID" id="bID" > </div>
<div> <label for="bname"> book Name : </label> <input type="text" id="bname" name="bname" placeholder="book name" > </div>
<div> <label for="author"> author : </label> <input type="text" id="au" name="au" placeholder="author" > </div>
<div> <label for="catagory"> catagory : </label> <input type="text" id="catagory" name="catagory" placeholder="book catagory" > </div>
<div> <label for="pubyear"> publication year : </label> <input type="text" id="pubyear" name="pubyear" placeholder="publication year" > </div>
<div> <input  id="bt" type="submit" value="ADD" > </button></div>

</form>
<div style="font-size: xx-large; color: greenyellow;" > <?php if (isset($_SESSION["bookAdded"])) echo " a new book added successfully  " ;
                                                                unset($_SESSION["bookAdded"]); ?> </div>
<div> 
<button onclick="document.location.href='mainadmin.html';" >&#8617; Back</button>
</div>
<!-- the end of the div of adding book  -->
</div>

</body>


</html>