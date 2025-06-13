<?php
// PHP 檔案的開頭標籤
// 在這個例子中，PHP 主要是用來輸出 HTML，所以沒有複雜的 PHP 邏輯
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 彩帶特效頁面</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0; /* 頁面背景色 */
            font-family: Arial, sans-serif;
            overflow: hidden; /* 防止彩帶超出頁面時出現滾動條 */
        }

        .confetti-button {
            padding: 15px 30px;
            font-size: 20px;
            cursor: pointer;
            background-color: #ff69b4; /* 按鈕顏色 (粉紅色) */
            color: white;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .confetti-button:hover {
            background-color: #ff1493; /* 鼠標懸停時變暗 */
        }

        /* confetti.js 會自動創建一個 canvas 元素來繪製彩帶 */
        /* 如果你需要控制 canvas 的樣式，可以添加對 canvas 元素的規則 */
    </style>
</head>
<body>

    <button class="confetti-button" id="celebrateButton">特殊功能！</button>

    <!-- 引入 confetti.js 庫 -->
    <!-- 這個庫會幫我們處理彩帶的生成和動畫 -->
    <!-- 注意: 你的伺服器需要能夠訪問這個 CDN 地址才能讓瀏覽器下載腳本 -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <script>
        // 獲取按鈕元素
        const button = document.getElementById('celebrateButton');

        // 為按鈕添加點擊事件監聽器
        button.addEventListener('click', function() {
            // 調用 confetti() 函數來發射彩帶
            // 可以通過傳遞參數來控制彩帶的數量、角度、顏色、形狀等
            // 這裡使用了一些參數讓彩帶從頁面頂部中心向四周散開，模擬全頁面的感覺
            confetti({
                particleCount: 100, // 彩帶粒子數量
                spread: 120,       // 散開的角度 (120 度)
                origin: { y: 0.6 } // 從頁面稍微靠下的位置發射
            });

             // 可以多次調用 confetti() 或使用不同的參數來實現更豐富的效果
             // 例如，從頁面頂部中央發射更多彩帶：
             setTimeout(function() {
                 confetti({
                     particleCount: 80,
                     spread: 100,
                     origin: { y: 0 } // 從頁面頂部發射
                 });
             }, 200); // 延遲 200 毫秒再次發射

             // 例如，從頁面頂部左側和右側發射：
             setTimeout(function() {
                 confetti({
                     particleCount: 50,
                     spread: 90,
                     origin: { x: 0.2, y: 0 } // 從左上角附近發射
                 });
             }, 300);
             setTimeout(function() {
                 confetti({
                     particleCount: 50,
                     spread: 90,
                     origin: { x: 0.8, y: 0 } // 從右上角附近發射
                 });
             }, 400);


        });
    </script>

</body>
</html>