<?php
    $module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';

    $json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

    $data = json_decode($json,true);
    $list = $data['records'];


?>

<h1> Category list </h1>

<table cellspacing="0" cellpadding="0">
		    <tr>
				<td class="tdP" >CATEGORY NAME</td>
			</tr>
		<?php
            foreach($list as $value)
		{
        ?>
		<tr>	
            <td><?php echo $value['category_name'];?></td>
		</tr>	
        <?php
    	}
		?>
	</table>
