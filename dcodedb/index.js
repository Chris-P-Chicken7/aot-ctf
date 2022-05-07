let form = document.querySelector('form[name="myForm"]');

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let y = document.forms["myForm"]["id"].value;
  console.log(y);
  $.ajax({
    method: "POST",
    url: "./hacky_db.php",
    data: { data: y },
  }).done(function (response) {
    $("p.data").html(response);
  });
  return false;
});
