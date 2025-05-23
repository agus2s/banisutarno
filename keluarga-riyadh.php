<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Dwi Ayu Tantri bersuami Bapak Riyadh Ginanjar Widodo</h2>
        <p>Ibu Dwi Ayu Tantri adalah anak kedua dari <a href="keluarga-rochmat.php">Ibu Suwahmi dengan Bapak Rochmat</a>. Beliau Bersuami Bapak Riyadh Ginanjar dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Fatah Abhinaya Al Riyadh</li>
            <li>Fathian Abhivandya Al Riyadh</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] --> B["Ibu Suwahmi"] --> C["Ibu Tantri"]
            C --> Fatah & Fathian
            E["Bapak Rochmat"] --> C
            click A "index.php"
            click B "keluarga-rochmat.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>