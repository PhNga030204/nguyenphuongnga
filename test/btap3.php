<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Tong
    function tinhTong($a, $b)
    {
        return $a + $b;
    }

    // Hieu
    function tinhHieu($a, $b)
    {
        return $a - $b;
    }

    // Tich
    function tinhTich($a, $b)
    {
        return $a * $b;
    }

    // Thuong
    function tinhThuong($a, $b)
    {
        if ($b == 0) {
            return "Không thể chia cho 0";
        } else {
            return $a / $b;
        }
    }

    // Kiem tra so nguyen to
    function kiemTraNguyenTo($n)
    {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Kiem tra so chan
    function kiemTraChan($n)
    {
        return $n % 2 == 0;
    }
    ?>

</body>

</html>