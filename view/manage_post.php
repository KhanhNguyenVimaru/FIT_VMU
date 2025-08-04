<?php
include '../database/connect_db.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Công nghệ thông tin - Trường Đại học Hàng hải Việt Nam</title>
    <link rel="icon" type="image/x-icon" href="component/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            background-color: white;
        }

        .create-post-container {
            max-width: 900px;
            margin: auto;
            padding: 2rem;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }

        .create-post-container h4 {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: bold;
        }

        .create-post-container label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
            color: #333;
        }

        .create-post-container input[type="text"],
        .create-post-container select {
            width: 100%;
            padding: 0.6rem 1rem;
            border: 1.5px solid #e0e3e7;
            border-radius: 8px;
            transition: border-color 0.3s, box-shadow 0.3s;
            margin-bottom: 0.5rem;
            min-height: 44px;
        }

        .create-post-container input[type="text"]:focus,
        .create-post-container select:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 2px rgba(25, 118, 210, 0.08);
            outline: none;
            background: #fff;
        }

        /* Custom file input */
        .custom-file-input-wrapper {
            position: relative;
            width: 100%;
        }

        .custom-file-input {
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 2;
        }

        .custom-file-label {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            padding: 0.6rem 1rem;
            border: 1.5px solid #e0e3e7;
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s, box-shadow 0.3s;
            color: #555;
            font-size: 1rem;
            min-height: 44px;
            height: 44px;
        }

        .custom-file-label:hover,
        .custom-file-input:focus+.custom-file-label {
            border-color: #1976d2;
            box-shadow: 0 0 0 2px rgba(25, 118, 210, 0.08);
            background: #f0f7ff;
        }

        .custom-file-label .icon {
            font-size: 1.2em;
            color: #1976d2;
        }

        .custom-file-label .file-name {
            color: #1976d2;
            font-weight: 500;
        }

        .input-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .input-col {
            flex: 1;
        }

        #editorjs {
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <?php include 'component/manage_header.php'; ?>

    <div id="new-post-container" style="min-height: 100vh; width: 100%; padding: 20px 20px; margin-top:10px; margin-bottom: 50px;">
        <div class="create-post-container" style="min-height: 100vh !important;">
            <h4 style="font-weight: b; color:black">Thêm bài viết mới</h4>

            <!-- Tiêu đề -->
            <div style="margin-bottom: 1.5rem;">
                <label for="post-title">Tiêu đề bài viết</label>
                <input type="text" name="post-title" id="post-title" placeholder="Nhập tiêu đề bài viết...">
            </div>

            <!-- Category và Ảnh nền -->
            <div class="input-row">
                <div class="input-col">
                    <label for="title-img">Ảnh nền đại diện</label>
                    <div class="custom-file-input-wrapper">
                        <input type="file" name="title-img" id="title-img" class="custom-file-input" onchange="updateFileName(this)">
                        <label for="title-img" class="custom-file-label" id="file-label">
                            <span class="file-name" style="font-size: 14px; color:black">Chọn ảnh...</span>
                        </label>
                    </div>
                </div>
                <div class="input-col">
                    <label for="category">Chuyên mục</label>
                    <select name="category" id="category">
                        <option value="">Chọn chuyên mục (tùy chọn)</option>
                        <option value="1">Công nghệ</option>
                        <option value="2">Đời sống</option>
                        <option value="3">Giáo dục</option>
                        <!-- Thêm nếu cần -->
                    </select>
                </div>
            </div>


            <!-- Editor.js -->
            <div id="editorjs" style="font-size: 16px;">
            </div>
            <div style="width: 100%; justify-content:end">
                <button class = "btn btn-primary" style="font-family: Roboto; font-size:14px" onclick="saveNewPost()">Tạo bài viết</button>
            </div>
        </div>
    </div>
    <?php include 'component/footer.php'; ?>
</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<!-- Editor.js Core -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>

<!-- Editor.js Tools -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

<!-- Custom JS -->
<script src="handle_post.js"></script>
<script>
    function updateFileName(input) {
        const label = document.getElementById('file-label').querySelector('.file-name');
        if (input.files && input.files.length > 0) {
            label.textContent = input.files[0].name;
        } else {
            label.textContent = 'Chọn ảnh...';
        }
    }
</script>
</html>