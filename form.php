<?php
    include 'functions.php';
?>

                    <form id="form" action="" method="post">
                        <h1>Contact me</h1>
                        <div class="input-control
                                    <?php 
                                            if(empty($nameErr)){
                                                echo "success";
                                                }else{
                                                echo "error";

                                            } 
                                    ?>
                        ">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" value="<?php echo htmlentities($name);?>">
                            <div class="error"><?php echo $nameErr ?></div>
                        </div>
                        <div class="input-control
                        
                                    <?php 
                                            if(empty($mailErr)){
                                                echo "success";
                                                }else{
                                                echo "error";

                                            } 
                                    ?>
                        
                        ">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="text" value="<?php echo htmlentities($email);?>">
                            <div class="error"><?php echo $mailErr ?></div>
                        </div>
                        <div class="input-control
                        
                        <?php 
                                            if(empty($phoneErr)){
                                                echo "success";
                                                }else{
                                                echo "error";

                                            } 
                                    ?>

                        ">
                            <label for="number">Phone Number</label>
                            <input id="number"name="number" type="number" value="<?php echo htmlentities($num);?>">
                            <div class="error"><?php echo $phoneErr ?></div>
                        </div>
                        <div class="input-control
                        
                        <?php 
                                            if(empty($msgErr)){
                                                echo "success";
                                                }else{
                                                echo "error";

                                            } 
                                    ?>
                        
                        ">
                            <label for="msg">Massage</label>
                            <textarea id="msg" name="msg" rows="3"><?php echo htmlentities($massage);?></textarea>
                            <div class="error"><?php echo $msgErr ?></div>
                        </div>
                        <button type="submit" name="sub" onclick="window.location.href ='#contact';">Send</button> 
                        <!-- //https://www.scaler.com/topics/how-to-make-a-button-link-to-another-page-in-html/ -->
                    </form>  
