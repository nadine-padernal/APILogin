<h1>Welcome User</h1>


<!--google credits by m-a-j-a-->
<div style="background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left: auto;
  margin-right: auto;
  width: 50%;">
  <img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:100%">
  <div style="text-align: center;
  padding: 10px 20px;">
  <h1>Profile Picture</h1><!-- credits: john paul maja :D <3 -->
  </div><!-- credits: john paul maja :D <3 -->
</div><!--credits by m-a-j-a-->
<h1>Name: <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?> </h1>
<h1>Email: <?php echo $_SESSION['user_email_address'] ?></h1>

<h1><a href="logout-google.php">Logout</a></h1><!--credits by m-a-j-a-->

