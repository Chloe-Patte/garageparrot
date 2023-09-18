<section class="bg-white pt-10">
    <div class="py-4 lg:py-1 px-4 mx-auto ">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Ajouter une voiture</h2>
        <p class="mb-8 lg:mb-12 font-light text-center text-gray-500 sm:text-xl">Une nouvelle voiture au catalogue !</p>
        <form method="post" action="index.php?controleur=gestionadmin&action=ajoutervoiture" class="space-y-8">
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="marque" class="block mb-2 text-sm text-left font-medium text-gray-900">Marque</label>
                    <input type="text" id="marque" name="marque" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Marque" required>
                </div>
                <div>
                    <label for="modele" class="block mb-2 text-sm text-left font-medium text-gray-900">Modele</label>
                    <input type="text" id="modele" name="modele" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Modele" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="annee" class="block mb-2 text-sm text-left font-medium text-gray-900">Année</label>
                    <input type="text" id="annee" name="annee" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Année" required>
                </div>
                <div>
                    <label for="energie" class="block mb-2 text-sm text-left font-medium text-gray-900">Energie</label>
                    <input type="text" id="energie" name="energie" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Energie" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="trans" class="block mb-2 text-sm text-left font-medium text-gray-900">Transmission</label>
                    <input type="text" id="trans" name="trans" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Transmission" required>
                </div>
                <div>
                    <label for="prix" class="block mb-2 text-sm text-left font-medium text-gray-900">Prix</label>
                    <input type="text" id="prix" name="prix" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Prix" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 grid-rows-1">
                <div>
                    <label for="motor" class="block mb-2 text-sm text-left font-medium text-gray-900">Motorisation</label>
                    <input type="text" id="motor" name="motor" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Motorisation" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="km" class="block mb-2 text-sm text-left font-medium text-gray-900">Kilométrage</label>
                    <input type="text" id="km" name="km" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Kilométrage" required>
                </div>
                <div>
                    <label for="porte" class="block mb-2 text-sm text-left font-medium text-gray-900">Portes</label>
                    <input type="text" id="porte" name="porte" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Portes" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="place" class="block mb-2 text-sm text-left font-medium text-gray-900">Places</label>
                    <input type="text" id="place" name="place" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Places" required>
                </div>
                <div>
                    <label for="couleur" class="block mb-2 text-sm text-left font-medium text-gray-900">Couleur</label>
                    <input type="text" id="couleur" name="couleur" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Couleur" required>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="cvfisc" class="block mb-2 text-sm text-left font-medium text-gray-900">Chevaux FISC</label>
                    <input type="text" id="cvfisc" name="cvfisc" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Cv FISC" required>
                </div>
                <div>
                    <label for="cvdin" class="block mb-2 text-sm text-left font-medium text-gray-900">Chevaux DIN</label>
                    <input type="text" id="cvdin" name="cvdin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="Cv DIN" required>
                </div>
            </div>
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-center text-gray-900">Section équipements</h2>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="equip1" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 1</label>
                    <input type="text" id="equip1" name="equip1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
                <div>
                    <label for="equip2" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 2</label>
                    <input type="text" id="equip2" name="equip2" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="equip3" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 3</label>
                    <input type="text" id="equip3" name="equip3" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
                <div>
                    <label for="equip4" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 4</label>
                    <input type="text" id="equip4" name="equip4" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="equip5" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 5</label>
                    <input type="text" id="equip5" name="equip5" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
                <div>
                    <label for="equip6" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 6</label>
                    <input type="text" id="equip6" name="equip6" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="equip7" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 7</label>
                    <input type="text" id="equip7" name="equip7" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
                <div>
                    <label for="equip8" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 8</label>
                    <input type="text" id="equip8" name="equip8" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
            </div>
            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div>
                    <label for="equip9" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 9</label>
                    <input type="text" id="equip9" name="equip9" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
                <div>
                    <label for="equip10" class="block mb-2 text-sm text-left font-medium text-gray-900">Equipement 10</label>
                    <input type="text" id="equip10" name="equip10" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="">
                </div>
            </div>
            
            <a href="index.php?controleur=gestionadmin&action=connexion" class="text-gray-600">Annuler</a>
            <button type="submit" class="py-3 px-5 ml-6 bg-clifford text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Ajouter</button>
        </form>
    </div>
</section>