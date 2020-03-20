<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
 <nav>
<ul class="primary">
		<li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="">Products</a>
      <ul class="sub">
				<li><a href='index.php?mod=Prod'>Product List</a></li>
				<li><a href='index.php?mod=FCrt'>Add Product</a></li>
      </ul>
    </li>
    <li>
      <a href="">Categories</a>
      <ul class="sub">
				<li><a href='index.php?mod=Cat'>Category List</a></li>
      </ul>
    </li>
  </ul>
</nav>

<h1> Product Details </h1>

<table>
    <tr>
        <td class="tdP" >Product</th>
        <td class="tdP" >Description</th>
        <td class="tdP" >Price</th>
        <td class="tdP" >Category ID</th>
    </tr>

    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_id'];?></td>
        <td><a href="index.php?mod=PUp&id=<?php echo $id ?>"><img class="edit" src="images/e.png"></td>
        <td><a href="pro_delete.php?id=<?php echo $id ?>"><img class="delete" src="images/d.png"></a></td>
    </tr>

</table>

</html>
