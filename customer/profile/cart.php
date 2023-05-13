<?php
include './sidebar.php';

// session_start()
?>
<div class="flex">
    <table class="flex-[1]" border="1">
        <thead>
            <tr>
                <th>Food Name</th>
                <th>Food Price</th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>


            <?php

            // print_r($_SESSION['cart']);
            $total = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    $total_food = $value['price'] * $value['qty'];
                    $total = $total + $total_food;
                    // echo $total;
                    echo "<tr>
                    <td>" . $value['foodname'] . "</td>
                    <td>" . $value['price'] . "</td>
                    <td>" . $value['qty'] . "</td>
                    <td>" . $total_food . "<td>
                    <td>
                    <form action='./manage_cart.php' method='post'>
                        <button type='submit' name='remove'>Remove</button>
                        <input type='hidden' name='qty' value='" . $value['qty'] . "' />
                    </form>
                        <td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <div class="p-4 w-[20rem] flex-[1] bg-gray-200 h-[20rem]">
        <span>Total Order Amount : </span>
        <?php echo $total; ?>
    </div>
</div>