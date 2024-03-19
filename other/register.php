<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title> sign up</title>
    </head>
    <body>
        <div class="main">
            <div class="center">
                <div class="form">
                    <h3> registration form</h3>
                    <form action="" method="POST" >
                        <label for="">First Name</label>
                            <input type="text" class="input" name="fname">

                        <label for="">last name</label>
                            <input type="text" class="input" name="lname">

                        <label for="">email</label>
                            <input type="email" class="input" name="email" auto-co>

                        <label for="">password</label>
                            <input type="password"  class="input"name="password">
                            <button class="btn" type="submit" name="sign_up">sign up</button>





                    </form>
                    
                </div>
            </div>
        </div>

    </body>
</html>
<?php 
include('conn.php');
if(isset($_POST['sign_up'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $insert=$conn->query("INSERT INTO `paeple`(`pid`, `fname`, `lname`, `email`, `password`)
           VALUES ('','$fname','$lname','$email','$pass')");
           if($insert){
            ?>
            <script>
                window.alert("well inserted")
                window.history.back()
            </script>
            <?php 
           }
            else{
                ?>
                <script>
                    window.alert("not insrted")
                    window.history.back()
                </script>
                <?php 
            }

           
}
?>
