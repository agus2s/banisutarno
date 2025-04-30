<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Muslikhah Suhesti bersuami Bapak Paryan</h2>
        <p>Ibu Muslikhah Suhesti adalah anak pertama dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau bersuami Bapak Paryan dan memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Alfi</li>
            <li>Laili</li>
            <li>Ilham</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] 
            A --> B["Ibu Salimah"]
            B --> C["Ibu Muslikhah"]
            C --> D["Alfi"] & E["Laili"] & F["Ilham"]
            G["Bapak Dirsyam"] --> C
            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>