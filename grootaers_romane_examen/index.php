<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base/base.css">
    <title>home</title>
</head>
<body>
    <ul class="menu">
        <li>Home</li>
        <li>Fonctions</li>
        <li>Contact</li>
    </ul>
    <div class="divP">
    <div class="index">
        <div class="galerie">
            <h3>Galerie images</h3>
        </div class="flex">
            <fieldset class="info">
                <legend>Vos informations</legend>
                <form> 
                    <div>
                        <label for="nom">Votre nom</label>
                            <input type="text" name="name" id="nm" value="Nom" resquired>
                    </div>
                    <div>
                        <label for="prenom">Votre prénom</label>
                            <input type="text" name="firstName" id="fnm" value="Prénom" resquired>
                    </div>
                    <div>
                        <label for="mail">Votre mail</label>
                            <input type="email" name="Email" id="em" value="Email" resquired>
                    </div>
                    <div>
                        <label for="phone">Votre numéro de téléphone</label>
                            <input type="tel"id="ndt" name="ndt" value ="Numéro de téléphone" resquired>
                    </div>
                </form>
            </fieldset>
            <fieldset class="commande">
                <legend>Votre commande</legend>
                <form>
                    <div>
                    <label for="choixPossibilités">Choisissez parmi les possibilités</label>
                        <input type="select" name="possibilités" id="cp">
                    </div>
                    <div>
                        <select id="possibilités">
                            <optgroup label="Hardware">
                                    <option value="ecran">Écran</option>
                                    <option value="souris">Souris</option>
                                    <option value="clav">Clavier</option>
                                    <option value="ram">RAM</option>
                                    <option value="dd">Disque Dur</option>
                            </optgroup>
                            <optgroup label="Software">  
                                    <option value="Office">Office 365</option>
                                    <option value="PT">Packet Tracer</option>
                                    <option value="gwp">Google WorkSpace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                    <label for="quantite">La quantité souhaitée</label>
                        <input type="number" name="nombre" id="nbr" value="1">
                    </div>
                    <div>
                    <label for="dateCommande">Date de commande souhaitée</label>
                        <input type="datetime-local" name="commande" id="dc">
                    </div>
                    <div>
                    <label for="factureChoix">Facture choisie</label>
                        <input type="checkbox" name="mail" id="m">Par mail </input>
                        <input type="checkbox" name="papier" id="p">Par papier </input>
                    </div>
                    <div>
                    <label for="remarque">Remarques supplémentaire</label>
                        <input type="message" name="remarqueSup" id="rs" value="votre message">
                    </div>
                </form>
            </fieldset>
        <div class="galerie">
            <h3>Galerie images</h3>
        </div>
    </div>
    <button>Envoyer</button>
    </div>
    <div class="foot">
        <div>
        <p>Examen 2022-2023 UAA12 : Création d'un site dynamique</p>
        </div>
        <div>
        <p>5TTI</p>
        </div>
    </div>
</body>
</html>