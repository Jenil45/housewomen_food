<?php
session_start();
// session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {

            // duplicate item in cart
            // $myitem = array_column($_SESSION['cart'], 'foodid');
            // if (in_array($_POST['foodid'], $myitem)) {
            //     echo `<script>
            //     alert('Item already in cart');
            //     window.location.href = 'index.php';  
            // </script>`;
            // }

            // add new item in cart
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('foodid' => $_POST['foodid'], 'foodname' => $_POST['foodname'], 'price' => $_POST['amount'], 'qty' => $_POST['quantity']);
            print_r($_SESSION['cart']);
        } else {

            // add first item in cart
            $_SESSION['cart'][0] = array('foodid' => $_POST['foodid'], 'foodname' => $_POST['foodname'], 'price' => $_POST['amount'], 'qty' => $_POST['quantity']);
            print_r($_SESSION['cart']);
        }
    }

    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['qty'] == $_POST['qty']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>window.location.href='./cart.php'</script>";
            }
        }
    }
}
