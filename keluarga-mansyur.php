<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak M. Mansyur beristri Ibu Fitri Asnawingsih</h2>
        <p>Bapak M. Mansyur  dari 
            <a href="keluarga-supriyo.php">Bapak H. Tamyiz Supriyo dan Ibu Hj. Neng Aisi Pariha</a>. Beliau beristri Ibu Fitri Asnawingsih dan memiliki seorang anak.
        </p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Felisha Hanum Mansyur</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
        flowchart LR
        A["Mbah Sutarno"] --> B["Bapak Supriyo"] --> C["Bapak Mansyur"] --> D["Felisha"]
        E["Ibu Neng Aisi"] --> C
        click A "index.php"
        click B "keluarga-supriyo.php"
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>