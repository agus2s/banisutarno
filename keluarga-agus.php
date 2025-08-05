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
		<h3>Kenangan Abadi</h3>
		<ol>
			<li>Bapak H. Ilyas bin Abdurrozaq sekalian</li>
			<li>Ibu Rochyati binti Hasan Muhanan</li>
			<li><a href="https://dulur.my.id/baniabdurrozaq/">Mbah Abdurrozaq sekalian</a></li>
			<li>Mbah Hasan Muhanan sekalian</li>
		</ol>
	</section>
	<section>
		<h3>Silsilah Keluarga</h3>
		<div class="mermaid">
			flowchart LR
			A["Mbah Sutarno"] --> B["Bapak Sudarno"] --> C["Bapak Agus"]
			D["Ibu Sri"] --> C
			C --> Afiqa & Arsyila & Hanna

			click A "index.php"
			click B "keluarga-sudarno.php"</div>
	</section>

</main>
<?php include 'footer.php'; ?>