<?php include 'header.php'; ?>
    <main>
        <section>
            <h2>Bapak Agus Supriyadi beristri Ibu Umi Latifah</h2>
            <p>Bapak Agus Supriyadi adalah anak pertama dari <a href="keluarga-sudarno.php">Bapak Sudarno dengan Ibu Sri Suratmi</a>. Beliau beristri Ibu Umi Latifah dan memiliki 3 anak</p>
            <h3>Daftar Anak</h3>
            <ol>
                <li>Afiqa Fauziyah Latif</li>
                <li>Arsyila Yumna Fauziyah</li>
                <li>Asyifa Hanna Fauziyah</li>
            </ol>
        </section>
		<script type="module">
			import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
			mermaid.initialize({ startOnLoad: true });
		</script>
		<section>
		<h2>Diagram Keluarga</h2>
			<div class="mermaid">
			flowchart LR
				A["Mbah Sutarno ❤ Mbah Ngadisem"] 
				A --> F["Bapak Sudarno"]
				F --> Agus["Agus"]

				click A "index.php"
				click F "keluarga-sudarno.php"
				click Agus "keluarga-agus.php"
			</div>
		</section>
    </main>
<?php include 'footer.php'; ?>