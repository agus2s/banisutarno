<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Kholid Kurniawan beristri Ibu Ratih Nurhayati</h2>
        <p>Bapak Kholid Kurniawan adalah anak pertama dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau beristri Ibu Ratih dan memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Alita Gladys Rivaldi Kurniawan</li>
            <li>Rizky Pramudyas Ratri Kurniawan</li>
            <li>Reza Jaka Taqwadhika</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Ibu Salimah"]
            B --> C["Bapak Kholid"]
            C --> D["Alita Gladys"] & E["Rizky Pramudyas"] & F["Reza Jaka"]

            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
	<script type="module">
		import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs';
		mermaid.initialize({ startOnLoad: true });
	</script>
</main>
<?php include 'footer.php'; ?>