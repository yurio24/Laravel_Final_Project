<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-lg w-full max-w-sm">
            <h1 class="text-3xl font-bold mb-4">Welcome to My Blog</h1>
            <p class="text-gray-700 mb-4">This is a simple blog created with Laravel.</p>
            <p>
                <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login</a> or 
                <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Register</a> to continue
            </p>
        </div>
    </div>
</body>
</html>

