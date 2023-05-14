<?php
include './sidebar.php';
?>

<link rel="stylesheet" href="../css/style1.css">
<div class="card bg-[white] shadow-xl p-2 rounded-[1.1rem] border w-[25rem] h-[18rem]">
    <div class="flex justify-between items-center border-0 border-b-[1px] border-[gray]">
        <div class="flex items-center justify-center">
            <img src="../../images/svg/logo.svg" class="w-[2rem]  " alt="">
            <span class="flex flex-col">
                <span>Kitchen Rupa</span>
                <span>City</span>
            </span>
        </div>

        Delievered
    </div>
    <div class="p-4 flex flex-col gap-[0.7rem]">
        <div class="flex items-center justify-between">
            <span class="text-[1.4rem]">Order Id : <span class="text-[1.2rem]">7388</span></span>

        </div>
        <div class="flex items-center justify-between ">
            <span class="flex rounded-[10px]   text-[1.4rem] gap-[0.4rem]">
                Total Amt : <span class="text-[1.2rem]">260₹</span>
            </span>
        </div>
        <div class="flex items-center justify-between ">
            <span class="flex rounded-[10px]   text-[1.4rem] gap-[0.4rem]">
                Order Date : <span class="text-[1.2rem]">May 14, 2023 at 08:30 </span>
            </span>
        </div>
        <a href="./orders.php">
            View More
        </a>
    </div>
</div>