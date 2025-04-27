<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Sri Sukaesih bersuami Bapak Yayat</h2>
        <p>Ibu Sri Sukaesih adalah anak dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau bersuami Bapak Yayat dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Nisa</li>
            <li>Ulima</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Ibu Salimah"]
            B --> C["Ibu Sri Sukaesih"]
            C --> D["Nisa"] & E["Ulima"]

            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
	<script type="module">
		import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
		mermaid.initialize({ startOnLoad: true });
	</script>
</main>
<?php include 'footer.php'; ?>