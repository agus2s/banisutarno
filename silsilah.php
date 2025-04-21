<?php
include 'header.php';
?>
<main>
	<section>
		<h2>Silsilah Keluarga</h2>
		<script type="module">
			import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";
			mermaid.initialize({ startOnLoad: false });
			async function renderMermaid() {
				const elementId = "mermaidChart";
				const diagramDefinition = 
				`flowchart LR
					A["Mbah Sutarno 
					❤
					Mbah Ngadisem"] 
					A --> B["Sungadi"] & C["Salimah"] & D["Sujamin"] & E["Suwahmi"] & F["Sudarno"] & G["Sungadiyah"] & H["Saebani"] & I["Supriyo"] & J["Siti Jaenah"] & K["Siti Nuriyah"]
					B --> Teguh["Teguh"] & Kukuh["Kukuh"] & Puguh["Puguh"]
					C --> Kholid["Kholid"] & Mus["Mus"] & Nining["Nining"] & Tikah["Tikah"]
					D --> Fuad["Fuad"]
					E --> Tofik["Tofik"] & Tantri["Tantri"]
					F --> Agus["Agus"] & Adi["Adi"] & Arif["Arif"]
					G --> Fitri["Fitri"]
					H --> Muti["Muti"] & Fatur["Fatur"]
					I --> Eko["Eko"] & Mansur["Mansur"] & Rheza["Rheza"] & Bayu["Bayu"]
					J --> Aip["Aip"] & Ifan["Ifan"] & Efin["Efin"]
					K --> Ipul["Ipul"] & Izul["Izul"]
				`;
				const { svg } = await mermaid.render(elementId, diagramDefinition);
				document.getElementById("output").innerHTML = svg;
			}
			renderMermaid();
		</script>
		<div id="output"></div>
	</section>
</main>
<?php
include 'footer.php';
?>