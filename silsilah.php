<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silsilah Keluarga</title>
    <link rel="stylesheet" href="styles.css">
	<script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</head>
<body>
	<header>
        <h1>Keluarga Besar H. Muhammad Sutarno</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="silsilah.php">Silsilah</a>
            <a href="kenangan-abadi.php">Kenangan Abadi</a>
        </nav>
    </header>
	<main>
		<h2>Diagram Keluarga</h2>
		<div class="mermaid">
		flowchart LR
			A["Mbah Sutarno ❤ Mbah Ngadisem"] 
			A --> B["Bapak Sungadi"] & C["Ibu Salimah"] & D["Bapak Sujamin"] & E["Ibu Suwahmi"] 
			A --> F["Bapak Sudarno"] & G["Ibu Sungadiyah"] & H["Bapak Saebani"] & I["Bapak Supriyo"] 
			A --> J["Ibu Siti Jaenah"] & K["Ibu Siti Nuriyah"]

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

			click A "index.php"
			click B "keluarga-sungadi.php"
			click C "keluarga-dirsyam.php"
			click D "keluarga-sujamin.php"
			click E "keluarga-rochmat.php"
			click F "keluarga-sudarno.php"
			click G "keluarga-triwibowo.php"
			click H "keluarga-saebani.php"
			click I "keluarga-supriyo.php"
			click J "keluarga-asep.php"
			click K "keluarga-sitinuriyah.php"
			click Teguh "keluarga-teguh.php"
			click Kukuh "keluarga-kukuh.php"
			click Kholid "keluarga-kholid.php"
			click Mus "keluarga-paryan.php"
			click Nining "keluarga-yayat.php"
			click Tikah "keluarga-sodikun.php"
			click Fuad "keluarga-fuad.php"
			click Tofik "keluarga-tofik.php"
			click Tantri "keluarga-tantri.php"
			click Agus "keluarga-agus.php"
			click Adi "keluarga-adi.php"
		</div>
	</main>
</body>
</html>

<?php
include 'footer.php';
?>