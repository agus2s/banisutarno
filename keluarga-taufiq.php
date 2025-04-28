<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Taufiqurohman beristri Ibu Isna Nurohmah</h2>
        <p>Bapak Taufiqurohman adalah anak pertama dari <a href="keluarga-rochmat.php">Ibu Suwahmi dengan Bapak Rohmat</a>. Beliau beristri Ibu Isna Nurohmah dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Radit</li>
            <li>Yasmin</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart TD
            A["Mbah Sutarno"] 
            A --> B["Ibu Suwahmi"]
            B --> C["Bapak Taufiq"]
            C --> Radit
            C --> Yasmin

            click A "index.php"
            click B "keluarga-rochmat.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>