<?php include 'header.php'; ?>
    <main>
        <section>
            <h2>Ibu Sungadiyah bersuami Bapak Tri Wibowo</h2>
            <p>Ibu Sungadiyah adalah anak  dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau bersuami Bapak Tri Wibowo.</p>
            <h3>Daftar Anak</h3>
            <ol>
                <li>Ibu Fitri bersuami Bapak Zaenal</li>
            </ol>
        </section>
        <section>
            <h3>Garis Keturunan</h3>
            <div class="mermaid">
            flowchart TD
                A["Mbah Sutarno"] --> B["Ibu Sungadiyah"]
                click A "index.php"
            </div>
        </section>
        <script type="module">
            import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
            mermaid.initialize({ startOnLoad: true });
        </script>
    </main>
<?php include 'footer.php'; ?>