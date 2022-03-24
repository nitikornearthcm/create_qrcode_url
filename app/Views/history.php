<!DOCTYPE html>
<html lang="en">
<head>
  <title>History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table, th, td {
  border: 1px solid;
}
</style>
</head>
<body>
<div class="container">
  <h2>ประวัติรายการสร้าง Short URL</h2>
  <p><?php echo empty($history) ? 'ยังไม่มีรายการ !' : 'มีรายการดังต่อไปนี้...'; ?> </p>
  <table class="table">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th style="text-align: center;">Full URL</th>
        <th style="text-align: center;">วันที่/เวลา ที่สร้าง</th>
        <th style="text-align: center;">Short URL</th>
        <th style="text-align: center;">QR Code</th>
      </tr>
    </thead>
    <tbody >
        <?php 
            if(!empty($history)){
                $class = array("1"=>"success","2"=>"danger","3"=>"info","4"=>"warning","5"=>"active");
                $no = 1;
                $y = 1;
                foreach($history as $key => $value){
        ?>
                    <tr  class="<?php echo $class[$y++] ; ?>">
                        <td><?php echo $no++; ?></td>
                        <td><u><a href="<?php echo $value['full_url']; ?>" target="_blank"><?php echo $value['full_url']; ?></a> </u></td>
                        <td style="width: 400px;"><?php echo $value['create_time']; ?></td>
                        <td><u><a href="<?php echo $value['short_url']; ?>" target="_blank"><?php echo $value['short_url']; ?></a> </u></td>
                        <td><img src="https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=`<?php echo $value['short_url']; ?>`" alt=""></td>
                    </tr>     
      <?php 
                    $y = $y > 4 ? $y = 0 : $y = $y;
                }
            }
        ?> 
    </tbody>
  </table>
</div>
</body>
</html>

