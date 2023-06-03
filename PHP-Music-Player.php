<!DOCTYPE html>
<html>
<head>
    <title>音乐播放器</title>
    <style>
        #player {
            text-align: center;
            margin-top: 50px;
        }
        
        #lyrics {
            margin-top: 20px;
            text-align: center;
        }
        
        .lyric-line {
            font-size: <?php echo isset($_POST['lyric-size']) ? $_POST['lyric-size'].'px' : '18px'; ?>;
            color: <?php echo isset($_POST['lyric-color']) ? $_POST['lyric-color'] : 'black'; ?>;
        }
    </style>
</head>
<body>
    <div id="player">
        <audio id="audio" controls></audio>
        <br>
        <input type="file" id="musicFile" name="musicFile" accept=".mp3">
        <button onclick="playMusic()">播放</button>
        <button onclick="pauseMusic()">暂停</button>
        <button onclick="stopMusic()">停止</button>
        <br>
        <input type="file" id="lyricsFile" name="lyricsFile" accept=".txt">
        <button onclick="loadLyrics()">加载歌词</button>
        <br>
        <label for="lyricSize">歌词大小：</label>
        <input type="number" id="lyricSize" name="lyric-size" min="10" max="50">
        <br>
        <label for="lyricColor">歌词颜色：</label>
        <input type="color" id="lyricColor" name="lyric-color">
        <br>
        <button onclick="applySettings()">应用设置</button>
        <button onclick="downloadMusic()">下载音乐</button>
        <button onclick="downloadLyrics()">下载歌词</button>
    </div>
    <div id="lyrics"></div>

    <script src="script.js"></script>
</body>
</html>
