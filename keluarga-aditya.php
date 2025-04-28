<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Aditya Dwi Safitra beristri Ibu Titi Andayani</h2>
        <p>Bapak Aditya Dwi Safitra adalah anak dari <a href="keluarga-sudarno.php">Bapak Sudarno dengan Ibu Sri Suratmi</a>. Beliau beristri Ibu Titi Andayani dan memiliki 2 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Arzaqiya Putri Farzana</li>
            <li>Raffasya</li>
        </ol>
    </section>
    <section>
		<h3>Garis Keturunan</h3>
		<div class="mermaid">flowchart TD
		A["Mbah Sutarno"] 
		A --> B["Bapak Sudarno"]
		B --> C["Bapak Aditya"]
		D["Ibu Sri"] --> C
		C --> Arzaqiya & Raffasya

		click A "index.php"
		click B "keluarga-sudarno.php"</div>
	</section>
</main>
<?php include 'footer.php'; ?>