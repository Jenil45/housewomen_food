<?php
include './_navbar.php';
?>

<div class="mt-[2.5rem] p-4 flex flex-col gap-[2rem]">
    <h1 class="text-[2.7rem] text-center">Available Menu</h1>
    <div class="flex items-center gap-[3rem] flex-wrap m-2 justify-center">
        <?php include './food_card.php'; ?>
        <?php include './food_card.php'; ?>
        <?php include './food_card.php'; ?>
    </div>
</div>