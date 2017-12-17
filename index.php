<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
        }
    }

    function infouser(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getinfo.php?q="+str,true);
            xmlhttp.send();
        }

    </script>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet">
    <fieldset>
      <p>Made By | Noah Falan</p>
      <p>MD1A</p>
    </fieldset>
    <form>
  <input type="text" placeholder="Type a city name:" onkeyup="showUser(this.value)" autofocus="autofocus">
  </form>
  <br>
  <div id="txtHint"><b>City info will be listed here...</b></div>
  </body>
</html>
