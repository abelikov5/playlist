<?php
  $host='localhost';
  $user='root';
  $pass=' ';
  $num = 0;

  $mysqli = new mysqli('localhost', 'root', '', 'music');

  $query = $mysqli->query('SELECT * FROM play_list');

  while ( $row = mysqli_fetch_assoc($query)) {
    echo '<div class="song_list d_space" data-num="'.$num.'">
            <div class="play_btn" data-num="'.$num.'">
              <div class="play_btn_ring" data-num="'.$num.'">
                <div class="icon-play3" data-num="'.$num.'"></div>
              </div>
            </div>
            <img src="./img/cover.jpg" data-num="'.$num.'">
            <div class="playlist_song_name" data-num="'.$num.'">'.$row['name'].'</div>
            <div class="song_duration" data-num="'.$num.'"></div>
              <audio src="'.$row['path'].'" id="num_1"></audio>
            </div>';
    $num++;
  }
?>