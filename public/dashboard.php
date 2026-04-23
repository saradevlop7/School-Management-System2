<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4 flex justify-between items-center text-white">
    <h1 class="text-lg font-bold">EduSync Dashboard</h1>
    <button class="bg-red-500 px-4 py-1 rounded">Logout</button>
</nav>

<!-- Main Content -->
<div class="p-6">

    <!-- Welcome Card -->
    <div class="bg-white p-6 rounded shadow mb-6">
        <h2 class="text-2xl font-bold">Welcome 👋</h2>
        <p class="text-gray-600">You are connected to your dashboard</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Users</h3>
            <p class="text-3xl mt-2">120</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Courses</h3>
            <p class="text-3xl mt-2">35</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded shadow text-center">
            <h3 class="text-xl font-bold">Messages</h3>
            <p class="text-3xl mt-2">12</p>
        </div>

    </div>

</div>

</body>
</html>