<?php include 'header.php'; ?>
    <main>
        <section>
            <h2>Bapak H. Sudarno beristri Ibu Sri Suratmi</h2>
            <p>Bapak H. Sudarno adalah anak kelima dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Sri Suratmi dan memiliki 3 orang anak.</p>
            <h3>Daftar Anak</h3>
            <ol>
                <li><a href="keluarga-agus.php">Bapak Agus Supriyadi beristri Ibu Umi Latifah</a></li>
                <li><a href="keluarga-aditya.php">Bapak Aditya Dwi Safitra beristri Ibu Titi Andayani</a></li>
                <li>Arif Tri Pamungkas</li>
            </ol>
        </section>
        <section>
            <h3>Silsilah Keluarga</h3>
            <div class="mermaid">
            flowchart LR
                A["Mbah Sutarno"] --> B["Bapak Sudarno"]
                B --> C["Bapak Agus"] & D["Bapak Aditya"] & Arif
                click A "index.php"
                click C "keluarga-agus.php"
                click D "keluarga-aditya.php"
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>