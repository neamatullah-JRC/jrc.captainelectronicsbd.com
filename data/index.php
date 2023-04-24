<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <meta http-equiv="refresh" content="10"; url="<?php echo $_SERVER['PHP_SELF']; ?>">
   
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>sn</th>
         <th>latitute</th>
         <th>longitute</th>
         <th>time</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['lat']??''; ?></td>
      <td><?php echo $data['lng']??''; ?></td>
      <td><?php echo $data['created_time']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
        
    <?php
    }?>
    </tbody>
     </table>
   </div>
   <img src="logo.jpg" alt="Flowers in Chania">
</div>
</div>
</div>
</body>
</html>