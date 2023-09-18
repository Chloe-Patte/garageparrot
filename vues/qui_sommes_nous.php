<div class="mx-auto pt-8 flex flex-col">
  <h2 class="xl:text-4xl text-3xl md:text-4xl font-bold text-gray-900 mx-auto text-center xl:text-left pb-4">Qui sommes-nous?</h2>
  <h3 class="text-3xl md:text-4xl text-gray-700 text-left md:text-left mb-2 ml-10 md:ml-20">Vincent Parrot</h3>
    <p class="text-gray-900 ml-10 md:ml-20 mr-10 md:mr-20 text-justify">
      Vincent Parrot est un mécanicien de 35 ans, passionné par son métier depuis l'enfance. 
      Après avoir obtenu son CAP et son Bac Pro de mécanique automobile, il a travaillé pendant 15 ans dans un garage indépendant à Toulouse. 
      En 2021, il a décidé de se lancer dans l'aventure entrepreneuriale et d'ouvrir son propre garage, le Garage V.Parrot. 
      Désormais, il met son savoir-faire et son expérience au service de ses clients, qu'il s'agisse de particuliers ou de professionnels.
      Vincent Parrot est un mécanicien minutieux et rigoureux, qui accorde une grande importance à la qualité de ses interventions.
      Il est également à l'écoute de ses clients et se tient à leur disposition pour répondre à leurs questions et les conseiller.
    </p>
  <h3 class="text-3xl md:text-4xl text-gray-700 text-left md:text-left mb-2 ml-10 md:ml-20">Le garage</h3>
    <p class="text-gray-900 ml-10 md:ml-20 mr-10 md:mr-20 text-justify md:text-left">
      Notre garage est un garage moderne et équipé d'un matériel de pointe, qui permet à Vincent Parrot et son équipe de réaliser des interventions de qualité dans les meilleurs délais.
    </p>
  <h2 class="text-3xl md:text-4xl text-gray-700 text-left md:text-left mb-2 ml-10 md:ml-20">Nos services</h2>
    <p class="text-gray-900 ml-10 md:ml-20 mr-10 md:mr-20 text-justify md:text-left">
      N'hésitez pas à nous contacter pour obtenir un devis gratuit. Nous mettons à votre disposition un savoir-faire et un matériel de pointe pour assurer la maintenance de votre véhicule et garantir sa sécurité. 
      Nous vous accueillerons dans notre atelier avec plaisir pour vous conseiller et vous accompagner dans la réparation de votre véhicule ou l’acquisition d’un nouveau véhicule.
    </p>
</div>

<section id="carousel">
<!-- Card Entretien-->
  <figure class="visible">
    <div class="pl-10 pr-10 md:pl-20 md:pr-20 p-5 bg-white">
      <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md">
        <h2 class="mb-2 font-bold text-2xl text-gray-600">Entretien</h2>
          <p class="text-gray-500">Entretenir sa voiture, c'est l'assurance d'une conduite en toute sécurité et d'une durée de vie prolongée.
            Notre garage propose un large éventail de services d'entretien pour tous types de voitures de tourisme.</p>
      </div>
    </div>
  </figure>
<!-- Card Carosserie-->
  <figure class="hidden">
    <div class="pl-10 pr-10 md:pl-20 md:pr-20 p-5 bg-white">
      <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md">
        <h2 class="mb-2 font-bold text-2xl text-gray-600">Carrosserie</h2>
          <p class="text-gray-500">Entretenir sa voiture, c'est l'assurance d'une conduite en toute sécurité et d'une durée de vie prolongée.
            Notre garage propose un large éventail de services d'entretien pour tous types de voitures de tourisme.</p>
      </div>
    </div>
  </figure>
<!-- Card Mécanique-->
  <figure class="hidden">
    <div class="pl-10 pr-10 md:pl-20 md:pr-20 p-5 bg-white">
      <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md">
        <h2 class="mb-2 font-bold text-2xl text-gray-600">Mécanique</h2>
          <p class="text-gray-500">Votre voiture a besoin d'une révision? Notre atelier de mécanique est spécialisé dans l'entretien et la réparation de tous types de voitures de tourisme.
          Nos prestations comprennent : la réparation et l'entretien du moteur, de la transmission, de la suspension et des freins, le diagnostic et la réparation des pannes mécaniques, 
          la reprogrammation des calculateurs électroniques, la pose d'accessoires et d'équipements.
          </p>
      </div>
    </div>
  </figure>
<!-- Card Occasion-->
  <figure class="hidden">
    <div class="pl-10 pr-10 md:pl-20 md:pr-20 p-5 bg-white">
      <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md">
        <h2 class="mb-2 font-bold text-2xl text-gray-600">Occasion</h2>
          <p class="text-gray-500">Entretenir sa voiture, c'est l'assurance d'une conduite en toute sécurité et d'une durée de vie prolongée.
            Notre garage propose un large éventail de services d'entretien pour tous types de voitures de tourisme.</p>
      </div>
    </div>
  </figure>
</section>

<!-- Flèche de navigation-->
<div class="cursor-pointer flex justify-center pt-2 pb-8 sm:pt-4 md:pt-4 lg:pt-4 xl:pt-8">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#CBD5E0" fill="none" stroke-linecap="round" stroke-linejoin="round" onclick="movePrev()">
        <path stroke="none" d="M0 0h24v24H0z" />
        <polyline points="15 6 9 12 15 18" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#CBD5E0" fill="none" stroke-linecap="round" stroke-linejoin="round" onclick="moveForward()">
        <path stroke="none" d="M0 0h24v24H0z" />
        <polyline points="9 6 15 12 9 18" />
      </svg>
</div>
    
<style>
  section#carousel > figure > div {
    display: none;
  }
  section#carousel > figure.visible > div {
    display: flex;
    position: relative;
  }
</style>




</html>