<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Kukuh Dwi Karyadi Nugroho beristri Ibu Lia</h2>
        <p>Bapak Kukuh Dwi Karyadi Nugroho adalah anak dari <a href="keluarga-sungadi.php">Bapak Muhammad Sungadi dengan Ibu Suyati</a>.</p>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Bapak Sungadi"]
            B --> C["Bapak Kukuh"]

            click A "index.php"
            click B "keluarga-sungadi.php"
        </div>
	</section>
	<script type="module">
		import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
		mermaid.initialize({ startOnLoad: true });
	</script>
</main>
<?php include 'footer.php'; ?>