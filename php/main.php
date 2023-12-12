<div class="notice">
	<h4>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database";

			$con = mysqli_connect($servername, $username, $password, $dbname);

			$sql = "select * from _notice order by num desc limit 5";
			$result = mysqli_query($con, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
				$num = $row["num"];
				$name = $row["name"];
				$date = $row["regist_day"];
				$date = substr($date, 0, 10);

				$subject = $row["subject"];
				$subject = htmlspecialchars_decode($subject, ENT_QUOTES);			
		?>

		<div class="item">
			<span class="col1">
				<a href="../mboard/index.php?type=view&table=_notice&num=<?=$num?>&page=1">
					<?=$subject ?>
				</a>
			</span>			
			<span class="col2"><?=$date?></span>
		</div>
		<?php
			}
		?>
	</div>
</h4>

<div class="qna">
	<h4>Q&A</h4>
</div>
<?php
	$sql = "select * from _qna order by num desc limit 5";
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$num = $row["num"];
		$name = $row["name"];
		$date = $row["regist_day"];
		$date = substr($date, 0, 10);

		$subject = $row["subject"];
		$subject = htmlspecialchars_decode($subject, ENT_QUOTES);		
	?>
	<div class="item">
			<span class="col1">
				<a href="../mboard/index.php?type=view&table=_notice&num=<?=$num?>&page=1">
					<?=$subject ?>
				</a>
				<?php 
					$sql = "select * from _qna_ripple where parent=$num";
					$result2 = mysqli_query($con, $sql);
					$num_ripple = mysqli_num_rows($result2);

					if ($num_ripple) {
						echo " [$num_ripple]";		
					}			
				?>	
			</span>
			<span class="col2"></span>
		</div>
	<?php
		}
		mysqli_close($con);

	?>
</div>