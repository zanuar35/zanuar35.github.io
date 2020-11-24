<?php

$person = array(
    array(
        'No'=>1,
        'Nama'=>'Cristiano Messi',
        'Tinggi Badan'=> 180,
        'Posisi'=>'Striker',
    ),
    array(
        'No'=>2,
        'Nama'=>'Bejo Leonardo',
        'Tinggi Badan'=> 167,
        'Posisi'=>'Midfielder',
    ),
     array(
        'No'=>3,
        'Nama'=>'Alfa Midi',
        'Tinggi Badan'=> 190,
        'Posisi'=>'Defender',
    ),

);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<h1>Dengan bootstrap</h1>
<br>
<table class="table table-bordered">
  <thead>
    <tr class='table-info'>
      <th scope="col" >No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Posisi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($person as $p){
        ?>
    
    <tr>
        <td><?php echo $p['No'];?></td>
        <td><?php echo $p['Nama'];?></td>
        <td><?php echo $p['Tinggi Badan'];?></td>
        <td><?php echo $p['Posisi'];?></td>
    </tr>
    <?php } ?> 
  </tbody>
</table>

<br>
<h1>Tanpa bootstrap</h1>
<table border='1' width='900'>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Tinggi Badan</td>
        <td>Posisi</td>
    </tr>

    <?php foreach($person as $p){
        ?>
    
    <tr>
        <td><?php echo $p['No'];?></td>
        <td><?php echo $p['Nama'];?></td>
        <td><?php echo $p['Tinggi Badan'];?></td>
        <td><?php echo $p['Posisi'];?></td>
    </tr>
    <?php } ?> 
</table>