<!-- resources/views/payment-success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        /* Simple CSS for the loader */
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
    <script>
        // Redirect to the main page after 3 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, 3000);
    </script>
</head>
<body>
    <div class="loader"></div>
    <div class="message">
        Payment Successful! Redirecting to the home page...
    </div>
</body>
</html>
