<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bank</title>
  <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
  <?php
  $json = file_get_contents("../../src/databank.json");
  // print_r(json_decode($json));
  $data_bank = json_decode($json);
  if (isset($_POST['subbtn'])) {
    // echo $_POST['bank'].;
    // echo $data_bank[$_POST['bank']]->image;
    // echo "<image src =">.$data_bank[$_POST['bank']]->image."/>";
  
    ?>
    <center class="container mx-auto ">
      <h1 class="text-8xl mt-5 mb-5">รายละเอียด</h1>
      <img src="<?= $data_bank[$_POST['bank']]->image ?>" alt="">
      <h2>
        ชื่อธนาคาร
      <?= $data_bank[$_POST['bank']]->bank_name ?></h2>
      <h2>
        ชื่อ <?= $_POST['first_name']?></h2>
      <h2>
        นามสกุล <?= $_POST['last_name']?></h2>
      <h2>จำนวนเงิน <?= $_POST['amount']?></h2>
      <h2>เบอร์โทร <?= $_POST['phone']?></h2>
      <h2>อีเมล์ <?= $_POST['email']?></h2>
    </center>
  <?php } ?>


</body>

</html>