<?php
include 'header.php';
?>
<main>
	<section>
		<h2>Silsilah Keluarga</h2>
		<img src="silsilah.svg" id="zoomable">
	</section>
</main>
<script>
	const img = document.getElementById("zoomable");
	img.addEventListener("wheel", (event) => {
		event.preventDefault();
		let scale = event.deltaY < 0 ? 1.1 : 0.9;
		img.style.transform = `scale(${scale})`;
	});
</script>
<?php
include 'footer.php';
?>