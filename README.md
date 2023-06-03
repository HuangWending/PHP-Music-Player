# PHP-Music-Player
Web服务器端语言PHP音乐播放器
<!DOCTYPE html>: HTML5 文档类型声明。
<html>: HTML 根元素。
<head>: HTML 文档的头部，包含了页面的元数据和引用的外部资源。
<title>音乐播放器</title>: 网页的标题，显示在浏览器的标题栏中。
<style>: 内部样式表，用于定义页面的样式。
#player: CSS 选择器，选择 id 为 "player" 的元素。
#lyrics: CSS 选择器，选择 id 为 "lyrics" 的元素。
.lyric-line: CSS 选择器，选择 class 为 "lyric-line" 的元素。
<body>: HTML 文档的主体，包含了页面的内容。
<div id="player">: 带有 id 属性为 "player" 的 div 元素，用于容纳音乐播放器的组件。
<audio id="audio" controls></audio>: 带有 id 属性为 "audio" 的 audio 元素，用于播放音乐，并设置 controls 属性以显示播放控件。
<input type="file" id="musicFile" name="musicFile" accept=".mp3">: 文件选择输入框，用于选择音乐文件，accept 属性限定只能选择 .mp3 类型的文件。
<button onclick="playMusic()">播放</button>: 播放按钮，点击后调用 JavaScript 函数 playMusic() 开始播放音乐。
<button onclick="pauseMusic()">暂停</button>: 暂停按钮，点击后调用 JavaScript 函数 pauseMusic() 暂停音乐播放。
<button onclick="stopMusic()">停止</button>: 停止按钮，点击后调用 JavaScript 函数 stopMusic() 停止音乐播放。
<input type="file" id="lyricsFile" name="lyricsFile" accept=".txt">: 文件选择输入框，用于选择歌词文件，accept 属性限定只能选择 .txt 类型的文件。
<button onclick="loadLyrics()">加载歌词</button>: 加载歌词按钮，点击后调用 JavaScript 函数 loadLyrics() 加载并显示歌词。
<label for="lyricSize">歌词大小：</label>: 歌词大小标签，用于描述歌词大小设置输入框。
<input type="number" id="lyricSize" name="lyric-size" min="10" max="50">: 数字输入框，用于设置歌词的字体大小，min 和 max 属性限制了输入的范围。
<label for="lyricColor">歌词颜色：</label>: 歌词颜色标签，用于描述歌词颜色设置输入框。
<input type="color" id="lyricColor" name="lyric-color">: 颜色选择输入框，用于设置歌词的颜色。
<button onclick="applySettings()">应用设置</button>: 应用设置按钮，点击后调用 JavaScript 函数 applySettings() 应用用户的歌词设置。
<button onclick="downloadMusic()">下载音乐</button>: 下载音乐按钮，点击后调用 JavaScript 函数 downloadMusic() 下载选择的音乐文件。
<button onclick="downloadLyrics()">下载歌词</button>: 下载歌词按钮，点击后调用 JavaScript 函数 downloadLyrics() 下载选择的歌词文件。
<div id="lyrics"></div>: 带有 id 属性为 "lyrics" 的空 div 元素，用于显示歌词内容。
<script>: 内嵌的 JavaScript 代码的开始标签。
var audio = document.getElementById("audio");: 使用 getElementById 方法获取 id 为 "audio" 的元素，并将其赋值给变量 audio。
var lyricsContainer = document.getElementById("lyrics");: 使用 getElementById 方法获取 id 为 "lyrics" 的元素，并将其赋值给变量 lyricsContainer。
function playMusic() { ... }: 定义名为 playMusic 的 JavaScript 函数，用于播放音乐。
function pauseMusic() { ... }: 定义名为 pauseMusic 的 JavaScript 函数，用于暂停音乐播放。
function stopMusic() { ... }: 定义名为 stopMusic 的 JavaScript 函数，用于停止音乐播放。
function loadLyrics() { ... }: 定义名为 loadLyrics 的 JavaScript 函数，用于加载并显示歌词。
function displayLyrics(lyrics) { ... }: 定义名为 displayLyrics 的 JavaScript 函数，用于将歌词显示在页面上。
function applySettings() { ... }: 定义名为 applySettings 的 JavaScript 函数，用于应用用户的歌词设置。
function downloadMusic() { ... }: 定义名为 downloadMusic 的 JavaScript 函数，用于下载音乐文件。
function downloadLyrics() { ... }: 定义名为 downloadLyrics 的 JavaScript 函数，用于下载歌词文件。
</script>: 内嵌的 JavaScript 代码的结束标签。
</body>: HTML 文档的主体的结束标签。
</html>: HTML 根元素的结束标签。
