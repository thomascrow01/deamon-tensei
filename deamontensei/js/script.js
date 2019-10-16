document.getElementById('video').play();
document.getElementById('audio').play();
document.getElementById('video').addEventListener('ended', endVideo, false);

function endVideo(e) {
    document.getElementById('video').innerHTML = "";
}