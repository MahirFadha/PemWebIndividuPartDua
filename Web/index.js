var haha = document.querySelector(".btnLogin");
var usernameInput = document.querySelector(".inputUsername");
var pwInput = document.querySelector(".inputPw");

function checkInput() {
  if (usernameInput.value.trim() !== "" && pwInput.value.trim() !== "") {
    haha.disabled = false; // Aktifkan tombol jika kedua input terisi
  } else {
    haha.disabled = true; // Nonaktifkan tombol jika salah satu atau kedua input kosong
  }
}

usernameInput.addEventListener("input", checkInput);
pwInput.addEventListener("input", checkInput);

haha.addEventListener("click", function () {
  if (haha.disabled) {
    window.alert("Haha");
  }
});
