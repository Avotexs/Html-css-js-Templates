<html>
    <head>
        <link rel="stylesheet" href="style.css">
       <style>
    /* style pour le premier div */
#div0 {
    margin-bottom: 40px;
    padding: 100px;
    background-color: #f2f2f2;
    border-radius: 5px;
}
nav{
    position: fixed;
    background: rgba(15, 23, 43, .9);
    width: 100%;
    padding: 10px 0;
    z-index: 12;
  }
/* style pour les inputs dans le premier div */
#div0 input {
    margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

/* style pour le bouton dans le premier div */
#div0 button {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le message d'erreur dans le premier div */
#div0 #s1 {
    margin-top: 10px;
}

/* style pour le deuxième div */
#div1 {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
}

/* style pour le bouton dans le deuxième div */
#div1 button {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le tableau dans le deuxième div */
#div1 table {
    border-collapse: collapse;
    width: 100%;
}

/* style pour les cellules de tableau dans le deuxième div */
#div1 td, #div1 th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* style pour les cellules de titre de tableau dans le deuxième div */
#div1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #FEA116;
    color: white;
}

/* style pour le troisième div */
#div2 {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
}

/* style pour le formulaire dans le troisième div */
#div2 form {
    display: flex;
    flex-direction: column;
}

/* style pour les labels dans le formulaire du troisième div */
#div2 form label {
    margin-bottom: 10px;
}

/* style pour les inputs dans le formulaire du troisième div */
#div2 form input[type="text"], #div2 form input[type="password"] {
    margin-bottom: 10px;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

/* style pour le bouton dans le formulaire du troisième div */
#div2 form input[type="submit"] {
    padding: 10px;
    background-color: #FEA116;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* style pour le message d'erreur dans le formulaire du troisième div */
#div2 #s2 {
    margin-top: 10px;
}
       </style>
    </head>
    <body>
        <nav>
            <div class="menu">
              <div class="logo">
                <a href="#">Hermanos</a>
              </div>
              <ul>
                <li><a href="main.html">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="term.html" >Terms & Conditions</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="sus.html">Contact us</a></li>
              </ul>
            </div>
          </nav>
          
        <div id="div0">
            <div id="div2">Register <br><br></div>
            <input type="text" id="in1" placeholder="Enter you First name"><br>
            <input type="text" id="in3" placeholder="Enter you Last name"><br>
            <input type="text" id="in4" placeholder="Enter you e-mail"><br>
            <input type="text" id="in2" placeholder="Enter a password"><br>
            
            <span id="s1" style="color: red;"></span><br>
            <button onclick="add()">Add user</button>
        </div>

        <div id="div1">
            <button onclick="show()">Show users in table</button><br><br>
            <table border="2px" id="table1" >
                    <tr><th>Nom Complet</th><th>Password</th></tr>
            </table>
        </div>

        <div id="div2">
            <form action="test.html" onsubmit="return login()">
                <label for="in3">UserName:</label>
                <input type="text" id="in3"><br>
                <label for="in4">Password:</label>
                <input type="password" id="in4"><br>
                <span id="s2" style="color: red;"></span><br>
                <input type="checkbox" onclick="showPass()"> <center>Show password</center>
                <input type="submit" value="Sign up">
                
            </form>
        </div>
<!--<a href="test.html"><input type="submit" value="Login"></a>-->

        <script>
            var users = [{ username:'ali el', password:'ali123456' },
             { username:'amine ze', password:'12345678' } ]


             function add(){

                var userNameValue = document.getElementById('in1').value;
                var passValue = document.getElementById('in2').value;

                if(passValue.length < 8){

                    document.getElementById('s1').innerHTML = 'password must contains 8 chars'
                }else{
                    var user = {};

                    user.username = userNameValue;
                    user.password= passValue;

                    users.push(user);
                    console.log(users)
                }

             }


             function show(){

                for(var i=0; i<users.length; i++){
                    // <tr><th>Nom Complet</th><th>Password</th></tr>
                    // <tr><td>Nom Complet value</td><td>Password value</td></tr>

                    var td1 = document.createElement('td');
                    var td2 = document.createElement('td');

                    var tr = document.createElement('tr');

                    var usernameValue = users[i].username; 
                    var passValue = users[i].password;

                    td1.append(usernameValue);
                    td2.append(passValue);
                    tr.append(td1);
                    tr.append(td2);

                    var table = document.getElementById('table1');

                    table.append(tr);
                }
             }
            


             function showPass(){

                var passInput = document.getElementById('in4');

                if(passInput.type == 'password'){
                    passInput.type = 'text'
                }else if(passInput.type == 'text'){
                    passInput.type = 'password'
                }
             }

             function login(){

                var userValue = document.getElementById('in3').value;
                var passValue = document.getElementById('in4').value;

                if(userValue == ''){
                    document.getElementById('s2').innerHTML = 'user name must be filed out';
                    return false;
                }
                else if(passValue == ''){
                    document.getElementById('s2').innerHTML = 'password name must be filed out'
                    return false;
                }

                for(var i=0; i<users.length;i++){

                    if(userValue == users[i].username && passValue == users[i].password){
                        return true;
                    }
                }
                document.getElementById('s2').innerHTML = 'username and password do not match';
                        return false;
             }

        </script>
        <?php
        // Your PHP code goes here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $username = $_POST['username'];
            $password = $_POST['password'];
            
        }
        ?>
        
    </body>
    <footer>
        <div class="footer">
        
        <div class="row">
        <ul>
        <li><a href="sus.html">Contact us</a></li>
        <li><a href="res.html">Reserve</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="term.html" >Terms & Conditions</a></li>
        <li><a href="main.html">Menu</a></li>
        </ul>
        </div>
        
        <div class="row">
        Abderrahman Copyright © 2023 Hermanos - All rights reserved || Designed By: Abderrhaman et kamal 
        </div>
        </div>
        </footer>
</html>