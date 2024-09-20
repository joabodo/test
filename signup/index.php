<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div>
    <section
    class="ezy__signup14 light flex items-center justify-center py-14 md:py-24 text-black bg-cover bg-right bg-no-repeat relative"
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
                    <h2 class="text-[26px] leading-none font-bold mb-2">REGISTRATION FORM</h2>
                    <form class="w-full mt-6" method="POST">
                    <div class="flex justify-center mb-4">
                        <input
                        type="text"
                        class="border-b border-black focus:outline-none focus:border-blue-600 py-2 text-sm w-1/2 mr-2"
                        id="fname"
                        name="fname"
                        placeholder="First Name"
                        />
                        <input
                        type="text"
                        class="border-b border-black focus:outline-none focus:border-blue-600 py-2 text-sm w-1/2 ml-2"
                        id="lname"
                        name="lname"
                        placeholder="Last Name"
                        />
                    </div>
                    <div class="w-full relative mb-4">
                        <input
                        type="text"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="uname"
                        name="uname"
                        placeholder="Username"
                        />
                        <i class="fas fa-user absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>
                    <div class="w-full relative mb-4">
                        <input
                        type="email"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                        />
                        <i class="fas fa-envelope absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>
                    <div class="w-full relative mb-4">
                        <input
                        type="pass"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="pass"
                        name="pass"
                        placeholder="Password"
                        />
                        <i class="fas fa-lock absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>
                    <div class="w-full relative mb-4">
                        <input
                        type="pass"
                        class="border-b border-black focus:outline-none focus:border-blue-600 text-sm w-full py-2"
                        id="con-pass"
                        name="con-pass"
                        placeholder="Confirm Password"
                        />
                        <i class="fas fa-lock absolute top-1/2 -translate-y-1/2 right-2 opacity-80"></i>
                    </div>

                    <input type="submit" class="bg-gray-700 py-4 px-10 text-white hover:bg-opacity-95 mt-4" value="Signup">

                    <div class="text-center mt-4">
                        <p class="mb-0 text-sm">
                        Already have an account?
                        <a href="#!" class="hover:text-blue-600">Log In</a>
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

include '../config/database.php';

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];

    if ($db->signup($first_name, $last_name, $username, $password, $email)) {
        echo "Signup successful";
    } else {
        echo "Signup failed";
    }
}

?>