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
        case 'FCrt':
          require_once 'form_create.php';
        break;
        case 'PDtls':
          require_once 'product_details.php';
        break; 
	case 'PUp':
          require_once 'form_update.php';
        break;
	default:
	    include("loginapi.php");
	    break;
		 
        }
          ?>
  </div>
