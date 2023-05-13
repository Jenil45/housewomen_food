<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.load("visualization", "1", { packages: ["corechart"] });
    </script>
    <script type="text/javascript">
        google.load("visualization", "1", { packages: ["bar"] });
        google.charts.load('current', { 'packages': ['line'] });
        google.charts.load('current', { 'packages': ['table'] });
    </script>

    <title>Document</title>
</head>

<body>
    <div class="dashboard bg-[white] h-[100vh] flex">
        <div class="sidebar flex-[1.4] bg-gray-500 my-[20px] p-4 flex flex-col gap-[2rem] rounded-r-[2rem]">
            <div class="upper  flex gap-[1rem] item-center justify-around">
                <img src="./04012019-07.jpg" class="rounded-full w-[100px] h-[100px]" alt="" srcset="">
            </div>
            <div class="upper">
                <h2 class="text-bold text-[whitesmoke]">Navbar</h2>
                <div class="flex flex-col">
                    <ul class="flex flex-col items-center justify-center gap-[1rem] mt-[1rem]">

                        <a
                            href="./"
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            Home</a>
                        <a
                            href="./addmenu.php"
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            About</a>
                        <li
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            Contact</li>

                    </ul>
                </div>
            </div>
            <div class="upper">
                <h2 class="text-bold text-[whitesmoke]">Dashboard</h2>
                <div class="flex flex-col">
                    <ul class="flex flex-col items-center justify-center gap-[1rem] mt-[1rem]">

                        <li
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            Graphs</li>
                        <li
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            Table</li>
                        <li
                            class="w-[120px] h-[45px] border rounded border-[white] p-[0.8rem] text-center text-gray-100 text-bold">
                            Analysis</li>

                    </ul>
                </div>
            </div>
        </div>