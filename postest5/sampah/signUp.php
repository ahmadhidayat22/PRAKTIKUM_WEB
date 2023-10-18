
<?php
// session_set_cookie_params(10800); // Mengatur waktu kedaluwarsa sesi menjadi 3 jam
// session_start();

require 'server.php';



// if($_POST['password'] == $_POST['cpassword']){
    
    
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset($_POST['submit']) ){
        $fullname = $_POST['fullName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $noHp = $_POST['number'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO user_account VALUES ('','$fullname','$username','$email','$noHp,'$password')";

        $result = mysqli_query($conn, $sql);

        
        if( $result ){
            echo "
            <script>
                alert('Success adding data');
                document.location.href = 'test.php';

            </script>

            ";

        }else{
            echo "
            <script>
                alert('Failed adding data');
                document.location.href = 'signUp.html';

            </script>

            ";


        }

        // $_SESSION['fullname'] = $fullname;
        // $_SESSION['username'] = $username;
        // $_SESSION['email'] = $email;
        // $_SESSION['number'] = $noHp;
        // $_SESSION['password'] = $password;
        
    }
    
    // header('location:./home.php');
// }
// else{
    

//     echo "
//     <script>
//     alert('Please enter');
//     </script>
//     ";
    
//     header('location:./signUp.html');
    
// }

?>
