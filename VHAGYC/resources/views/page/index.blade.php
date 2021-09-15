@extends('welcome')

@section('logo')
    <div class="selector">
        <img src="/picture/ancres.png">    
        <span>VHAGYC</span>  
    </div>
@endsection

<!--@section('register')
    <div class="selector">     
        <a href="{{ url('register') }}">INSCRIPTION</a>
    </div>
@endsection-->

@section('login')
<!--
    <div class="selector">
        <a href="{{ url('login') }}">CONNECTION</a>
    </div>
-->
    
@endsection
@section('overlay')


    <div class="welcome">
        <img src="picture/voiliers.jpg" width="100%" height="1000px" alt = "image composé de plusieur voiliers" >
    <div class="overlay"> 
        <div class="title">
            <h1 style="text-align: center">VHAGYC</h1>
        </div>
        <div class="description">
            <p style="text-align: center"> Nous sommes une entreprise spécialisé dans le dévellopement mobile.</p>
        </div>
    </div>


@endsection

@section('vhagyc')
    <div class="container">
      
        <div class="presentation">
            <div class="title">
                VHAGYC
            </div>
            <div class="text">
                <p>
                    VHAGYC est une société par actions simplifiée crée en 2020 par Anthony Roy. Ils sont spécialisés dans l’édition d’application et de logiciel dans le domaine du nautisme.
                </p>
                <p>
                    Ils fournissent des applications mobiles avec des interfaces personnalisé et des bases de données pour que l’application sois facilement utilisable que ce soit pour le commanditaire ou pour l’utilisateur. 
                </p>
                <p>
                    Pour fournir des applications, ils passent par une étude de la demande client pour en tirer une documentation ressortant la structure qui sera mise en place. Ils passent ensuite à la production de la réalisation de l’application et pour finir il passe l’application en préproduction pour tester les différentes fonctionnalité mise en place avant d’effectuer le déploiement de l’application.  
                </p>
        </div>
        <div class="qualities">
            <div class="title">
                Cobaturage
            </div>
            <div class="text">
                <p>
                    Cobaturage est un site permettant la mise en relation entre les propriétaires de bateaux et les plaisanciers qui souhaite réaliser une sortie en mer ou en eaux intérieurs. Ce site web est utilisable en France métropolitaine ainsi que dans les DOM-TOM. 
                </p>
                <p>
                    Son but est la création de lien sociaux entre les personnes ayant la même passion tout en assurant une sécurité tout en facilitant l’accès au nautisme tout en respectant l’environnement.
                </p>            
                <p>
                    À la suite d’une forte demande de cobaturage, ils ont ouvert l’inscription aux professionnels du nautisme pour démocratiser les activités en mer. Cela permet aussi la réalisation d’accompagnent et de formations professionnelles. Il est possible pour les professionnels de prendre l’offre booster pour mettre en avant leur offre.
                </p>
            </div>
        </div>
    </div>
@endsection




