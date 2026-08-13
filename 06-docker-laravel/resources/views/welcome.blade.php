<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Tailwind CSS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="bg-white rounded-2xl shadow-xl p-10 text-center max-w-md w-full">

            <div class="w-20 h-20 bg-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                <span class="text-white text-3xl font-bold">
                    ✓
                </span>
            </div>

            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                Tailwind CSS
            </h1>

            <p class="text-lg text-gray-600 mb-6">
                Laravel + Tailwind CSS v4 berhasil!
            </p>

            <button
                class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg
                       hover:bg-blue-700 transition duration-300">
                Tailwind Berhasil
            </button>

        </div>

    </div>

</body>
</html>