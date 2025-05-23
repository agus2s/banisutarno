<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Salimah bersuami Bapak Dirsyam</h2>
        <p>Ibu Salimah adalah anak kedua dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau bersuami Bapak Dirsyam dan memiliki 4 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-kholid.php">Bapak Kholid Kurniawan beristri Ibu Ratih</a></li>
            <li><a href="keluarga-paryan.php">Ibu Muslikhah Suhesti bersuami Bapak Paryan</a></li>
            <li><a href="keluarga-yayat.php">Ibu Sri Sukaesih bersuami Bapak Yayat</a></li>
            <li><a href="keluarga-sodikun.php">Ibu Etikah Suhesti bersuami Bapak Sodikun</a></li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Ibu Salimah"]
            B --> C["Bapak Kholid"] & D["Ibu Muslikhah"] & E["Ibu Sri Sukaesih"] & F["Ibu Etikah"]

            click A "index.php"
            click C "keluarga-kholid.php"
            click D "keluarga-paryan.php"
            click E "keluarga-yayat.php"
            click F "keluarga-sodikun.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>