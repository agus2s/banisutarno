<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Muhammad Sungadi beristri Ibu Suyati</h2>
        <p>Bapak Muhammad Sungadi adalah anak pertama dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Suyati dan memiliki 3 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li><a href="keluarga-teguh.php">Bapak Teguh Purwadi Nugroho beristri Ibu Satma Titis Indriyani</a></li>
            <li><a href="keluarga-kukuh.php">Bapak Kukuh Dwi Karyadi Nugroho beristri Ibu Lia</a></li>
            <li><a href="keluarga-puguh.php">Bapak Puguh Triadi Nugroho</a></li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">
        flowchart TD
            A["Mbah Sutarno"] --> B["Bapak Sungadi"]
            B --> C["Bapak Teguh"] & D["Bapak Kukuh"] & E["Bapak Puguh"]
            
            click A "index.php"
            click C "keluarga-teguh.php"
            click D "keluarga-kukuh.php"
        </div>
    </section>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</main>
<?php include 'footer.php';