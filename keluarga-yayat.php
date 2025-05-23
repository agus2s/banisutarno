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
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
            flowchart LR
            A["Mbah Sutarno"]  --> B["Ibu Salimah"] --> C["Ibu Sri Sukaesih"]
            C --> 1["Nisa"] & 2["Ulima"]
            D[Bapak Dirsyam] --> C

            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>