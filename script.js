var audio = document.getElementById("audio");
var lyricsContainer = document.getElementById("lyrics");

function playMusic() {
    audio.play();
}

function pauseMusic() {
    audio.pause();
}

function stopMusic() {
    audio.pause();
    audio.currentTime = 0;
}

function loadLyrics() {
    var file = document.getElementById("lyricsFile").files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        var contents = e.target.result;
        displayLyrics(contents);
    }

    reader.readAsText(file);
}

function displayLyrics(lyrics) {
    lyricsContainer.innerHTML = "";
    var lines = lyrics.split("\n");

    lines.forEach(function(line) {
        var lyricLine = document.createElement("p");
        lyricLine.className = "lyric-line";
        lyricLine.textContent = line;
        lyricsContainer.appendChild(lyricLine);
    });
}

function applySettings() {
    var lyricSize = document.getElementById("lyricSize").value;
    var lyricColor = document.getElementById("lyricColor").value;

    var lyricLines = document.getElementsByClassName("lyric-line");
    for (var i = 0; i < lyricLines.length; i++) {
        lyricLines[i].style.fontSize = lyricSize + "px";
        lyricLines[i].style.color = lyricColor;
    }
}

function downloadMusic() {
    var musicFile = document.getElementById("musicFile").value;
    window.location.href = musicFile;
}

function downloadLyrics() {
    var lyricsFile = document.getElementById("lyricsFile").value;
    window.location.href = lyricsFile;
}
