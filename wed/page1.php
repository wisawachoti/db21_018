<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบเสนอราคา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">

        <h1 class="text-center">ใบเสนอราคา</h1>
        <h3 class="text-center">บันทึกข้อมูลใบเสนอราคา</h3>


        <form action="search.php" method="post">
            <div class="from-group">
                <label for="">เลขที่ใบเสนอราคา</label>
                <input type="text" name="offer_id" id="" class="form-control">
                <label for="">วันที่</label>
                <input type="text" name="date" id="" class="form-control">
                <label for="">ประเภทการชำระเงิน</label>
                <input type="text" name="payment" id="" class="form-control">
                <label for="">ชื้อ-นามสกุล(ลูกค้า)</label>
                <input type="text" name="customer_id" id="" class="form-control">
            </div>
            <?php
            echo "<br>"
            ?>
           
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success" >
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
           
        </form>
        <?php
            echo "<br>"
        ?>
        <center>
        <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>
        </center>
    </div>
</body>

</html>