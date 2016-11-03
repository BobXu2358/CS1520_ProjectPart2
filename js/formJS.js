function submitForm() {
  if(document.getElementById("text1").value == '') {
    alert("Please enter your name!");
  }
  else if(document.getElementById("text2").value == '') {
    alert("Please enter your email address!");
  }
  else if(document.getElementById("text3").value == '') {
    alert("Please leave a message!");
  }
  else {
    window.location.href = 'mailto:nicola@mio.it';
    document.getElementById("submit_message").innerHTML = "Thank you! I will get back to you soon."
  }
}
