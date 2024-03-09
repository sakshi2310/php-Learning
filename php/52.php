<?php 
$a=array();
for($i=0;$i<5;$i++)
{
	$b=array();
	for($j=0;$j<5;$j++)
	{
		$b[$j]=rand(0,100);
	}
	$a[$i]=$b;
}
echo "<pre>";
print_r($a);
 ?>

 <table border="2">
 	<tr>
 		<td>student</td>
 		<?php for($k=1;$k<=5;$k++)
 		{ ?>
	 			<td> sub <?php echo $k; ?></td>
 		<?php } ?>
 	</tr>
 	
 		<?php for($i=0;$i<5;$i++){ ?></td>
<tr>
 		<td><?php echo 'student'.$i+1; ?></td>
 	<?php } ?>

 			<?php for($j=0;$j<5;$j++){ ?>
 				<td> <?php echo $b[$j]; ?></td>
 			<?php } ?>

 		</td>
 	</tr>
 	</tr>

 </table>
