<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Teguh beristri Ibu Indri</h2>
        <p>Bapak Teghu adalah anak pertama dari <a href="keluarga-sungadi.php">Bapak Muhammad Sungadi dengan Ibu Suyati</a>. Beliau memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Intan Cahya Nugrahaeni (almarhumah)</li>
            <li>Naelil Izzati Nugrahaeni</li>
            <li>Tedria Nugroho (almahum)</li>
        </ol>
    </section>
    <section>
    <h3>Silsilah Keluarga</h3>
    <div class="mermaid">
        flowchart LR
		A["Mbah Sutarno"] --> B["Bapak Sungadi"] --> C["Bapak Teguh"]
        C --> 1["Intan"] & 2["Izzati"] & 3["Tedria"]
        D[Ibu Suyati] --> C

		click A "index.php"
		click B "keluarga-sungadi.php"</div>
	</section>
</main>
<?php include 'footer.php'; ?>