/*const sound = new Howl({
    src: ['https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3'],
    html5: true
});*/

const sound = new Howl({
    src: ['../audio/Imagine-Dragons-Thunder.mp3'],
    html5: true
});

const playBtn = document.getElementById('playBtn');
const pauseBtn = document.getElementById('pauseBtn');
const duration = document.getElementById('duration');

pauseBtn.style.display = 'none';

playBtn.addEventListener("click", playSong);
pauseBtn.addEventListener("click", pauseSong);

function playSong(){
    sound.play();
    duration.innerHTML = self.formatTime(Math.round(sound.duration()));
    playBtn.style.display = 'none';
    pauseBtn.style.display = 'block';
}

function pauseSong(){
    sound.pause();
    playBtn.style.display = 'block';
    pauseBtn.style.display = 'none';
}

function formatTime(secs) {
    let minutes = Math.floor(secs / 60) || 0;
    let seconds = (secs - minutes * 60) || 0;
    return minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
}




