<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="text-[red]" class="text-[red]">
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="./index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                    <a href="./" class="mr-5 hover:text-gray-900">
                        Home
                    </a>
                    <a href="./contact.php" class="mr-5 hover:text-gray-900">
                        Contact Us
                    </a>
                    <a href="./about.php" class="mr-5 hover:text-gray-900">
                        About us
                    </a>

                </nav>

                <button onclick="document.getElementById('id01').style.display='block'"
                    style="width:auto;">Login</button>

                <button onclick="document.getElementById('id02').style.display='block'"
                    style="width:auto;">SignUp</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="/action_page.php">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit"
                                class="bg-[green] w-[8rem] rounded text-[white] p-2 mt-[1rem]">Login</button>
                        </div>

                    </form>
                </div>
                <div id="id02" class="modal">

                    <form class="modal-content animate" action="/action_page.php">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                                title="Close Modal">&times;</span>
                        </div>

                        <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit"
                                class="bg-[green] w-[8rem] rounded text-[white] p-2 mt-[1rem]">Login</button>
                            <!-- <input type="checkbox" checked="checked"> Remember me -->
                        </div>
                        <!-- 
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div> -->
                    </form>
                </div>

                <script>
                var modal = document.getElementById('id01');
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                var modal1 = document.getElementById('id02');
                window.onclick = function(event) {
                    if (event.target == modal1) {
                        modal1.style.display = "none";
                    }
                }
                </script>
</body>

</html>

</div>
</header>
</div>