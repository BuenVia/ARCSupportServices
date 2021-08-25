<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resetstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/ac3ba74ae6.js" crossorigin="anonymous"></script>
    <title>ARC Support Services</title>
</head>
<body>
    
<div class="grid">
    <!--Header/ Navbar-->
    <header>
            <div class="header" id="navbar">
                
                <a href="javascript:void(0)" class="icon" onclick="navHead()">
                    <i class="fas fa-bars"></i>
                </a>
                
                <img src="images/new_arc_logo.png" alt="ARC Support Services">

                <section class="profile">
                    <h1>JAMES CLIFFORD</h1>
                    <h2>Email:</h2>
                    <h2>james@arcsupportservices.co.uk</h2>
                    <h2>Tel: +44 7956 202 722</h2>
                </section>


                <a href="javascrtipt:void(0)">Home</a>
                <a href="javascrtipt:void(0)" id="abtBtn">About</a>
                <a href="javascrtipt:void(0)" id="conBtn">Contact</a>
                <a href="vda/" id="abtBtn" target="_blank">VDA</a>
                <a href="admin/" id="conBtn" target="_blank">Admin</a>              

            </div>
    </header>

    <!--Main Body-->
    <main>

            <section class="intro">
                <h1>WE BELIEVE IN CHALLENGING THE STATUS QUO!</h1><br>
                <p>A manager accepts, the leader challenges...</p>
                <div id="success"></div>
            </section>

            <section>
                <p>Download our latest eBook.........<<br>
                    "Change Is Inevitable, Growth Is Optional"</p>
                    <button id="ebkBtn"><i class="fas fa-book"></i> Free eBook</button>
            </section>

            <section class="social">
                <a href="https://www.facebook.com/arcsupportservices/" target="_blank"> <i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/ARCSupport" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/james-clifford-vda-imi-mimi-15ba1b25/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/arcsupport?igshid=525d636u8bhj" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/ARCSupport/" target="_blank"><i class="fab fa-youtube"></i></a>
            </section>

    </main>
</div>

    <!--eBook-->
    <section id="ebkMod" class="ebk">
        <div class="ebk-content">
            <span class="ebkCls">&times;</span>
            <h2>Download our latest eBook<h2>
                <p>"Change Is Inevitable, Growth Is Optional"</p>
                <form action="includes/main.inc.php" method="POST">
                    <input type="text" name="ebookName" placeholder="Name..." required/>
                    <input type="text" name="ebookEmail" placeholder="Email..." required/>
                    <button type="submit" name="ebook-submit">SUBMIT</button>  
                </form>        
        </div>
    </section>

  

    <script src="js/main.js"></script>
</body>
</html>