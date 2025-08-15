<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Laravel App</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-200 text-black">Home</a>
                <a href="/about" class="hover:text-blue-200">About</a>
                <a href="/services" class="hover:text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Laravel!</h1>
            <p class="text-xl text-gray-600 mb-6">This is a simple practice application to learn Laravel routing and views.</p>
            <a href="/about" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Learn More</a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-3 text-gray-800">🚀 Fast Development</h3>
                <p class="text-gray-600">Laravel provides powerful tools for rapid application development.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-3 text-gray-800">🔒 Secure</h3>
                <p class="text-gray-600">Built-in security features to protect your application.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-3 text-gray-800">📈 Scalable</h3>
                <p class="text-gray-600">Easy to scale as your application grows.</p>
            </div>
        </div>
    </div>
</body>
</html>