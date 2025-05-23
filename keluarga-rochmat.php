<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Suwahmi bersuami Bapak Rochmat</h2>
        <p>Ibu Suwahmi adalah anak keempat dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau bersuami Bapak Rochmat dan memiliki 2 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-taufiq.php">Bapak Taufiqurohman beristri Ibu Isna Nurohmah</a></li>
            <li><a href="keluarga-riyadh.php">Ibu Dwi Ayu Tantri bersuami Bapak Riyadh Ginanjar</a></li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Ibu Suwahmi"]
            B --> C["Bapak Taufiq"] & D["Ibu Tantri"]
            click A "index.php"
            click C "keluarga-taufiq.php"
            click D "keluarga-riyadh.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>