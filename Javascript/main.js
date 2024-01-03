const PassWord = document.querySelector(".form input [type = 'password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if(PassWord.type = "password") {
    PassWord.type = "text";
    toggleBtn.classList.add("active");
  } 
  else {
    PassWord.type = "password";
    toggleBtn.classList.remove("active");
  }
}