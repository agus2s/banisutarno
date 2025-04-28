<?php include 'header.php'; ?>
    <main>
        <section>
            <h2>Bapak Ifan Fadlina Anhar beristri Ibu Firda Ardiyanti Lestari</h2>
            <p>Bapak Ifan Fadlina Anhar adalah anak dari <a href="keluarga-asep.php">Ibu Siti Jaenah dan Bapak H. Asep Rochaenasyir</a>. Beliau beristri Ibu Firda Ardiyanti Lestari.</p>
            <h3>Daftar Anak</h3>
            <ol>
                <li> Revanda Zavier Zayn</li>
            </ol>
        </section>
        <section>
            <h3>Silsilah Keluarga</h3>
            <div class="mermaid">flowchart TD
                    A["Mbah Sutarno"] --> B["Ibu Siti Jaenah"]
                    E["Bapak H. Asep"] --> C
                    B --> C["Bapak Ifan"]
                    C --> D["Revanda Zavier Zayn"]
                    click A "index.php"
                    click B "keluarga-asep.php"
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>