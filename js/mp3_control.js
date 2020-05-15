let audio = document.querySelectorAll('audio');
let control = document.querySelector('.mp3_play');
let prog_full = document.querySelector('.prog_full');
let prog_cur = document.querySelector('.prog_cur');
let play_pause = document.querySelector('.mp3_play div');
let wrap_playlist = document.querySelector('.wrap_playlist');
let cur_audio = 0;
let prev_audio = 0;
let arr_song = document.querySelectorAll('.song_list');

arr_song[cur_audio].classList.add('song_list_play');
/*
**  Add song duration to PLAYLIST section
*/
function song_duration() {
  for (let i = 0; i < arr_song.length; i++) {
    let dur = audio[i].duration;
    let sec = (dur % 60).toFixed(0);
    let min = (dur / 60).toFixed(0);
    arr_song[i].querySelector('.song_duration').innerHTML=min + ':' + sec;
  }
}
setTimeout(song_duration, 200);
/*
** Listner for choosing song from avalible playlist
*/
wrap_playlist.addEventListener('click', ({target}) => dataset_playlist(target.dataset.num));
/*
** prev next button on control section
*/
document.querySelector('.control .arrow_right').addEventListener('click', () => {
  if (cur_audio + 1 < arr_song.length) {
    dataset_playlist (cur_audio + 1);
  }
})
document.querySelector('.control .arrow_left').addEventListener('click', () => {
  if (cur_audio - 1 >= 0) {
    dataset_playlist (cur_audio - 1);
  }
})

function dataset_playlist (num) {
  prev_audio = cur_audio;
  cur_audio = num;
  arr_song[prev_audio].classList.remove('song_list_play');
  arr_song[cur_audio].classList.add('song_list_play');
  audio[prev_audio].pause();
  audio[prev_audio].currentTime = 0;
  audio[cur_audio].play();
  document.querySelector('.control .song_name').innerHTML=arr_song[cur_audio].querySelector('.playlist_song_name').textContent;
  progress_change();
}

function progress_change () {
    audio[cur_audio].addEventListener('timeupdate', function () {
    let cur_prog_value = audio[cur_audio].currentTime / audio[cur_audio].duration * 100;
    prog_cur.style.width = cur_prog_value + '%';

    if (audio[cur_audio].currentTime == audio[cur_audio].duration ) {
      console.log(audio[cur_audio].currentTime);
      if (cur_audio + 1 < arr_song.length) {
        dataset_playlist (cur_audio + 1);
      }

      // audio[cur_audio].removeEventListener('timeupdate', () => console.log('the end'));
    }
  })
};

control.addEventListener('click', function () {
  if (play_pause.classList.contains("icon-play3")) {
    play_pause.classList.remove('icon-play3');
    play_pause.classList.add('icon-pause2');
    play_pause.classList.add('i-pause2');
    audio[cur_audio].play();
    progress_change();
  } else {
    play_pause.classList.remove('icon-pause2');
    play_pause.classList.remove('i-pause2');
    play_pause.classList.add('icon-play3');
    audio[cur_audio].pause();
  }
})

prog_full.addEventListener('click', function progress_click (e) {
    let cur_prog_value = (e.clientX - prog_full.offsetLeft) / prog_full.offsetWidth * 100;
    prog_cur.style.width = cur_prog_value + '%';
    audio[cur_audio].currentTime = cur_prog_value * audio[cur_audio].duration / 100;
    audio[cur_audio].play();
    play_pause.classList.remove('icon-play3');
    play_pause.classList.add('icon-pause2');
    play_pause.classList.add('i-pause2');
    progress_change();
})

