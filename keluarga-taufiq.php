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
        <h3>Silsilah Keluarga</h3>
        <div class="mermaid">
            flowchart LR
            A[Mbah Sutarno] --> B[Ibu Suwahmi] --> C[Bapak Taufiq]
            C --> Radit & --> Yasmin
            D[Bapak Rohmat] --> C

            click A "index.php"
            click B "keluarga-rochmat.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>