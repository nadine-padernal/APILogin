<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>
<head>
	<title> API Exercise </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<nav>
<ul class="primary">
    <li>
      <a href="">Products</a>
      <ul class="sub">
				<li><a href='index.php?mod=Prod'>Product List</a></li>
      </ul>
    </li>
    <li>
      <a href="">Categories</a>
      <ul class="sub">
				<li><a href='index.php?mod=Cat'>Category List</a></li>
      </ul>
    </li>
    <li>
    <a href="#" onclick="signOut();">Sign out</a>
      <script>
        function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
            console.log('User signed out.');
          });
        }
      </script>
    </li>
  </ul>
</nav>
<div id="container">
      <?php
      switch ($module) {
        case 'Prod':
          require_once 'product.php';
        break;
        case 'Cat':
          require_once 'categories.php';
        break;
        case 'PDtls':
          require_once 'product_details.php';
        break; 
        }
          ?>
  </div>

<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];
 
if(isset($_POST['search'])){
   $search = $_POST['search'];
   $jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
   $res = json_decode($jsearch,true);

   $list = $res['records'];
   
}else{
   $list = $data['records'];
}
?>

<h1> Product List </h1>

    <div class="searchholder">
		<div class="search">
			<form method="POST" action="index.php?mod=Prod">
				<input class="searchtxt" type="text" name="search">
				<input class="searchbtn" type="submit" name="submit" value="Search">
            </form>
        </div>
	</div>
<table>
    <tr>
        <td class="tdP" >Product</th>
        <td class="tdP" >Price</th>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><a style="color:#000;" href="index.php?mod=PDtls&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
    ?>
</table>
