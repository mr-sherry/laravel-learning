<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Laravel App</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-200">Home</a>
                <a href="/about" class="hover:text-blue-200">About</a>
                <a href="/services" class="hover:text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200 text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h1>
            <p class="text-xl text-gray-600">Get in touch with our team.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Send us a message</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Name</label>
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Send Message</button>
                </form>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="font-medium text-gray-800">Address</h3>
                        <p class="text-gray-600">123 Laravel Street<br>PHP City, WEB 12345</p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Phone</h3>
                        <p class="text-gray-600">(555) 123-4567</p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Email</h3>
                        <p class="text-gray-600">info@laravelapp.com</p>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-800">Business Hours</h3>
                        <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>