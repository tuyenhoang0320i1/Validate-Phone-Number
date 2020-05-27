<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_REQUEST["phone"];

    function checkPhoneNumber($string)
    {
        $pattern = '/^[84]{2}\-[0]{1}[3|7|8|9]{1}[2-9]{1}[0-9]{7}$/';
//
//        $pattern = '/^\([84]{2,}\)\-\([0]{1,}[0-9]{9}\)$/';
        if (preg_match($pattern, $string)) {
            echo "This phone number is valid";
        } else {
            echo "This phone number is not valid";
        }
    }

    checkPhoneNumber($phone);
//    Ví dụ số điện thoại hợp lệ: 84-0979271851


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Phone: </label>
    <br>
    <input type="text" name="phone">
    <br>
    <button type="submit">Check</button>
    <br><br>

    <?php echo "The phone number valid has format: 84-0979123456 "?>

</form>
</body>
</html>
