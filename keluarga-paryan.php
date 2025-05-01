<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Muslikhah Suhesti bersuami Bapak Paryan</h2>
        <p>Ibu Muslikhah Suhesti adalah anak pertama dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau bersuami Bapak Paryan dan memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Alvi Novianti</li>
            <li>Nurlaeli Oktaviani</li>
            <li>M. Ilham Fauzi</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] 
            A --> B["Ibu Salimah"]
            B --> C["Ibu Muslikhah"]
            C --> 1["Alvi"] & 2["Laeli"] & 3["Ilham"]
            D["Bapak Dirsyam"] --> C
            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>