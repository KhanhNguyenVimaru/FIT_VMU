const editor = new EditorJS({
  holder: 'editorjs',

  tools: {
    header: {
      class: Header,
      config: {
        placeholder: 'Nhập đầu đề',
        levels: [2, 3, 4],
        defaultLevel: 3
      }
    },
    embed: {
      class: Embed,
      config: {
        services: {
          youtube: true,
          twitter: true,
          instagram: true,
          codepen: true
        }
      }
    },
    image: {
      class: ImageTool,
      config: {
        endpoints: {
      byFile: '/FIT_VIMARU/APIs/editor/upload.php',
      byUrl: '/FIT_VIMARU/APIs/editor/fetch_url.php'
        }
      }
    },
    quote: {
      class: Quote,
      config: {
        quotePlaceholder: 'Nhập trích dẫn...',
        captionPlaceholder: 'Nguồn...'
      }
    },
    linkTool: {
      class: LinkTool,
      config: {
        endpoint: '../APIs/editor/fetch_url.php'
      }
    }
  }
});
