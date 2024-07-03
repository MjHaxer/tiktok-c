<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED ROOM</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: red;
            font-size: 48px;
            margin-top: 50px;
        }
        .qr-code {
            margin: 20px auto;
            width: 150px; /* Adjust the width of the QR code */
        }
        .qr-code img {
            width: 100%;
        }
        .payment-details {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .payment-details input {
            width: 80%; /* Adjust the width of the input fields */
            padding: 5px; /* Reduce the padding of the input fields */
            margin-top: 10px;
            font-size: 14px; /* Reduce the font size */
            text-align: center;
            border: none;
            border-radius: 5px;
            background-color: #333; /* Add background color to input fields */
            color: white;
        }
        .instructions {
            color: red;
            margin-top: 10px;
        }
        .loading-bar {
            margin: 30px auto;
            width: 80%;
            height: 20px;
            background-color: #333;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        .loading-bar::before {
            content: "";
            display: block;
            width: 20%;
            height: 100%;
            background-color: red;
            animation: loading 2s infinite;
        }
        @keyframes loading {
            0% { left: 0; }
            50% { left: 80%; }
            100% { left: 0; }
        }
        footer {
            margin-top: 30px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>RED ROOM</h1>
        <p>You choose Commander Access.<br>After confirmation you will get full access.</p>
        <div class="qr-code">
            <img src="qr-code.png" alt="QR Code">
        </div>
        <div class="payment-details">
            <p>Pay amount</p>
            <input type="text" value="0.0041 BTC" readonly>
            <p>To Bitcoin address</p>
            <input type="text" value="193s9w7A3iarmte7MHJeSuQt3S9HyDNeHo" readonly>
            <p class="instructions">Send exactly 0.0041 BTC.NETWORK(BITCOIN) This address will be working only one complete payment.</p>
        </div>
        <div class="loading-bar"></div>
        <p class="instructions">waiting for your payment</p>
        <footer>
            <p>Do not close or refresh the page. Payment time 2 hours. After payment you will redirect to page account creation and authorization. Save the data as this process cannot be reversed in case of loss.</p>
        </footer>
    </div>
</body>
</html>
