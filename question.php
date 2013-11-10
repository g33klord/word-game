<?php include_once("con.php");
			$result = mysqli_query($con,"SELECT * FROM questions where id=".$_POST['id']);
			$re=mysqli_fetch_row($result);
?>
<hr>
<h4><?php echo $re[1]; ?> </h4>
<?php $_SESSION['answer']=$re[2]; ?>

<script>
var a = "<?php echo "$re[2]";?>";
var q="<?php echo "$re[1]"; ?>";

</script>

<?php 
$result = mysqli_query($con,"SELECT count(*) FROM questions");
			$re=mysqli_fetch_row($result);
			$random=rand(1,$re[0]);	
			$_SESSION["random"]=$random;
?>

<script type="text/javascript">
var random="<?php echo "$random"; ?>";
</script>