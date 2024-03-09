
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Bootstrap Form with animations</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <!-- jQuery Virtual Keyboard CSS -->
 <link href="https://cdn.jsdelivr.net/npm/virtual-keyboard/dist/css/jquery.keyboard.min.css" rel="stylesheet">
 <!-- jQuery Virtual Keyboard -->
 <script src="https://cdn.jsdelivr.net/npm/virtual-keyboard/dist/js/jquery.keyboard.min.js"></script>
 <!-- jQuery UI (required for the keyboard) -->
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->

<header class="header">
<img src="/images/logo.png" alt="">
<h1 class="text-centet">
    Pré-inscription
</h1>
<h4 class="text-centet">  
    en ligne des candidats au titre de l'année universitaire <center>2023-2024</center></h4>
</header>
<div class="content h-100">
<!--content inner-->
<div class="content__inner">
  <div class="container">
    <!--content title-->
    <h2 class="content__title content__title--m-sm"> Choisir votre Photo Profitionnelle</h2>
    <!--animations form-->
  
      </div>
    </form>
    <!--content title-->
    <h2 class="content__title">
        <div  style="width:70%;text-align:center;margin: auto;">
        <p>لإكمال التسجيل الخاص بك، يرجى طباعة نموذج التسجيل والإيصال الذي ستجده في الخطوة الأخيرة من التسجيل المسبق، ثم قم بالحضور إلى نافذة خدمة التسجيل في مؤسستك.</p>
        <p style="color: red;">في حال واجهت أي مشكلة، يرجى التواصل معنا عبر البريد الإلكتروني <a href="mailto:reclamation_ensao@ump.ac.ma">reclamation_ensao@ump.ac.ma</a></p>
    </div>
    </h2>
  </div>
  <div class="container overflow-hidden">
    <div class="multisteps-form">
      <div class="row">
        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
          <div class="multisteps-form__progress">
            
            <button class="multisteps-form__progress-btn js-active" type="button" title="Information generale">Information generale</button>
            
            <button class="multisteps-form__progress-btn" type="button" title="Address">Information Personnielle</button>

            <button class="multisteps-form__progress-btn" type="button" title="Order Info">Information de médicale & Activite</button>
            <button class="multisteps-form__progress-btn" type="button" title="Comments">Confirmation        </button>
          </div>
        </div>
      </div>
      <!--form panels-->
      <div class="row">
        <div class="col-12 col-lg-12 m-auto">
          <form class="multisteps-form__form" method="POST" enctype="multipart/form-data" action="ajoute"  >
            <!--single form panel-->
            @method('POST')
            @csrf
            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="slideHorz">
              <h5 class="multisteps-form__title">Compléter formulaire d'inscription et le reçu que vous trouverez dans la dernière étape de la pré-inscription</h5>
              <div class="multisteps-form__content">
                <div class="form-row mt-4">
                  <div class="col-12 col-sm-6">
                    <label for="form-label">Nom :*</label>
                    <input class="multisteps-form__input form-control" value=""  name="nom"  type="text" placeholder="entre votre nom"/>
                  </div>
                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <label for="form-label">Prenom :*</label>

                    <input class="multisteps-form__input form-control" name="prenom" type="text" placeholder="entre votre prenom"/>
                  </div>
                </div>
                <div class="form-row mt-4">
                  <div class="col-12 col-sm-6">
                    <label for="form-label">:*اسم </label>

                    <input class="multisteps-form__input form-control" id="nom-ar"  name="nom_ar" type="text" placeholder="ادخل اسم الشخصي"/>
                  </div>
                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <label for="form-label">:* اسم العائلي  </label>

                    <input class="multisteps-form__input form-control" " name="prenom_ar" type="text" placeholder="ادخل اسم العائلي"/>
                  </div>
                </div>
                <div class="form-row mt-4">
                  <div class="col-12 col-sm-6">
                    <label for="form-label"> Date naissance :*   </label>

                    <input class="multisteps-form__input form-control" name="date_naissance" type="date" placeholder="Entrez notre date naissance "/>
                  </div>
                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <label for="form-label"> Date lieu naissance :*   </label>

                    <input class="multisteps-form__input form-control" name="lieu_naissance" type="text"  placeholder="Entrez notre lieu naissance "/>
                  </div>
                  
                </div>
                <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label"> *:  العنوان السكن  </label>

                      <input class="multisteps-form__input form-control" id="adresse-ar" name="lieu_naissance_ar" type="text" placeholder="ادخل العنوان السكن الحالي  "/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <label for="form-label"> Privance naissance  *:     </label>

                      <input class="multisteps-form__input form-control" type="text" name="province_naissance"  placeholder="Entrez notre Privance naissance "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label"> Sexe  *:     </label><br>

                      <input  type="radio"  value="homme"  name="sexe" />homme
                      <input  type="radio"  value="femme" name="sexe"  />femme
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Situation  handicap  *:     </label>
                      <br>
  
                      <input  type="radio"  value="non" name="situation_handicap"  />Non
                      <input  type="radio"  value="oui" name="situation_handicap" />Oui
                      </div>
                    
                   
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Situation familiale *:  </label>

                      <input class="multisteps-form__input form-control" type="text" name="situation_familiale"  placeholder="Entrez notre Situation familiale"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Nationnalite :*     </label>
  
                        <input class="multisteps-form__input form-control" type="text" name="nationnalite" placeholder="Entrez notre Nationnalite "/>
                      </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Adresse 1 *:  </label>

                      <input class="multisteps-form__input form-control" name="adresse1"  type="text" placeholder="Entrez notre Adresse 1"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Adresse 2 *:  </label>
  
                        <input class="multisteps-form__input form-control" name="adresse2"  type="text" placeholder="Entrez notre Adresse 2"/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Code postal*:  </label>

                      <input class="multisteps-form__input form-control" name="code_postal"  type="text" placeholder="Entrez notre code postal"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">province *:  </label>
  
                        <input class="multisteps-form__input form-control" name="province"  type="text" placeholder="Entrez notre province "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Email*:  </label>

                      <input class="multisteps-form__input form-control" name="email"  type="email" placeholder="Entrez notre  email"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Telephone *:  </label>
  
                        <input class="multisteps-form__input form-control" name="telephone"  type="text" placeholder="Entrez notre Telephone "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-lg-4 col-sm-6">
                      <label for="form-label">CIN*:  </label>
  
                        <input class="multisteps-form__input form-control" name="cin_et"  type="text" placeholder="Entrez notre cin"/>
                      </div>
                      <div class="col-lg-4 col-sm-6">
                        <label for="form-label">CM OU CNE*:  </label>
    
                          <input class="multisteps-form__input form-control" name="cm_ou_cne"  type="text" placeholder="Entrez notre CNE OU CM"/>
                        </div>
                    <div class="col-lg-4 col-sm-6">
                    <label for="form-label">Pays*:  </label>

                      <input class="multisteps-form__input form-control" name="pays"  type="text" placeholder="Entrez notre  pays"/>
                    </div>

                    
                    
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Profission de Pere*:  </label>

                      <input class="multisteps-form__input form-control" type="text" name="profession_pere"  placeholder="Entrez notre Profission de Pere"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Profission de Mere *:  </label>
  
                        <input class="multisteps-form__input form-control" type="text" name="profession_mere"  placeholder="Entrez notre Profission de Mere "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Telephone de Pere*:  </label>
 
                      <input class="multisteps-form__input form-control" type="text" name="telephone_pere"  placeholder="Entrez notre Telephone de Pere"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Telephone de Mere *:  </label>
  
                        <input class="multisteps-form__input form-control" type="text"  name="telephone_mere"  placeholder="Entrez notre Telephone de Mere "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Cin de Pere*:  </label>

                      <input class="multisteps-form__input form-control" type="text" name="cin_pere"   placeholder="Entrez notre Cin de Pere"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Cin de Mere *:  </label>
  
                        <input class="multisteps-form__input form-control" type="text" name="cin_mere" placeholder="Entrez notre Cin de Mere "/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label"> Pere vivre*:  </label>

                    <br>

                    <input  type="radio"  name="vivre_pere" value="non" />Non
                    <input  type="radio"  name="vivre_pere" value="oui" />Oui
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="form-label">Mere vivre*:   </label>
                      <br>
  
                      <input  type="radio" name="vivre_mere" value="non" />Non
                      <input  type="radio" name="vivre_mere"   value="oui" />Oui
                    </div>
                    
                  </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" onclick=" scrollToTop() 

   
                  ">Suivante</button>
                </div>
              </div>
            </div>
            
            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <h5 class="multisteps-form__title">Compléter formulaire d'inscription et le reçu que vous trouverez dans la dernière étape de la pré-inscription</h5>
              <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label for="form-label">Scan bas *:  </label>
  
                      <input class="multisteps-form__input form-control" type="file" name="scan_bac">
                    </div>
                    <div class="col-12 col-sm-6">
                      <label for="form-label">Scan Relvi note *:  </label>
    
                        <input class="multisteps-form__input form-control" type="file"  name="relvi_note" />
                      </div>
                    
                  </div>
                
                <div class="form-row mt-4">
                  <div class="col-4">
                    
                    <label for="form-label">Mention bac *:  </label>

                    <input class="multisteps-form__input form-control" type="text" name="mention_bac" placeholder="Entrez notre Mention de bac  "/>
                  </div>
                  <div class="col-4">
                    
                    <label for="form-label">Nom universite  *:  </label>
  
                      <input class="multisteps-form__input form-control" name="universite_nom"  type="text" placeholder="Entrez notre nom universitaire "/>
                  </div>
                  <div class="col-4">
                    
                    <label for="form-label">Anneé l'obtention de bace *:  </label>
  
                      <input class="multisteps-form__input form-control" name="a_obtention_bac"  type="text" placeholder="Entrez notre nom universitaire "/>
                  </div>
                </div>
                <div class="form-row mt-4">
                  <div class="col-12 col-sm-6">
                    
                    <label for="form-label">Serie bac *:  </label>
    
                    <input class="multisteps-form__input form-control" name="serie_bac"  type="text" placeholder="Entrez notre Serie bac "/>
                  </div>
                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                    <label for="form-label">Type etablessement *:  </label>

                    <input class="multisteps-form__input form-control"  name="type_etablessement" type="text" placeholder="Entrez notre Type etablessement  "/>
                  </div>
                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                    
                    <label for="form-label">Enseignement Superieur *:  </label>

                    <input class="multisteps-form__input form-control" name="enseignement_superieur" type="text" placeholder="Entrez notre Mention de bac  "/>
                  </div>
                </div>
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary ml-auto js-btn-prev" type="button" title="Next" onclick=" scrollToTop() 

   
                  ">Précédent</button>
                  <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" onclick=" scrollToTop() 

   
                  ">Suivante</button>
                </div>
              </div>
            </div>
            <!--single form panel-->
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
              <h5 class="multisteps-form__title">Compléter formulaire d'inscription et le reçu que vous trouverez dans la dernière étape de la pré-inscription</h5>

              <div class="multisteps-form__content">
                <div class="row">
                  <div class="col-12 col-md-6 mt-4">
                    <div class="card shadow-sm">
                      <div class="card-body">
                        <h5>Quelles sont les activités qui vous intéressent ?</h5>

