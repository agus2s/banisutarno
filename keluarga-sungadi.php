<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Muhammad Sungadi beristri Ibu Suyati</h2>
        <p>Bapak Muhammad Sungadi adalah anak pertama dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Suyati dan memiliki 3 orang anak.</p>
        <h3>Daftar Anak dari Ibu Suyati</h3>
        <ol>
            <li><a href="keluarga-teguh.php">Bapak Teguh Purwadi Nugroho beristri Ibu Satma Titis Indriyani</a></li>
            <li><a href="keluarga-kukuh.php">Bapak Kukuh Dwi Karyadi Nugroho beristri Ibu Lia</a></li>
            <li><a href="keluarga-puguh.php">Bapak Puguh Triadi Nugroho</a></li>
        </ol>
        <p>Setelah Ibu Suyati meninggal Beliau menikah dengan Ibu Rohmah.</p>
        <h3>Kenangan Abadi</h3>
        <ol>
            <li>Ibu Suyati binti Suparjo</li>
            <li>Ibu Rohmah binti Bunandir</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
            A["Mbah Sutarno"] --> B["Bapak Sungadi"]
            B --> C["Bapak Teguh"] & D["Bapak Kukuh"] & E["Bapak Puguh"]
            
            click A "index.php"
            click C "keluarga-teguh.php"
            click D "keluarga-kukuh.php"
        </div>
    </section>
</main>
<?php include 'footer.php';