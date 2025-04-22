    <script type="module">
        import mermaid from "https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.esm.min.mjs";
        mermaid.initialize({ startOnLoad: false });
        async function renderMermaid() {
            const elementId = "mermaidChart";
            const diagramDefinition = `<?=DIAGRAM?>`;
            const { svg } = await mermaid.render(elementId, diagramDefinition);
            document.getElementById("output").innerHTML = svg;
        }
        renderMermaid();
    </script>
    <footer>
        <p>&copy; 2025 Keluarga Sutarno</p>
    </footer>
</body>
</html>
