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
        <h3>Garis Keturunan</h3>
        <div class="mermaid">
        flowchart TD
            A["Mbah Sutarno"] --> B["Ibu Siti Jaenah"]
            B --> C["Bapak Aip"] & D["Bapak Ifan"] & E["Efin Agam"]
            click A "index.php"
        </div>
    </section>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</main>
<?php include 'footer.php'; ?>