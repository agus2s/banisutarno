<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak H. Sujamin Ahmad Ansori beristri Ibu Hj. Umiatul Mastuti</h2>
        <p>Bapak H. Sujamin Ahmad Ansori adalah anak ke-3 dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Hj. Umiatul Mastuti dan memiliki satu orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-fuad.php">Bapak Fuad beristri Ibu Selly</a></li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Bapak Sujamin"] --> C["Bapak Fuad"]
            click A "index.php"
            click C "keluarga-fuad.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>