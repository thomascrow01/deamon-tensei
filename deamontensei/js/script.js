// document.getElementById('video').play();
// document.getElementById('audio').play();
// document.getElementById('audio').addEventListener('ended', endVideo, false);

function endVideo() {
    var video = document.getElementById('video');
    var audio = document.getElementById('audio');
    audio.parentNode.removeChild(audio);
    video.parentNode.removeChild(video);
}