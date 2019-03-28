<?php
?>
<!DOCTYPE html>
<html>
<head>

<title>La Reine du Cake</title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" src="form.css"/>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="script.js"></script>
<style>


body{
	background-color:;
}
h1{
    color: blueviolet;
    text-align: center;
}
#section{
    margin:5px;
}
#form{
    border-radius: 15px solid;
    height: 90%;
   
}
#pseudo{
    margin:5px;
	text-align:center;
	border-radius:20px;
	  height: 50px;
    width: 100%;
}
#result{
	text-align:center;
	border-radius:20px;
  height: 100px;
	 width: 126%;
	
}
#btn{
	text-align:center;
	border-radius:20px;
	height:100px;
	width:50%;
	font-size:2em;
	float:right;
	
}
#valider{
    margin:5px;
	text-align:center;
	border-radius:20px;
    font-size: 2em;
    width: 100%;
    height: 50px;
    background-color: rgb(18, 168, 38);
}
#chatlogs{
	  padding:15px;
	  border-radius: 15px;
    height: 70%;
    width: 95%;
    background-color: rgb(62, 77, 90);
}
textarea[placeholder]{
    font-size: 2em;
    text-align: center;
}
input[placeholder]{
    font-size: 2em;
    text-align: center;
}

</style>

</head>
<body>

<section id="partie1">
            <header>
                    <div class="container-fluid" id="titre">
                               
                                    <h1>La Reine du Cake</h1>
                                    <img id="logo" src="image/log1.jpg" alt=""/>
                                    <br><p>Votre Plaisir Notre Metier</p>
                                    
                     </div>
            </header>
        </section>
        
        <section id="partie2" class="container-fluid">
            <nav class="navbar navbar-inverse" id="nav">
                <div class="container-fluid">
                   <div class="navbar-header">
                        <a id="projet" class="navbar-brand">Votre Plaisir Notre Metier</a>
                   </div>
                   <ul class="nav navbar-nav" id="menu">
                   <li><a href="index.html">ACCEUIL</a></li>
                       <li><a href="mariage.php">GATEAU DE MARIAGE</a></li>
                       <li><a href="anniv.php">GATEAU D'ANNIVERSAIRE</a></li>
                   </ul>
                </div>
           </nav>
        </section>
<section id="section">
    <center><h1>PERSONNALISEZ VOTRE COMMANDE!!!</h1></center>
    <div id="espace">
    <div id="chatlogs" class="container darker">
         LOADING CHAT...
    </div>
    <form id="form" name="form1">
       <div class="row">
			<div class="col-md-12">
			    <input type="text" id="pseudo" name="uname" placeholder="votre pseudo"  x-webkit-speech />
			</div>
			<div class="col-md-8">
			    <textarea id="result" name="msg" placeholder="ecrivez votre message ici !!!"></textarea>
			</div>
			<div class="col-md-4">
			    <a href="#"><button class="btn btn-primary" id="btn"><span class="glyphicon glyphicon-headphones"></span>Enregitrer!</button></a>
			</div>
			<div class="col-md-12">
			    <input type="submit" id="valider" onclick="submitChat()" value="Envoyer"/><br /><br />
			</div>
       </div>
</form>
    </div>
</section><br><br><br><br><br><br>

<section id="partie5">
        <footer>
                <div class="container-fluid footer" id="footer">
                         <fieldset><legend><center>CONTACTEZ-NOUS!</center></legend>
                               <div class="row" >
                               <div class="col-md-6">
                               <h4>Des questions</h4>
                               <a href="#">Nos Magasins</a><br>
                               <a href="#">Livraison</a><br>
                               <a href="#">Conditions Generale De Vente</a><br>
                               </div>
                     
                               <div class="col-md-6">
                                     <h4>contactez-nous</h4>
                                     <a href="#"><span class="glyphicon g"></span>Facebook</a><br>
                                     <a href="#"><span class=""></span>Twitter</a><br>
                                     <a href="#"><span class=""></span>Youtube</a>
                               </div><br><br>
                                   
                         </fieldset>
                         </div>
               </div>
                           
        </footer>
</body>
<script src="VOICE.js"></script>
</html>











