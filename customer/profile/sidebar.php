<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                    clifford: "#da373d",
                },
            },
        },
    };
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    <title>Document</title>
</head>

<body>
    <div class="dashboard bg-gray-100 h-[100vh] flex ">
        <div class="sidebar flex-[1.8] bg-[white] my-[20px] p-4 pl-1flex flex-col gap-[2rem] rounded-r-[2rem] ">
            <div class="upper flex gap-[1rem] item-center justify-around">
                <img src="../../images/svg/user.svg" class="rounded-full w-[100px] h-[100px]" alt="" srcset="" />
            </div>
            <div class="upper shadow-xl border rounded-[0.5rem] mt-[2rem]">
                <h2 class="text-bold text-gray-500 p-2">Profile</h2>
                <div class="flex flex-col">
                    <ul class="flex flex-col items-center justify-center gap-[0.2rem] mt-[1rem]">
                        <a href="./"
                            class="w-[100%] border-l-[5px] border-red-500 bg-red-100 h-[45px] border-0  p-[0.8rem] text-center text-black font-semibold">
                            My Profile
                        </a>
                        <a href="./editprofile.php"
                            class="w-[100%] h-[45px]  p-[0.8rem] text-center text-black font-semibold hover:bg-gray-200 hover:border-l-[4px] hover:border-l-gray-500 ">
                            Edit Profile
                        </a>

                    </ul>
                </div>
            </div>
            <div class="upper shadow-xl border rounded-[0.5rem] mt-[2rem]">
                <h2 class="text-bold text-gray-500 p-2">Orders</h2>
                <div class="flex flex-col">
                    <ul class="flex flex-col items-center justify-center gap-[0.2rem] mt-[1rem]">
                        <a href="./orderhistory.php"
                            class="w-[100%]  h-[45px] border-0  p-[0.8rem] text-center text-black font-semibold hover:bg-gray-200 hover:border-l-[4px] hover:border-l-gray-500 ">
                            Order History
                        </a>
                        <a href="./cart.php"
                            class="w-[100%] h-[45px]  p-[0.8rem] text-center text-black font-semibold hover:bg-gray-200 hover:border-l-[4px] hover:border-l-gray-500 ">
                            My Cart
                        </a>
                        <a href="./"
                            class="w-[100%]  h-[45px] p-[0.8rem] text-center text-black font-semibold hover:bg-gray-200 hover:border-l-[4px] hover:border-l-gray-500 ">
                            Reviews
                        </a>

                    </ul>
                </div>
            </div>

        </div>
        <div class="mainpage flex-[9] bg-gray-100 flex flex-col z-[0]">
            <div class="graphs bg-[white] flex-[9] m-[20px] p-[0.2rem] rounded-[1.45rem] shadow-2xl">