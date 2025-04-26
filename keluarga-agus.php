<?php include 'header.php'; ?>
<script type="module">
	import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
	mermaid.initialize({ startOnLoad: true });
</script>
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
			Sutarno["Mbah Sutarno"] 
			Sutarno --> Sudarno["Bapak Sudarno"]
			Sudarno --> Agus["Bapak Agus Supriyadi"]

			click Sutarno "index.php"
			click Sudarno "keluarga-sudarno.php"</div>
		</section>
    </main>
<?php include 'footer.php'; ?>