<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(44, 171, 44, 0.548);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-left: 2cm;
        }

        .logo img {
            max-width: 80px;
            margin-right: 15px;
            margin-left: 5px;
            margin-top: 5px;
        }

        .logo-text {
            font-family: Algerian, sans-serif;
            font-size: 40px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
        }

        h2 {
            color: rgb(43, 255, 0);
            text-align: center;
            font-size: 50px;
            font-family: Algerian;
            border-radius: 10px;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #45a049;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('plspbackround.jpg');
            background-size: cover;
            margin-top: 120px;
        }

        .form-container {
            background-color: rgb(255, 255, 255);
            padding: 30px;
            width: 1000px;
            border: 8px solid #000000;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            animation: glow 1.5s infinite alternate;
            display: flex;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 10px #272c27;
            }
            to {
                box-shadow: 0 0 20px #161916, 0 0 30px #1c231c, 0 0 40px #202520, 0 0 50px #141814;
            }
        }

        .form-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .selectable-section {
            flex: 1;
            padding-left: 20px;
        }

        .selectable-section label {
            font-weight: bold;
            font-size: 30px;
            color: #0d9e14;
            display: block;
            margin-bottom: 20px;
        }

        .selectable-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .selectable-item input[type="checkbox"] {
            margin-right: 10px;
        }

        label {
            font-weight: bold;
            font-size: 25px;
            color: #0d9e14;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #1bf207;
            border-radius: 4px;
            background-color: var(--input-color, #ffffff00);
            color: #0d0404;
            font-family: Arial, sans-serif;
            font-size: 30px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        nav {
            display: flex;
            align-items: center;
            margin-right: 1cm;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-size: 20px;
        }

        nav ul li a:hover {
            color: #ff0000;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 30px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="PLSP-Logo-1.png" alt="Pamantasang Lungsod ng San Pablo Logo">
            <span class="logo-text">Pamantasang Lungsod<br> Ng San Pablo</span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="index.php#contact_us">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="form-container">
            <div class="form-section">
                <form id="registrationForm" action="register.php" method="POST">
                    <input type="text" name="firstName" placeholder="First Name" autocomplete="off" required>
                    <input type="text" name="lastName" placeholder="Last Name" autocomplete="off" required>
                    <input type="text" name="course" placeholder="Course" autocomplete="off" required>
                    <input type="date" name="dates" autocomplete="off" required>
                    <input type="number" name="amount" placeholder="Amount" autocomplete="off" required>
                    <div class="button-container">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
            <div class="selectable-section">
                <label>What are you going to pay for?</label>
                <div class="selectable-item">
                    <input type="checkbox" id="grades_copy" name="selectable[]" value="Grades Copy">
                    <label for="grades_copy">Grades Copy</label>
                </div>
                <div class="selectable-item">
                    <input type="checkbox" id="good_moral" name="selectable[]" value="Good Moral">
                    <label for="good_moral">Good Moral</label>
                </div>
                <div class="selectable-item">
                    <input type="checkbox" id="id_lace" name="selectable[]" value="I.D Lace">
                    <label for="id_lace">I.D Lace</label>
                </div>
                <div class="selectable-item">
                    <input type="checkbox" id="uniform" name="selectable[]" value="Uniform">
                    <label for="uniform">Uniform</label>
                </div>
                <div class="selectable-item">
                    <input type="checkbox" id="other" name="selectable[]" value="Other">
                    <label for="other">Other</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
