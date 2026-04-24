<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">
        
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Créer un compte
        </h2>

        <form action="../scripts/authprocess.php" method="POST" class="space-y-4">

            <div>
                <label class="block text-sm font-medium text-gray-600">Nom</label>
                <input type="text" name="lastname" required
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Prénom</label>
                <input type="text" name="firstname" required
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" required
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="password" name="password" required
                    class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                S'inscrire
            </button>

        </form>

    </div>

</body>
</html>