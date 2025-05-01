<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Hj. Siti Jaenah bersuami Bapak H. Asep Rochaenasyir</h2>
        <p>Ibu Hj. Siti Jaenah adalah anak  dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau bersuami Bapak Asep Rochaenasyir dan memiliki 3 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-aip.php">Bapak Aip Pradipta Farhan beristri Ibu Nuning</a></li>
            <li><a href="keluarga-ifan.php">Bapak Ifan Fadlina Ahhar beristri Ibu Firda Ardiyanti Lestari</a></li>
            <li>Efin Agam Mahdian</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Ibu Siti Jaenah"]
            B --> 1["Bapak Aip"] & 2["Bapak Ifan"] & 3["Efin Agam"]
            click A "index.php"
            click 2 "keluarga-ifan.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>