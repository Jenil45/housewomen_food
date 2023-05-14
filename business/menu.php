<?php
include './sidebar.php';
?>

<div class="menu flex flex-col gap-[2.5rem]">
    <div class="starter flex items-center justify-between ">
        <span class="text-[2rem] flex-[9]">Food Items</span>
        <div class="flex-[1] flex justify-end w-[1rem]">
            <button class="bg-[orange] p-2 rounded-[0.7rem] ">
                Add Food +
            </button>
        </div>
    </div>
    <div class="foods flex items-center justify-center flex-wrap gap-[1.3rem]">
        <?php
        include './food_cart1.php';
        include './food_cart1.php';
        include './food_cart1.php';
        include './food_cart1.php';
        include './food_cart1.php';
        ?>
    </div>
</div>