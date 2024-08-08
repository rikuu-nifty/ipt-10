<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; 
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        hr {
            width: 100%;
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        form {
            width: 100%;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="date"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #00796b; 
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #004d40; 
            opacity: 0.9;
        }

     
        .radio-group {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        .radio-group label {
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLkFO4IHvloG3nu6ITeUXlP9Zma4n2tfo3og&s" alt="Logo">
        <hr>
        <form action="summary.php" method="POST">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone_number">Phone:</label>
            <input type="text" id="phone_number" name="phone_number" value="+63" required>

            <label>Sex:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="sex" value="male" checked>
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="female">
                <label for="female">Female</label>
            </div>

            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="program">Program:</label>
            <select id="program" name="program" required>
                <option value="BSA">BS Accountancy</option>
                <option value="BSBA">BS Business Administration</option>
                <option value="BSEE">BS Electronics Engineering</option>
                <option value="BSIT">BS Information Technology</option>
                <option value="BSCS">BS Computer Science</option>
            </select>

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <input type="submit" value="Register Now">
        </form>
    </div>
</body>
</html>
