<main>
	<script type="text/javascript">
		var sec = 3;

		function Sec() {
			document.getElementById("sec").innerHTML = sec;
			sec--;
			if (sec == 0) {
				location.replace("index.php?page=index");
			}
			setTimeout('Sec()', 1000);
		}

	</script>
	<div id="contentText">
			<p>Вы будете перенаправлены через
				<span style="color: red;
				font-weight: bold;" id="sec" name="sec">3</span>
				секунды.</p>
	</div>
	<script type="text/javascript">
		Sec();

	</script>

</main>