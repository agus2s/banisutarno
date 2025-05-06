<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Fuad Abdillah beristri Ibu Selly</h2>
        <p>Bapak Fuad Abdillah adalah anak dari <a href="keluarga-sujamin.php">Bapak H. Sujamin Ahmad Ansori dengan Ibu Hj. Umiatul Mastuti</a>. Beliau beristri Ibu Selly dan memiliki 1 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Furqon</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
            flowchart LR
            A["Mbah Sutarno"] --> B["Bapak Sujamin"] --> C["Bapak Fuad"]
            D["Ibu Tuti"] --> C --> F["Furqon"]
            E["Ibu Selly"] --> F
            click A "index.php"
            click B "keluarga-sujamin.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>