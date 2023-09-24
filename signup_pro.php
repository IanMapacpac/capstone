<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Confirm form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mid_name = $_POST['mid_name'];
    $prefix = $_POST['prefix'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];

    $barangay = $_POST['barangay'];
    $municipal = $_POST['municipality'];
    $province = $_POST['province'];

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $username = $_POST['username'];
    $contact_num = $_POST['contact_num'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    // Check if the email matches
    if ($password !== $confirm_pass) {
        die("Password does not match");
    }

//    $encrypted_password = md5($pass);

    // Server Details
    include 'db_connect.php';

    // Format the date
    date_default_timezone_set('Asia/Manila');
    $formattedBirth = date('Y-m-d', strtotime($_POST['birth']));

      // Connect to the DB
$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = "fSurname01";
  //  Check for duplicate username and email
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user_info (user_id, f_name, l_name, m_name, prefix, birthday, gender, brgy, mncpl, province, email, username, contact, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user_id, $first_name, $last_name, $mid_name, $prefix, $formattedBirth, $gender, $barangay, $municipal, $province, $email, $username, $contact_num, $password]);
        
        echo "<script>alert('New Record created Successfully');";
        header('Location: user/user_profile.php');
 //get ID
 $getID = "select * from user_info where email = '$email'";
 $res = mysqli_query($con, $getID);
 if(mysqli_num_rows($res) > 0){

     foreach($res as $row){
         $last_id = $row['id_no'];
     }
 }

// //generate autopassword
// $query = "Select last_name,email, upper(left(fname,1)) as 'fletter' from users where id = '$last_id'";
// $result = mysqli_query($con, $query);

// $row = mysqli_fetch_assoc($result);
// $tempPass = 'csmdq_'.$row['fletter'].$row['lname'];
// $encrypt_pass = md5($tempPass);


// $que = "update users set pass = '$encrypt_pass' where id = '$last_id'";
// $outcome = mysqli_query($con, $que);
$tempPass = "1234";
$mailMess = "Your password is: ".$tempPass;

 //send link to email
 $mail = new PHPMailer();
 $mail-> isSMTP();
 $mail-> Host = 'smtp.gmail.com';
 $mail-> SMTPAuth = true;
 $mail-> Username = 'jcisquindoza@gmail.com';
 $mail-> Password = 'ecnvncjfwyjouyku';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = 465;

 $mail->setFrom('jcisquindoza@gmail.com');

 $mail->addAddress($email);

 $mail->isHTML(true);

 $mail->Subject = "Email Verification";
 $mail->Body = $mailMess;

 $mail->send();

 echo 
 "
 <script>
 alert('Sent succesfully');
 location.href = 'login.php';
 </script>
 ";
 
 header('Location: login.php');
        

      
    } catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>
