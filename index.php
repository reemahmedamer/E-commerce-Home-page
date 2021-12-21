<!DOCTYPE html>
<html>
    <head>

        
           <link rel="stylesheet" href="index.css">

<?php
$db = mysqli_connect("localhost", "root","", "coco") or die ("Error - Could not connect to MySQL");




?>
    </head>
    
    <body>
        <div class="navbar">
                 <p id="logoName">COCO</p>
                 <div class="right">
                 <div class="dropdown">
                    <a class="products" >Products</a>
                    <div class="dropdown-content">
                      <a href="#Clothing & Bags">Clothing & Bags</a>
                      <a href="#Home Accessories">Home Accessories</a>
                      <a href="#Kids">Kids</a>
                      <a href="#Beauty">Beauty</a>
                    </div>
                  </div>
                 <input type="search" placeholder="Search" class="searchbar">
                 <button class="search">Search</button>
                 <a href="" >Cart</a>
                 <a href="login.html" >Create Account</a>
                 <a href="log.html">Login</a>
                 
                </div>
        </div>


        <div class="mainDiv" id="Clothing & Bags">
            <p class="mainTitle">Clothing & Bags</p>

            <?php 

            $query="SELECT * FROM products WHERE category= 'clothing and bags'";
            $result= mysqli_query($db,$query) or die ("couldnot execute query");
            
            while($row = $result->fetch_assoc()){
    
            echo "<div class='productSpec'>
                <img src='./$row[name].jpg'/>
                <div class='details'>
                <div class='info'>
                    <p class='productName'>$row[name]</p>
                    <p class='price'>$row[price] EGP</p>
                    
                </div>
                    <div class='buttons'>
                        <button class='view' onclick='project.html'>View Item</button>
                        <button class='view' onclick=''>Add to cart</button>
                    </div>
                </div>
                </div>";

            }

        ?>
            
            
        </div>


        <div class="mainDiv" id="Home Accessories">
            <p class="mainTitle">Home Accessories</p>
            <?php 

$query="SELECT * FROM products WHERE category= 'home'";
$result= mysqli_query($db,$query) or die ("couldnot execute query");

while($row = $result->fetch_assoc()){

echo "<div class='productSpec'>
    <img src='./$row[name].jpg'/>
    <div class='details'>
    <div class='info'>
        <p class='productName'>$row[name]</p>
        <p class='price'>$row[price] EGP</p>
        
    </div>
        <div class='buttons'>
            <button class='view'>View Item</button>
            <button class='view'>Add to cart</button>
        </div>
    </div>
    </div>";

}

?>
            
        </div>

        

        <div class="mainDiv" id="Kids">
            <p class="mainTitle">Kids</p>
            <?php 

$query="SELECT * FROM products WHERE category= 'kids'";
$result= mysqli_query($db,$query) or die ("couldnot execute query");

while($row = $result->fetch_assoc()){

echo "<div class='productSpec'>
    <img src='./$row[name].jpg'/>
    <div class='details'>
    <div class='info'>
        <p class='productName'>$row[name]</p>
        <p class='price'>$row[price] EGP</p>
        
    </div>
        <div class='buttons'>
            <button class='view'>View Item</button>
            <button class='view'>Add to cart</button>
        </div>
    </div>
    </div>";

}

?>

            
        </div>


        <div class="mainDiv" id="Beauty">
            <p class="mainTitle">Beauty</p>
            <?php 

$query="SELECT * FROM products WHERE category= 'beauty'";
$result= mysqli_query($db,$query) or die ("couldnot execute query");

while($row = $result->fetch_assoc()){

echo "<div class='productSpec'>
    <img src='./$row[name].jpg'/>
    <div class='details'>
    <div class='info'>
        <p class='productName'>$row[name]</p>
        <p class='price'>$row[price] EGP</p>
        
    </div>
        <div class='buttons'>
            <button class='view'>View Item</button>
            <button class='view'>Add to cart</button>
        </div>
    </div>
    </div>";

}

?>
            
  </div>

  <div class="footer">
    <div class="footlist">
     <h2 style="color: #F7F9Fb;" >ABOUT US</h2> 
     <h3>COCO is an easy-to-use online platform where you can find Egypt’s best handmade and locally-produced goods, gifts, and treasures. We provide a platform for small-scale artists and artisans to share and sell their work online.

     </h3>
     <h2 style="color: #F7F9Fb;" >CONTACT US</h2>
     
     <h3>info@COCO.com</h3>
     
    </div>

    <div class="footlist">
    <h2 style="color: #F7F9Fb;" >PRIVACY POLICY</h2> 
    <h3>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.
        We use a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.After a transaction, your private information such as your credit cards, will not be stored, sold, shared, rented or leased to any third parties.</h3>
    </div>
  
  </div>

        
        
        
            
    </body>
</html>