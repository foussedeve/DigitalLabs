<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/js/slick/slick.css">
    <link rel="stylesheet" href="/js/slick/slick-theme.css">
    <link rel="stylesheet" href="/fonts/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
   <?php  require VIEW_PATH."partials/header.php"?>

    <main class="main">
    
        <article class="article__web" id="developpement">
        <h2 class="main__title">Conception de site internet</h2>
        <section class="section">
          <div class="section__card"> 
              <div class="section__img fas fa-laptop"></div>
              <div class="section__infos">
                  <h3> Votre prémier site internet</h3>
                  <p>Nous réalisons des sites adaptés a vos besoins.</p>
              </div>
          </div>  
          <div class="section__card">
              <div class="section__img fa fa-laptop-code"></div>
              <div class="section__infos">
                  <h3>Refonte de site internet</h3>
                  <p>Nous remodelons votre site pour l'adapter aux tendences du moment.  
                  </p>
              </div>
          </div>  
          <div class="section__card">
             <div class="section__img fa fa-robot"></div>
             
             
              <div class="section__infos">
                  <h3>Automatisation</h3>
                  <p>Nous créer des bots afin d'automatiser certains de  vos tâches numériques 
                       et ainsi vous faire gagnez du temps. 
                  </p>
              </div>
          </div>  

        </section>
        <section class="section__services">
            <aside class="section__aside">
                <h3>Nos prestaions:</h3>
                <h3>Développemnt web</h3>
                  <p><img src="/img/img_work_6.jpg" alt="" class="aside__img"></p>
            </aside>
            <article class="section__article">
                <div class="article__card">
                    <h4>site vitrine</h4>
                    <p> Les site vitrine sont sites qui servent à présenter 
                        l'activités d'une institution.</p>
                        <a href="/conception-de-sites-internets#vitrine">en savoir +</a>

                </div>
                
                <div class="article__card">
                    <h4>sites marchands</h4>
                    <p> Les site marchands sont sites e-commerce ils premettent à
                         un instittution des vendre ses produits en ligne.</p>
                    <a href="/conception-de-sites-internets">en savoir +</a>

                </div>
                <div class="article__card">
                    <h4>Bots</h4>
                    <p> Les Bots sont des programme qui vous premettrons d'automatiser 
                        certains de vos tâches quotidiennes et ainsi vous faire gagnez du temps.</p>
                        <a href="/conception-de-sites-internets">en savoir +</a>

                </div>
            </article>

        </section>
        <section class="article__details">
            <div class="article__rowone">
            <h1 class="main__title"> pourquoi avoir un site internet ? à quoi ça sert?</h1>
            <p>Aujourd'huit avec l'évolution technologique et la prolifération
                 des téléphones portable avoir un site internet devient une 
                 nessecité, voir même indispensable pour les entreprises
                qui veulent rester en contact avec leurs clients ou se faire de nouveaux
                 clients. Un site internet permet entre autre:</p>
                 <ul>
                     <li>Augmenter le prestige et le serieux de votre entreprise</li>
                     <li>Avoir un espace dédié et personnalisé pour communiquer sur votre marque</li>
                     <li>Améliore votre visibilitté et trouver de nouveaux clients</li>
                     <li>Vendre vos produits en ligne sans perdre de temps</li>
                     <li>Avoir une plateforme disponible 7 jours sur 7 et 24 heures sur 24 pour vos clients</li>
                     <li>Développer la confiance des clients et votre Service Après Vente</li>
                 </ul>
                 <a href="nous-contacter" class="links">demandez un devis</a>
                <a href="/conception-de-sites-internets" class="links">en savoir +</a>
            </div>
            <div class="article__rowtwo">
            <h2>Digital Labs agence web à Ouagadougou</h2>
            <h3> 
                Offrez à votre entreprise, Institution, Hôtel, Restaurant ou Commerce un site internet sur mesure pour votre communication digitale !</h3>
                <p class="article__img"><img src="/img/img_work_6.jpg" alt="" class=></p>
                <p class="art__p">Notre Agence vous intègere dans tous les étapes du processus de 
                    création de votre site afin de répondre à votre besoins: </p>
                <div class="work__content">
                <h3>Notre méthode de travail</h3>
                <div class="article__work">
                    <h4>Analyser et comprendre</h4>
                    <p> Afin que votre site soit véritablement adapté et
                        utile à votre audience, nous
                        vous aidons à identifier et comprendre vos cibles.</p>
                </div>
                
                <div class="article__work">
                    <h4> Apprendre et s'améliorer</h4>
                    <p> Nous vous incluons tout au long du processus de création grâce à une
                         méthodologie de travail participative constituée d’ateliers
                          et de formations.</p>
                </div>
                <div class="article__work">
                    <h4> Bien faire et voir loin</h4>
                    <p>Nous vous accompagnons avant, pendant et après le lancement de votre site
                         web, afin de vous garantir des outils à la pointe des tendances du numérique.</p>
                </div>
                </div>
            </div>
            <div class="article__projets">
                <h1 class="main__title" id="works">Quelques une de nos réalisations</h1>
               <div class="article__slider multiple-items">
                   <?php $images=glob("img/works_images/*.png"); foreach ($images as $image):?>
                 <div class="article__oneprojet">
                    <img src="<?=$image ?? null?>" alt="" class="">
                </div>
                <?php  endforeach?>   
            </div>
            </div>

        </section>
        </article>
        <article class="article__market" id="digital">
        <h2 class="main__title">Marketing Digital</h2>
        <section class="section">
          <div class="section__card">
             <div class="section__img  fa fa-low-vision"></div>
              <div class="section__infos">
                  <h3> visibilité & notoriété</h3>
                  <p>Optimiser votre visibilité et votre image de 
                      marque en postant sur différents
                       supports des contenus pertinents et adaptés à votre cible.</p>
              </div>
          </div>  
          <div class="section__card">
          <div class="section__img fa fa-user-plus "></div>
              <div class="section__infos">
                  <h3>génération de prospects</h3>
                  <p>
                  DIgital Labs identifie et convertit votre communauté en clients potentiels.
                  </p>
              </div>
          </div>  
          <div class="section__card">
              <div class="section__img fa fa-comments "></div>
              <div class="section__infos">
                  <h3>fidélisation client</h3>
                  <p>
                  Digital Labs vous permet de fidéliser votre clientèle en créant un lien fort et durable.
                  </p>
              </div>
          </div>  
        </section>
        <section class="section__services">
            <aside class="section__aside">
                <h3>Nos prestaions:</h3>
                <h3>Community manager</h3>
                  <p><img src="/img/digital_market1.jpg" alt="" class="aside__img"></p>
            </aside>
            <article class="section__article">
                <div class="article__card">
                    <h4>starter</h4>
                    <p> L'essentiel pour une communication digitale et professionnelle.
                        Idéal pour les entreprises individuels
                    </p>
                        <a href="community-manager">en savoir +</a>

                </div>
                
                <div class="article__card">
                    <h4>booster</h4>
                    <p>Ajoutez une touche humaine et personnelle pour une meilleur performance.</p>
                    <a href="community-manager">en savoir +</a>

                </div>
                <div class="article__card">
                    <h4>landing page</h4>
                    <p> 
                        Les landing pages sont des pages de vente. Elles permet de booter vos campagnes
                        marketing sur les réseaux sociaux et augmenter vos ventes. 
                    </p>
                        <a href="community-manager">en savoir +</a>

                </div>
            </article>
        </section>
        <article class="article__comm">
                <h1 class="main__title">Digital Labs Communication digital</h1>
                <h3>Offrez a votre entreprise, Institution, Hôtel, Restaurant ou
                     Commerce les compétences d'un Community Manager  pour votre communication digitale ! </h3>
                <aside class="aside__comm">
                    <p class="article__img"><img src="/img/digital_market2.jpg" alt="" class=""></p>
                     <p class="art__p"> Notre agence de communication vous propose des services adaptés aux besoins
                         comme aux budgets des petites et moyennes entreprises :
                    </p>
                   <ul>
                       <li>mise à disposotion d'un <a href="#" class="href"> community manager</a>
                            pour la gestion de vos profils professionnels sur les réseaux sociaux,
                       </li>
                       <li>
                           <a href="#">référencement local</a> de votre entreprise sur Google My Business,
                       </li>
                       <li>
                          <a href="#">création de vos support imprimés</a> pour votre communication (flyer, brochure, carte de visite ..)
                       </li>
                    </ul>
                    <h1 class="comm__title">pourquoi avoir un community manager ? quels avantages ?</h1>
                    <p>Afin d'optimiser votre visibilité, votre réputation de votre entreprise à court ,
                         moyen et long terme, votre presence sur les réseaux sociaux est primordiale.
                         Faire appel à un community manager vous permettra d’augmenter votre volume 
                         d’abonnés, et ainsi de augmenter régulièrement votre chiffre d’affaires.
                        </p>
                    <p>Le savoir-faire de community manager vous aide à maintenir une activié régulière et 
                        qualiitatif sur les differents réseaux sociaux tels Facebook, Instagram,Twitter... aux travers :</p>
                     <ul>
                         <li><span>Lancement de campagne marketing sponsorisées</span></li>
                         <li><span> Création et publication de posts</span> sur l'actualité de votre entreprise ou structure</li>
                         <li><span>Mise en place de jeux, concours et promotion</span>afin inciter de l'engagement auprès de vos abonnés</li>
                     </ul>
                </aside>
                <a href="nous-contact" class="links">demandez un devis</a>
                <a href="/#contact" class="links">contactez nous</a>
                    
            </article>
        </article>
        <?php  require VIEW_PATH."partials/form_contact.php"?>
       
    </main>
     <?php  require VIEW_PATH."partials/footer.php"?>
 </body>
</html>