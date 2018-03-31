<!DOCTYPE html>
<!-- https://www.w3schools.com/js/js_json_php.asp

-->
<html>
<body>

<h2>Get data as JSON from a PHP file on the server.</h2>

<p id="demo">Lala</p>

<script>
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //xtoni
      //La funció JSON.parse converteix el contingut del fitxer
      //en un objecte JSON.
        myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML =  myObj.name + "," + myObj.age + "," + myObj.city;
    }
};
xmlhttp.open("GET", "demo_file.php", true);
xmlhttp.send();
</script>

</body>
</html>
