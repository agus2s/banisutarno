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
		<section>
			<h3>Garis Keturunan</h3>
			<div id="output"></div>
		</section>
    </main>
	<script type="module">
		import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";
		mermaid.initialize({ startOnLoad: false });

		async function renderMermaid() {
			const elementId = "mermaidChart";
			const diagramDefinition = `flowchart LR
			A["Mbah Sutarno"] 
			A --> F["Bapak Sudarno"]
			F --> Agus["Agus"]

			click A "index.php"
			click F "keluarga-sudarno.php"`;
			const { svg } = await mermaid.render(elementId, diagramDefinition);
			document.getElementById("output").innerHTML = svg;
		}

		renderMermaid();
	</script>
<?php include 'footer.php'; ?>