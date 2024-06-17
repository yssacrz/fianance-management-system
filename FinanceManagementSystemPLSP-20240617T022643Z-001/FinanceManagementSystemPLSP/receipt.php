<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Page</title>
    <style>
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: green;
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
            color: rgb(0, 0, 0);
            text-align: center;
            font-size: 50px;
            font-family: Algerian;
            border-radius: 10px;
            margin-top: 10px;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #109050;
            background-size: cover;
            margin-top: 120px; 
        }

        .receipt-container {
            background-color: rgba(255, 255, 255, 0.911);
            padding: 30px;
            width: 800px;
            border: 2px solid #000000;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            align-items: center;
        }

        .receipt-details {
            font-size: 40px;
        }

        .receipt-details p {
            margin: 5px 0;
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
            margin: 10px;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="PLSP-Logo-1.png" alt="Pamantasang Lungsod ng San Pablo Logo">
            <span class="logo-text">Pamantasang Lungsod<br> Ng San Pablo</span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <div class="receipt-container">
            <h2>Receipt</h2>
            <div class="receipt-details" id="receiptDetails"></div>
            <button id="confirmButton">Confirm</button>
            <button onclick="window.location.href='other_page.php'">Back to Register</button>
        </div>
    </div>
    <script>
        window.onload = function() {
            const params = new URLSearchParams(window.location.search);
            const receiptDetails = document.getElementById('receiptDetails');

            let detailsHtml = '<p><strong>First Name:</strong> ' + params.get('firstName') + '</p>';
            detailsHtml += '<p><strong>Last Name:</strong> ' + params.get('lastName') + '</p>';
            detailsHtml += '<p><strong>Course:</strong> ' + params.get('course') + '</p>';
            detailsHtml += '<p><strong>Date:</strong> ' + params.get('dates') + '</p>';
            detailsHtml += '<p><strong>Amount:</strong> ' + params.get('amount') + '</p>';

            const selectedItems = params.getAll('selectable[]');
            if (selectedItems.length > 0) {
                detailsHtml += '<p><strong>Selected Items:</strong></p><ul>';
                selectedItems.forEach(item => {
                    detailsHtml += '<li>' + item + '</li>';
                });
                detailsHtml += '</ul>';
            }

            receiptDetails.innerHTML = detailsHtml;
        };

        document.getElementById('confirmButton').addEventListener('click', function() {
            const params = new URLSearchParams(window.location.search);
            const data = {
                firstName: params.get('firstName'),
                lastName: params.get('lastName'),
                course: params.get('course'),
                dates: params.get('dates'),
                amount: params.get('amount'),
                selectable: params.getAll('selectable[]')
            };

            fetch('confirm_registration.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.text())
            .then(data => {
                alert('Registration confirmed!');
                window.location.href = 'other_page.php';
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
