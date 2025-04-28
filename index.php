<?php
include 'header.php';
?>
<main>
	<section>
		<h2>H. Muhammad Sutarno beristri Hj. Ngadisem</h2>
		<p>H. Muhammad Sutarno adalah seorang pegawai KUA yang beristrikan Hj. Ngadisem. Beliau memiliki 10 orang anak.</p>
		<h3>Daftar Anak</h3>
		<ol>
			<li><a href="keluarga-sungadi.php">Bapak Muhammad Sungadi beristri Ibu Suyati</a></li>
			<li><a href="keluarga-dirsyam.php">Ibu Salimah bersuami Bapak Dirsyam Adiwijaya</a></li>
			<li><a href="keluarga-sujamin.php">Bapak H. Sujamin A. Ansori beristri Ibu Hj. Umiatul Mastuti</a></li>
			<li><a href="keluarga-rochmat.php">Ibu Suwahmi bersuami Bapak Rochmat</a></li>
			<li><a href="keluarga-sudarno.php">Bapak H. Sudarno beristri Ibu Hj. Sri Suratmi</a></li>
			<li><a href="keluarga-triwibowo.php">Ibu Sungadiyah bersuami Bapak Tri Wibowo</a></li>
			<li><a href="keluarga-saebani.php">Bapak Saebani beristri Ibu Nur Solihatun</a></li>
			<li><a href="keluarga-supriyo.php">Bapak H. Tamyiz Supriyo beristri Ibu Hj. Neng Aisi Pariha</a></li>
			<li><a href="keluarga-asep.php">Ibu Hj. Siti Jaenah bersuami Bapak H. Asep Rochaenasyir</a></li>                
			<li><a href="keluarga-sitinuriyah.php">Ibu Siti Nuriyah</a></li>
		</ol>
		<p>Lihat silsilah keluarga besar H. Muhammad Sutarno <a href="silsilah.php">di sini</a>.</p>
	</section>
	<section>
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid">flowchart TD
			A["Mbah Sutarno"] 
			A --> 1 & 2 & 3 & 4 & 5 & 6 & 7 & 8 & 9 & 10
		</div>
	</section>
	<script type="module">
		import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs';
		mermaid.initialize({ startOnLoad: true });
	</script>
</main>
<?php include 'footer.php'; ?>