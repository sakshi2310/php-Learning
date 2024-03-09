<?php 
$a=array();
$total_sub=5;
for($i=1;$i<=5;$i++)
{
	$b=array();
	for($j=1;$j<=$total_sub;$j++)
	{
		$b['sub'.$j]=rand(0,100);
	}
	$a['student'.$i]=$b;
}

echo "<pre>";
print_r($a);
 ?>
 <table border="1">
 	<tr>
 		<th>name</th>
 		<?php for($k=1;$k<=$total_sub;$k++){ ?>
 			<th> sub <?php echo $k; ?></th>
 		<?php } ?>
 		<th>total</th>
 		<th>per</th>
 		<th>min</th>
 		<th>max</th>
 		<th>cnt</th>
 		<th>result</th>
 		<th>grade</th>
 	</tr>
 		<?php foreach($a as $k=>$v){ ?>
 			<tr>
 			<td><?php echo "".$k; ?></td>
 		
 			<?php
 			$total=0;
 			$min=$v['sub2']; 
 			$max=$v['sub1'];
 			$cnt=0;
 			foreach($v as $mark){ 
 				$total=$total+$mark;
 				if($mark<$min){
 					$min=$mark;
 				}
 				if($mark>$max)
 				{
 					$max=$mark;
 				}
 				
 				if($mark<=33)
 				{
 					$cnt++;
 				}
 				$result;
 				$grade;
 				$per;
 				if($cnt==0)
 				{
 					$per=$total/$total_sub;

  					$result="pass";
 					
 				}else if($cnt<=2)
 				{
 					$per=0;
 					$result="atkt";
 				}else
 				{
 					$per=0;
 					$result="fail";
 				}
 				if($per>70)
 					{
 						$grade="dis";
 					}else if($per>60)
 					{
 						$grade="first";
 					}else if($per>50)
 					{
 						$grade="secound";
 					}else if($per>35)
 					{
 						$grade="third";
 					}else
 					{
 						$grade="-";
 					} 

 				?>

 			<td><?php echo $mark; ?></td>

 			<?php } ?>
 	 		<td><?php echo $total; ?></td>
 	 		<td><?php echo $per ?></td>

 	 		<td><?php echo $min; ?></td>
 	 		<td><?php echo $max; ?></td>
 	 		<td><?php echo $cnt; ?></td>
 	 		<td><?php echo $result; ?></td>
 	 		<td><?php echo $grade; ?></td>


 			<?php } ?>
 	</tr>


 </table>