<div class="row">
    <div class="col-6">
       <div class="form-check">
           Sports individuels (الرياضات الفردية)
     </div>
    </div>
<div class="col-6">
   <div class="row">
       <div class="col-3">
             <input  type="checkbox" name="sport_individuels" value="Judo" />
                  <label>Judo (الجودو)</label>
        </div>
  <div class="col-3">
          <input  type="checkbox" name="sport_individuels"  value="Cross" />
                 <label>Cross (العدو الريفي)</label>
  </div>
   <div class="col-3">
         <input checked="checked"  name="sport_individuels"  type="checkbox" value="Athlétisme" />
   <label>Athlétisme (العاب القوى)</label>
</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-6">
  <div class="form-check">
  Sports collectifs (الرياضات الجماعية)
  </div>
  </div>
  <div class="col-6">
  <div class="row">
  <div class="col-3">
  <input type="checkbox" name="sports_colletif"  value="Football" />
  <label>
  Football (كرة القدم)
  </label>
  </div>
  <div class="col-3">
  <input type="checkbox"  name="sports_colletif"  value="Mini foot" />
  <label>
  Mini foot (كرة القدم المصغرة)
  </label>
  </div>
  <div class="col-3">
  <input type="checkbox" name="sports_colletif"  value="Hand ball" />
  <label>
  Hand ball (كرة اليد)
  </label>
  </div>
  </div>
  <div class="row">
  <div class="col-3">
  <input checked="checked" type="checkbox" name="sports_colletif" value="Basket ball" />
  <label>
  Basket ball (كرة السلة)
  </label>
  </div>
  <div class="col-3">
  <input type="checkbox"  name="sports_colletif" value="Volley ball" />
  <label>
  Volley ball (الكرة الطائرة)
  </label>
  </div>
  <div class="col-3">
  <input type="checkbox" name="sports_colletif" value="Rugby" />
  <label>
  Rugby (الريكبي)
  </label>
  </div>
  </div>
  </div>
  </div>
  

           </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 mt-4">
                    <div class="card shadow-sm">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                          <div class="form-check">
                          Les arts Plastiques
                          </div>
                          </div>
                          <div class="col-6">
                          <div class="row">
                          <div class="col-3">
                          
                          <input id="culturelles_arts_plastiques" name="culturelles_arts_plastiques" type="checkbox" value="الفنون التشكيلية" />
                          
                          <label>
                          الفنون التشكيلية
                          </label>
                          </div>
                          </div>
                          </div>
                          </div>
                          
                          <div class="row">
                          <div class="col-6">
                          <div class="form-check">
                          Théâtre
                          </div>
                          </div>
                          <div class="col-6">
                          <div class="row">
                          <div class="col-3">
                          
                          <input id="culturelles_theatre" name="culturelles_theatre" type="checkbox" value="المسرح" />
                          
                          <label>
                          المسرح
                          </label>
                          </div>
                          </div>
                          </div>
                          </div>
                          
                          <div class="row">
                          <div class="col-6">
                          <div class="form-check">
                          L’audiovisuel
                          </div>
                          </div>
                          <div class="col-6">
                          <div class="row">
                          <div class="col-3">
                          
                          <input id="culturelles_audiovisuel" name="culturelles_audiovisuel" type="checkbox" value=" السمعي البصري" />
                          
                          <label>
                          السمعي البصري
                          </label>
                          </div>
                          </div>
                          </div>
                          </div>
                          
                          <div class="row">
                          <div class="col-6">
                          <div class="form-check">
                          Les échecs
                          </div>
                          </div>
                          <div class="col-6">
                          <div class="row">
                          <div class="col-3">
                          
                          <input checked="checked" id="culturelles_echecs" name="culturelles_echecs" type="checkbox" value="الشطرنج" />
                          
                          <label>
                          الشطرنج
                          </label>
                          </div>
                          </div>
                          </div>
                          </div>
                          
                          <div class="row">
                          <div class="col-6">
                          <div class="form-check">
                          L’écriture
                          </div>
                          </div>
                          <div class="col-6">
                          <div class="row">
                          <div class="col-3">
                          
                          <input id="culturelles_ecriture" name="culturelles_ecriture" type="checkbox" value="الكتابة" />
                          
                          <label>
                          الكتابة
                          </label>
                          </div>
                          </div>
                          </div>
                          </div>
                                   
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="button-row d-flex mt-4 col-12">
                    <button class="btn btn-primary ml-auto js-btn-prev" type="button" title="Next" onclick=" scrollToTop() 

   
                    ">Précédent</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivante</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
              <h3 class="multisteps-form__title">Confirmation  d'inscription et le reçu que vous trouverez  </h3>
              <div class="multisteps-form__content">
               
                <div class="button-row d-flex mt-4">
                  <button class="btn btn-primary ml-auto js-btn-prev" type="button" title="Next" onclick=" scrollToTop() 

   
                  ">Précédent</button>
                  

                </div>
                <input type="submit" value="Confirmation inscription ">
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="/js/jsd.js"></script>

</body>
</html>