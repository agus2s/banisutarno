<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Kukuh Dwi Karyadi Nugroho beristri Ibu Lia</h2>
        <p>Bapak Kukuh Dwi Karyadi Nugroho adalah anak dari <a href="keluarga-sungadi.php">Bapak Muhammad Sungadi dengan Ibu Suyati</a>.</p>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] --> B["Bapak Sungadi"] --> C["Bapak Kukuh"]
            D["Ibu Suyati"] --> C

            click A "index.php"
            click B "keluarga-sungadi.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>