<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Kholid Kurniawan beristri Ibu Ratih Nurhayati</h2>
        <p>Bapak Kholid Kurniawan adalah anak pertama dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau beristri Ibu Ratih dan memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Alita Gladys Rivaldi Kurniawan</li>
            <li>Rizky Pramudyas Ratri Kurniawan</li>
            <li>Reza Jaka Taqwadhika</li>
        </ol>
    </section>
    <section>
        <h3>Silsilah keluarga</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] --> B["Ibu Salimah"] --> C["Bapak Kholid"]
            C --> D["Alita Gladys"] & E["Rizky Pramudyas"] & F["Reza Jaka"]
            G["Bapak Dirsyam"] --> C
            
            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>