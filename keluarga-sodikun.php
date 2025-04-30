<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Ibu Etikah Suhesti bersuami Bapak Sodikun</h2>
        <p>Ibu Etikah Suhesti adalah anak dari <a href="keluarga-dirsyam.php">Ibu Salimah dengan Bapak Dirsyam</a>. Beliau bersuamai Bapak Sodikun dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Alief Aulia Pradika</li>
            <li>Hifni Noer Elhaq</li>
        </ol>
    </section>
    <section>
        <h3>Garis Keturunan</h3>
        <div class="mermaid">flowchart LR
            A["Mbah Sutarno"] 
            A --> B["Ibu Salimah"]
            B --> C["Ibu Etikah"]
            F["Bapak Dirsyam"] --> C
            C --> D["Alief Aulia"] & E["Hifni Noer"]
            click A "index.php"
            click B "keluarga-dirsyam.php"
        </div>
	</section>
</main>
<?php include 'footer.php'; ?>