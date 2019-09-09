<?php
	session_start();
	if (md5($_POST['norobot']) == $_SESSION['randomnr2'])	{ 

        if( isset($_POST) ) {
            $name = $_POST['name'];
            $second_name = $_POST['second-name'];
            $third_name = $_POST['third-name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone-number'];
            $organization = $_POST['organization'];
            $social_place = $_POST['social-place'];
            $index = $_POST['index'];
            $country = $_POST['country'];
            $region = $_POST['region'];
            $area = $_POST['area'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $house = $_POST['house'];
            $house_body = $_POST['house-body'];
            $apartment = $_POST['apartment'];
            $text_of_request = $_POST['text-of-request'];
        }



		if (isset($_FILES['file1'])) {
            $current_path = $_FILES['file1']['tmp_name'];
            $filename = $_FILES['file1']['name'];
            $new_path =  '../files/' . $filename;
        
        move_uploaded_file($current_path, $new_path);
        }
        if (isset($_FILES['file2'])) {
            $current_path = $_FILES['file2']['tmp_name'];
            $filename = $_FILES['file2']['name'];
            $new_path =  '../files/' . $filename;
        
        move_uploaded_file($current_path, $new_path);
        }
        if (isset($_FILES['file3'])) {
            $current_path = $_FILES['file3']['tmp_name'];
            $filename = $_FILES['file3']['name'];
            $new_path =  '../files/' . $filename;
        
        move_uploaded_file($current_path, $new_path);
        }
        if (isset($_FILES['file4'])) {
            $current_path = $_FILES['file4']['tmp_name'];
            $filename = $_FILES['file4']['name'];
            $new_path =  '../files/' . $filename;
        
        move_uploaded_file($current_path, $new_path);
        }
        if (isset($_FILES['file5'])) {
            $current_path = $_FILES['file5']['tmp_name'];
            $filename = $_FILES['file5']['name'];
            $new_path =  '../files/' . $filename;
        
        move_uploaded_file($current_path, $new_path);
        }
        
        
        require('../templates/thankyou.php');
	}	else {  
        header('Location: ../templates/MainForm.php ');
	}






/*if (isset($_POST)) {
    print("Фамилия: " . $_POST['second-name']);
    print("<br>Имя: " . $_POST['name']);
    print("<br>Отчество: " . $_POST['third-name']);
}*/


?>