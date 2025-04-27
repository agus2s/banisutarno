<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Fuad Abdillah beristri Ibu Selly</h2>
        <p>Bapak Fuad Abdillah adalah anak dari <a href="keluarga-sujamin.php">Bapak H. Sujamin Ahmad Ansori dengan Ibu Hj. Umiatul Mastuti</a>. Beliau beristri Ibu Selly dan memiliki 1 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Furqon</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Bapak Sujamin"]
            B --> C["Bapak Fuad"]

            click A "index.php"
            click B "keluarga-sujamin.php"
        </div>
	</section>
	<script type="module">
		import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
		mermaid.initialize({ startOnLoad: true });
	</script>
</main>
<?php include 'footer.php'; ?>