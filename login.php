<?php include 'header.php'; ?>
       
       
       <?php
            if (isset($_SESSION['id'])) {
                echo $_SESSION['id'];
            } else  {
                echo "You are not logged in!";
            }
            
            
            ?>
        <div class="box">
            <div class="dezute" >
                <div>
                <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit">LOGIN</button>
                </form>
                </div>
                    <div>
                    <form action="includes/logout.inc.php">
                        <button>Log Out</button>

                    </form>
                    <?php
                        echo 'jus prisijunges kaip' . $_SESSION['uid'] ;
                        ?>

                <form action="">
                    <textarea name="text" id="" cols="30" rows="10">123</textarea>
                    
                </form>

            </div>
        </div>

    </body>


    </html>