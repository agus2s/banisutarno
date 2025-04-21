<?php
include 'header.php';
?>
<h2>Silsilah Keluarga</h2>
<img src="silsilah.svg" id="zoomable" width="500">
<script>
	const img = document.getElementById("zoomable");
	let scale = 1; // Menyimpan level zoom

	img.addEventListener("wheel", (event) => {
		event.preventDefault();
		let zoomFactor = event.deltaY < 0 ? 1.1 : 0.9;
		let newScale = scale * zoomFactor;

		// Tetapkan batas zoom (misalnya 0.5x hingga 3x ukuran asli)
		if (newScale >= 0.5 && newScale <= 3) {
			scale = newScale;
			img.style.transform = `scale(${scale})`;
		}
	});
</script>
<?php
include 'footer.php';
?>