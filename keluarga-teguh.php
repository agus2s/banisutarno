<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Bapak Teguh beristri Ibu Indri</h2>
        <p>Bapak Teghu adalah anak pertama dari <a href="keluarga-sungadi.php">Bapak Muhammad Sungadi dengan Ibu Suyati</a>. Beliau memiliki 3 anak</p>
        <h3>Daftar Anak</h3>
        <ol>
            <li>Intan Cahya Nugrahaeni</li>
            <li>Naelil Izzati Nugrahaeni</li>
            <li>Tedria Nugroho</li>
        </ol>
        <h3>Kenangan Abadi</h3>
        <ol>
            <li>Intan Cahya Nugrahaeni binti Teguh Purwadi Nugroho</li>
            <li>Tedria Nugroho bin Teguh Purwadi Nugroho</li>
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