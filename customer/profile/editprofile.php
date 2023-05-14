<?php
include './sidebar.php';
?>
<form class="modal-content animate mt-[0.1rem] mx-auto  flex rounded-[1.2rem]" action="/action_page.php">


    <div class="flex flex-col mx-auto">
        <div class="imgcontainer m-auto">
            <img src="../../images/svg/user.svg" class="rounded-full w-[100px] h-[100px]" alt="" srcset="" />
        </div>

        <div class="container mt-[1.5rem] flex flex-col gap-[1rem]">

            <div class="flex flex-col  gap-[0.4rem]">

                <label class="w-[12rem] p-1"><b>Name</b></label>
                <input type="text" id="" class="rounded-[0.5rem] w-[25rem] bg-gray-100" placeholder="" value="Jenil Thakor" name="cname">
            </div>
            <div class="flex flex-col  gap-[0.4rem]">

                <label class="w-[12rem] p-1"><b>Contact Number</b></label>
                <input type="tel" id="" class="rounded-[0.5rem] w-[25rem] bg-gray-100" placeholder="" value=9787576747 name="contact">
            </div>
            <div class="flex flex-col  gap-[0.4rem]">

                <label class="w-[12rem] p-1"><b>Email</b></label>
                <input type="email" id="" class="rounded-[0.5rem] w-[25rem] bg-gray-100" placeholder="" value=jenil@gmail.com name="email">
            </div>
            <div class="flex flex-col  gap-[0.4rem]">

                <label class="w-[12rem] p-1"><b>Address</b></label>
                <input type="text" id="" class="rounded-[0.5rem] w-[25rem] bg-gray-100" placeholder="" value="Navsari" name="address">
            </div>
            <div class="flex flex-col  gap-[0.4rem]">

                <label class="w-[12rem] p-1"><b>City</b></label>
                <input type="text" id="" class="rounded-[0.5rem] w-[25rem] bg-gray-100" placeholder="" value="Navsari" name="city">
            </div>


            <button type="submit" class="bg-[green] w-[8rem] m-auto rounded text-[white] p-2 mt-[0.8rem]">Update</button>
        </div>
    </div>

</form>