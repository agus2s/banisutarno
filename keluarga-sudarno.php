<?php include 'header.php'; ?>
    <main>
        
        <section>
            <h2>Bapak H. Sudarno beristri Ibu Sri Suratmi</h2>
            <p>Bapak H. Sudarno adalah anak kelima dari <a href="index.php">Mbah H. Muhammad Sutarno dan Mbah Hj. Ngadisem</a>. Beliau beristri Ibu Sri Suratmi dan memiliki 3 orang anak.</p>
            <h3>Daftar Anak</h3>
            <ol>
                <li><a href="keluarga-agus.php">Bapak Agus Supriyadi beristri Ibu Umi Latifah</a></li>
                <li><a href="keluarga-aditya.php">Bapak Aditya Dwi Safitra beristri Ibu Titi Andayani</a></li>
                <li>Arif Tri Pamungkas</li>
            </ol>
        </section>
        <section>
		<h3>Diagram Keluarga</h4>
		<div class="mermaid">
		flowchart TD
			A["Mbah Sutarno"] --> B["Bapak Sudarno"]
			click A "index.php"
			click B "keluarga-sudarno.php"
		</div>
	</section>
    </main>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
<?php include 'footer.php'; ?>