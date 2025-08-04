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

  function saveNewPost() {
        editor.save().then((editorData) => {
            const title = document.getElementById('post-title').value.trim();
            const category = document.getElementById('category').value;
            const fileInput = document.getElementById('title-img');
            const imageFile = fileInput.files[0] || null;

            const postData = {
                title: title,
                category: category,
                content: editorData,
                imageName: imageFile ? imageFile.name : null 
            };

            console.log(postData);

            
            const formData = new FormData();
            formData.append('data', JSON.stringify(postData));
            if (imageFile) {
                formData.append('image', imageFile);
            }

            // lưu bài viết ở đây
            fetch('.php', {
                method: 'POST',
                body: formData
            }).then(res => res.json())
              .then(data => {
                  console.log('Server trả về:', data);
              }).catch(err => {
                  console.error('Lỗi gửi dữ liệu:', err);
              });
        }).catch((error) => {
            console.error('Lỗi khi lấy nội dung Editor.js:', error);
        });
    }
 
