
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div>
    <section
    class="ezy__login light flex items-center justify-center py-14 md:py-24 text-black bg-cover bg-right bg-no-repeat relative"
    style="background-image: url(https://cdn.easyfrontend.com/pictures/background/background4.jpg)"
    >
    <div class="container px-4 mx-auto">
        <div class="flex justify-center">
        <div class="w-full md:w-2/3">
            <div class="bg-white shadow-xl p-4">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2">
                <div class="flex items-center justify-center h-full">
                    <img
                    src="https://cdn.easyfrontend.com/pictures/background/abstract-background3.jpg"
                    alt=""
                    class="max-h-[300px] w-full lg:max-h-full lg:h-full object-cover"
                    />
                </div>
                </div>
                <div class="w-full lg:w-1/2 mt-6 lg:mt-0 lg:pl-6">
                <div class="flex flex-col justify-center items-center text-center h-full p-2">
                    <h2 class="text-[26px] leading-none font-bold mb-2">LOGIN FORM</h2>
                    <form class="w-full mt-6" method="POST">
                    <div class="w-full relative mb-4">
                        <input
                        type="text"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="username"
                        name="username"
                        placeholder="Username or Email"
                        />
                        <i class="fas fa-user absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>
                    <div class="w-full relative mb-4">
                        <input
                        type="password"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="password"
                        name="password"
                        placeholder="Password"
                        />
                        <i class="fas fa-lock absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>

                    <input type="submit" class="bg-gray-700 py-4 px-10 text-white hover:bg-opacity-95 mt-4" value="Login">

                    <div class="text-center mt-4">
                        <p class="mb-0 text-sm">
                        Don't have an account?
                        <a href="signup.php" class="hover:text-blue-600">Sign Up</a>
                        </p>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    </div>
</body>
</html>


<?php

require '../config/database.php';

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($db->login($username, $password)) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}

?>
