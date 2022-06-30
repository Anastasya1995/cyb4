<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
    <script>
        function getPeople(){
            var letters = document.getElementById("letters").value;
            //alert (letters);
            var url = "api/people.php?letters=" + letters;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.onload = function () {
                var text = xhr.responseText;
                //alert(text);

                //десериализация JSON
                var people  = JSON.parse(text);
                //alert(people);
                // из десериализованного объекта генерируем текст для вывода 
                var out = "";
                for(var i=0; i < people.length; i++) {
                    var person = people[i];
                    //alert(person);
                    var firstName = person["firstName"];
                    var lastName = person["lastName"];
                    //alerst(lastName);
                    out+= lastName + ", " + firstName + "</br>";
                    
                 }
                 //alert (out);
                 document.getElementById("display").innerHTML = out;
            };
            xhr.send();
        }

    </script>
</head>
<body>
<a href="index1.html">Home page</a> </br>
<h1> Cool worker search </h1>
Type worker name: 
    <input type="text" id = "letters" oninput = "getPeople();"/>
    <div id = "display"></div>
</body>
</html>