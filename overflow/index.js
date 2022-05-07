let form = document.querySelector('form[name="myForm"]');

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let y = document.forms["myForm"]["password"].value;
  let num = parseInt(y);
  if (num < 0) {
    alert("Negative number not allowed");
    return false;
  }
  let num1 = 32767;
  num = num % 65536;
  if (num > num1) {
    num = num - 65536;
  }
  if (num == -104) {
    $.ajax({
      url: "./process.php",
      type: "POST",
      data: {
        num: num,
      },
      success: function (data) {
        flag_p = document.getElementById("flag");
        flag_p.innerHTML = data;
      },
    });
  }
  return false;
});
