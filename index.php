<!DOCTYPE html>
<html>

<head>
    <title>Project 2 - Welcome</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <header class="sticky">
        <?php include "includes/nav.php" ?>
    </header>
    
    <div class="content" id="hero">
        <div class="grid">
            <div class="container">
                <img src="images/neworleans-pano.jpg" alt="New Orleans"/>
                <div class="container-overlay">
                    <div class="container-details fadeIn-bottom">
                        <h3 class="container-title">New Orleans</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <img src="images/newyorkcity.jpg" alt="New York City"/>
                <div class="container-overlay">
                    <div class="container-details fadeIn-bottom">
                        <h3 class="container-title">New York City</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <img src="images/sanfran-skyline.jpg" alt="San Fransisco"/>
                <div class="container-overlay">
                    <div class="container-details fadeIn-bottom">
                        <h3 class="container-title">San Fransisco</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <img src="images/toronto-skyline.jpg" alt="Toronto"/>
                <div class="container-overlay">
                    <div class="container-details fadeIn-bottom">
                        <h3 class="container-title">Toronto</h3>
                    </div>
                </div>
            </div> 
        </div>
        <div class="button-box">
            <a href="neworleans.php">
                <button>
                    <p>LET'S GO<p>
                </button>
            </a>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
</body>
</html>