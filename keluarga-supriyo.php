<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak H. Tamyiz Supriyo beristri Ibu Hj. Neng Aisi Pariha</h2>
        <p>Bapak H. Sudarno adalah anak  dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Hj. Neng Aisi Pariha dan memiliki 4 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-eko.php">Bapak Eko Priyo Purnomo beristri Ibu Siti Humairoh</a></li>
            <li><a href="keluarga-mansyur.php">Bapak Muhammad Mansyur beristri Ibu Fitri Asnawingsih</a></li>
            <li><a href="keluarga-rheza.php">Bapak Rheza beristri Ibu Gusti Maharani</a></li>
            <li>Trisna Bayu Ajie</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Bapak Tamyiz Supriyo"]
            B --> C["Bapak Eko Priyo"] & D["Bapak Mansyur"] & E["Bapak Rheza"] & F["Bayu Ajie"]
            click A "index.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>