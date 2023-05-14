<?php
include './sidebar.php';
?>
<link rel="stylesheet" href="../css/style1.css">


<div class="menu flex flex-col gap-[2.5rem]">
    <div class="starter flex items-center justify-between ">
        <span class="text-[2rem] flex-[9]">Food Items</span>
        <div class="flex-[1] flex justify-end w-[1rem]">
            <button onclick="document.getElementById('id5').style.display='block'" class="bg-[orange] p-2 rounded-[0.7rem] ">
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

<div id="id5" class="modal w-[95rem] h-full flex items-center rounded">

    <form class="modal-content animate flex-[1] mt-[5rem] mx-auto w-[40rem] h-[30rem] flex flex-col  rounded-[1.2rem] " action="./profile/manage_cart.php" method="post">
        <div class="imgcontainer flex-end">
            <span onclick="document.getElementById('id5').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="flex items-center justify-center">

            <div class="imgcontainer  flex flex-col items-center mt-[5rem] gap-[2rem]">
                <div class="container mt-[2rem] flex flex-col gap-[1.2rem]">


                    <div class="flex items-center gap-[1rem]">
                        <label class="w-[8rem] flex justify-start p-1"><b>Food Name</b></label>
                        <input type="text" id="qty" class="qty rounded-[0.5rem] w-[22rem]" placeholder="Enter Quantity" name="food_name" />
                    </div>
                    <div class="flex items-center gap-[1rem]">
                        <label class="w-[8rem] flex justify-start p-1"><b>Description</b></label>
                        <textarea type="text" id="qty" class="qty rounded-[0.5rem] w-[22rem]" placeholder="Enter Quantity" name="description"></textarea>
                    </div>
                    <div class="flex items-center gap-[1rem]">
                        <label class="w-[8rem] flex justify-start p-1"><b>Food Price</b></label>
                        <input type="text" id="qty" class="qty rounded-[0.5rem] w-[22rem]" placeholder="Enter Quantity" name="price" />
                    </div>
                    <div class="flex items-center gap-[1rem]">
                        <label class="w-[8rem] flex justify-start p-1"><b>Food Image</b></label>
                        <!-- <input type="image" width="48" height="48" class="qty rounded-[0.5rem] w-[16rem]"
                        placeholder="Enter Quantity" name="food_name" /> -->
                        <input type="file" class="qty rounded-[0.5rem] w-[22rem] border p-1" id="img" name="image_upload" accept="image/*">
                    </div>

                    <button type="submit" name="add_to_cart" class="bg-[green] w-[10rem] mx-auto  rounded text-[white] p-2 mt-[1rem]">
                        Add Food
                    </button>
                </div>
            </div>


        </div>

    </form>
</div>

<script>
    var modal5 = document.getElementById('id5');
    window.onclick = function(event) {
        if (event.target == modal5) {
            modal5.style.display = "none";
        }
    }
</script>