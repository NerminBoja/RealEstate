<?php

if(isset($page))

{
	$result = mysqli_query($con,"select Count(*) As Total from houses");

	$rows = mysqli_num_rows($result);

	if($rows)

		{

		$rs = mysqli_fetch_assoc($result);

		$total = $rs["Total"];

		}

$totalPages = ceil($total / $perpage);



			if($page <=1 )
			{
				echo "<span id='page_links' style='font-weight: bold;'> Prev </span>";
			}

			else

			{
			$j = $page - 1;
			echo "<span><a id='page_a_link' href='houses.php?page=$j'>< Prev </a></span>";
			}

		for($i=1; $i <= $totalPages; $i++)
		{
			if($i<>$page)
			{
				echo "<span><a id='page_a_link' href='houses.php?page=$i'>$i</a></span>";
			}
			else
			{
			echo "<span id='page_links' style='font-weight: bold;'>$i</span>";
			}
		}

	if($page == $totalPages )
	{
	echo "<span id='page_links' style='font-weight: bold;'> Next ></span>";
	}

	else
	{
	$j = $page + 1;
	echo "<span><a id='page_a_link' href='houses.php?page=$j'> Next </a></span>";
	}
}

?>