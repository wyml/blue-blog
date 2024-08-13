<!-- <script>
    const {
        createEditor,
        createToolbar
    } = window.wangEditor

    const editorConfig = {
        placeholder: '在这里输入内容...',
        onChange(editor) {
            const html = editor.getHtml()
            document.getElementById('content').value = html
        }
    }

    const toolbarConfig = {}


    document.addEventListener('livewire:init', () => {
        const editor = createEditor({
            selector: '#editor-container',
            config: editorConfig,
            mode: 'simple', // or 'simple'
        })
        const toolbar = createToolbar({
            editor,
            selector: '#toolbar-container',
            config: toolbarConfig,
            mode: 'simple', // or 'simple'
        })
    })
</script> -->
