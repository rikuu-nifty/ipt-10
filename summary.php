<?php
    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : 'Not provided';
    $middlename = isset($_POST['middlename']) ? htmlspecialchars($_POST['middlename']) : 'Not provided';
    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : 'Not provided';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Not provided';
    $phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : 'Not provided';
    $sex = isset($_POST['sex']) ? htmlspecialchars($_POST['sex']) : 'Not provided';
    $sex = ucfirst($sex); 
    $birthdate = isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : 'Not provided';
    $program = isset($_POST['program']) ? htmlspecialchars($_POST['program']) : 'Not provided';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : 'Not provided';

    $full_name = $firstname . ' ' . $middlename . ' ' . $lastname;

    $name_background_color = ($sex === 'Male') ? '#0000FF' : (($sex === 'Female') ? '#FF0000' : '#FFFFFF');

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Summary</title>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background-color: #e0f7fa; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }";
    echo ".container { display: flex; flex-direction: column; align-items: center; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 100%; max-width: 800px; }";
    echo "h1 { color: #00796b; }";
    echo "p { margin: 10px 0; }";
    echo ".name { background-color: $name_background_color; padding: 5px; border-radius: 4px; color: white; display: inline-block; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Registration Summary</h1>";
    echo "<p><strong>Name:</strong> <span class='name'>$full_name</span></p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone_number</p>";
    echo "<p><strong>Sex:</strong> $sex</p>";
    echo "<p><strong>Birthdate:</strong> $birthdate</p>";
    echo "<p><strong>Program:</strong> $program</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
?>
