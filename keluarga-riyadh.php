<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Dwi Ayu Tantri bersuami Bapak Riyadh Ginanjar</h2>
        <p>Ibu Dwi Ayu Tantri adalah anak kedua dari <a href="keluarga-rochmat.php">Ibu Suwahmi dengan Bapak Rochmat</a>. Beliau Bersuami Bapak Riyadh Ginanjar dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Fatah Abhinaya Al Riyadh</li>
            <li>Fathian Abhivandya Al Riyadh</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Ibu Suwahmi"]
            B --> C["Ibu Tantri"]
            C --> Fatah
            C --> Fathian
            E["Bapak Rochmat"] --> C
            click A "index.php"
            click B "keluarga-rochmat.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>