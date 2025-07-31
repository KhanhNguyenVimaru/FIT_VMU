<?php
header('Content-Type: application/json');

// 1. Nhận URL từ query string
$url = $_GET['url'] ?? null;

// 2. Kiểm tra định dạng URL
if (!filter_var($url, FILTER_VALIDATE_URL)) {
    echo json_encode(['success' => 0, 'message' => 'Invalid URL']);
    exit;
}

try {
    // 3. Cấu hình cURL để tránh lỗi HTTPS, chặn bot, v.v.
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0',
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    $html = curl_exec($ch);
    curl_close($ch);

    if (!$html) {
        echo json_encode(['success' => 0, 'message' => 'Cannot fetch URL']);
        exit;
    }

    // 4. Dùng regex để trích xuất title, description, image
    preg_match('/<title>(.*?)<\/title>/si', $html, $title);
    preg_match('/<meta name="description" content="(.*?)"/si', $html, $desc);
    preg_match('/<meta property="og:image" content="(.*?)"/si', $html, $img);

    echo json_encode([
        'success' => 1,
        'meta' => [
            'title' => $title[1] ?? $url,
            'description' => $desc[1] ?? '',
            'image' => $img[1] ?? ''
        ]
    ]);

} catch (Exception $e) {
    echo json_encode(['success' => 0, 'message' => 'Error: ' . $e->getMessage()]);
}
