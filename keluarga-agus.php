<?php include 'header.php'; ?>
<main>
	<section>
		<h2>Bapak Agus Supriyadi beristri Ibu Umi Latifah</h2>
		<p>Bapak Agus Supriyadi adalah anak pertama dari <a href="keluarga-sudarno.php">Bapak Sudarno dengan Ibu Sri Suratmi</a>. Beliau beristri Ibu Umi Latifah dan memiliki 3 anak</p>
		<h3>Daftar Anak</h3>
		<ol>
			<li>Afiqa Fauziyah Latif</li>
			<li>Arsyila Yumna Fauziyah</li>
			<li>Asyifa Hanna Fauziyah</li>
		</ol>
	</section>
	<section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid">flowchart TD
		A["Mbah Sutarno"] 
		A --> B["Bapak Sudarno"]
		B --> C["Bapak Agus"]
		D["Ibu Sri"] --> C
		C --> Afiqa & Arsyila & Hanna

		click A "index.php"
		click B "keluarga-sudarno.php"</div>
	</section>
</main>
<?php include 'footer.php'; ?>