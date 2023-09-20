<div class="bg-gray-300">
    <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
      <div class="p-5 sm:w-3/12 border-r">
            <div class="text-sm uppercase text-clifford font-bold">Nous contacter</div>
            <ul>
                <li class="my-2">
                    <a class="hover:text-clifford" href="#"><i class="fa-solid fa-location-dot" style="color: #1f2937;"></i> 41 rue de l'invention <br>31000 Toulouse</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-clifford" href="#"><i class="fa-solid fa-phone" style="color: #1f2937;"></i> 02 XX XX XX XX</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-clifford" href="index.php?controleur=gestionvisiteur&action=consulterfdc"><i class="lni lni-envelope"></i><i class="fa-solid fa-envelope" style="color: #1f2937"></i> Contactez-nous</a>
                </li>
            </ul>
        </div> 
        
        <div class="p-5 sm:w-7/12 border-r text-center">
            <h3 class="font-bold text-xl text-clifford mb-4">Nos horaires</h3>
            <ul>
                <?php
                    foreach ($lesHoraires as $horaires => $valeur) {
                        echo "<li>".$valeur['JOUR']." : ".$valeur['MATIN']."/".$valeur['APRESMIDI']."</li>";
                    };
                ?>
                
            </ul>    
        </div>
        
        <div class="p-5 sm:w-3/12 ">
            <div class="text-sm uppercase text-clifford font-bold">Menu</div>
            <ul>
                <li class="my-2">
                    <a class="hover:text-clifford" href="index.php">Accueil</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-clifford" href="index.php?controleur=gestionvisiteur&action=consultervo">Véhicules d'occasion</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-clifford" href="index.php?controleur=gestionvisiteur&action=consulterqsn">Qui sommes-nous?</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-clifford" href="index.php?controleur=gestionadmin&action=consulteradmin">Connexion admin</a>
                </li>
            </ul>
        </div>
        
    </div>
</div>
</div>