<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Siti Nuriyah</h2>
        <p>Ibu Siti Nuriyah adalah anak bungsu dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau  memiliki 2 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-syaeful.php">Bapak Syaeful Abdullah beristri Ibu Dwi</a></li>
            <li>Bapak Faizul Nur Abdullah</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
            flowchart LR
                A["Mbah Sutarno"] --> B["Ibu Siti Nuriyah"]
                B --> C["Bapak Syaeful"] & D["Bapak Faizul"]
                click A "index.php"
                click C "keluarga-syaeful.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>