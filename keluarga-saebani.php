<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Saebani beristri Ibu Nur</h2>
        <p>Bapak Saebani adalah anak dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Nur dan memiliki 2 orang anak.</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Ibu Muti'atus Sa'adah bersuami Bapak Ari Prabowo</li>
            <li>Fathurohman</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">
        flowchart TD
            A["Mbah Sutarno"] --> B["Bapak Saebani"]
            B --> C["Ibu Muti'atus"] & D["Fathurohman"]
            click A "index.php"
        </div>
    </section>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</main>
<?php include 'footer.php'; ?>