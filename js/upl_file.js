  let upload = document.querySelector('.wrap_input_file .upload');
  let upload_input = document.querySelector('.wrap_input_file input');
  let add_track = document.querySelector('.add_track');
  let modal_win = document.querySelector('.modul_win');
  let open_modal_win = document.querySelector('.icon-eject');
  let formData = new FormData();

/*
** AJAX request to server, by press 'add_track' button
*/
add_track.addEventListener('click', (e) => {
  const request = new XMLHttpRequest();
  const url = 'send_ajax.php';

  e.preventDefault();
  request.open('POST', url, true);

  request.addEventListener("readystatechange", () => {
    if(request.readyState === 4 && request.status === 200) {
      upload.innerHTML='<span class="icon-cloud-upload"></span>Загрузить файл';
      document.querySelector('form').reset();
      window.location.reload();

    }
  });
  request.send(formData);
  console.log('request status', request.status);
});

/*
** close/open modal win
*/
open_modal_win.addEventListener('click', () => modal_win.classList.toggle('d_none'));

modal_win.addEventListener('click', (e) => {
  console.log(e);
  if (e.target.classList.contains('modul_win')) {
    modal_win.classList.toggle('d_none');
  }
});

/*
**  Open default windows to upload file
*/
upload.addEventListener('click', () => upload_input.click());

upload_input.oninput = function (e) {
  if (this.value != '') {
    let file = upload_input.files[0];
    formData.append('hello', upload_input.files[0]);

    if (file['type'] != 'audio/mpeg' || file['size'] > 12000000) {
      upload.innerHTML='<span class="icon-cloud-upload"></span>Загрузить файл';
    } else {
      upload.innerHTML='<span class="icon-cloud-check green"></span>Файл выбран';
    };
    console.log(file);
  } else {
    upload.innerHTML='<span class="icon-cloud-upload"></span>Загрузить файл';
  }
}

