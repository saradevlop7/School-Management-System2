<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

      <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800">
          <div class="p-6 space-y-4 sm:p-8">

              <h1 class="text-xl font-bold text-gray-900 md:text-2xl dark:text-white">
                  Create an account
              </h1>

              <!-- ERROR MESSAGE -->
              <?php if(isset($_GET['error'])){ ?>
                  <p style="color:red;">Tous les champs sont obligatoires</p>
              <?php } ?>

              <form class="space-y-4" action="scripts/authprocess.php" method="POST">

                  <div>
                      <label class="block mb-2 text-sm text-gray-900 dark:text-white">First Name</label>
                      <input type="text" name="firstname" class="bg-gray-50 border rounded-lg w-full p-2.5" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm text-gray-900 dark:text-white">Last Name</label>
                      <input type="text" name="lastname" class="bg-gray-50 border rounded-lg w-full p-2.5" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm text-gray-900 dark:text-white">Email</label>
                      <input type="email" name="email" class="bg-gray-50 border rounded-lg w-full p-2.5" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" class="bg-gray-50 border rounded-lg w-full p-2.5" required>
                  </div>

                  <button type="submit" name="register" class="w-full text-white bg-blue-600 rounded-lg px-5 py-2.5">
                      Sign up
                  </button>

                  <p class="text-sm text-gray-500">
                      Already have an account? 
                      <a href="login.php" class="text-blue-600 hover:underline">Login</a>
                  </p>

              </form>
          </div>
      </div>

  </div>
</section>
</body>
</html>