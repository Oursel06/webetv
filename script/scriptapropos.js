// descriptions profils
let membre = [
    {
        name: 'Damien',
        desc: 'En chef de projet, Damien pilote l’ensemble de l’équipe E-TV et coordonne les pôles entre eux. Il est également le référent entre le Campus et tous les membres de l’équipe.',
        img: '../images/damien.png',
        imgskills: '../images/skill_damien.png'
    },
    {
        name: 'Marion',
        desc: 'Cerveau créatif du projet, Marion pense et design notre principal support de communication et s’assure de la bonne exécution par les développeurs',
        img: '../images/marion.png',
        imgskills: '../images/skill_marion.png'
    },
    {
        name: 'Pierre',
        desc: 'Derrière la caméra, Pierre capture et immortalise nos interviews et podcasts dans son appareil et nous garantit le contenu que nous diffusons au quotidien.',
        img: '../images/pierre.png',
        imgskills: '../images/skill_pierre.png'
    },
    {
        name: 'Audran',
        desc: 'Pilier du pôle informatique, Audran construit le socle de notre site internet pour permettre son développement par nos équipes.',
        img: '../images/audran.png',
        imgskills: '../images/skill_audran.png'
    },
    {
        name: 'Axel',
        desc: 'Ouïe fine de notre projet, Axel est garant de la captation sonore de nos productions au moment du tournage mais également au moment du montage.',
        img: '../images/axel.png',
        imgskills: '../images/skill_axel.png'
    },
    {
        name: 'Catalina',
        desc: 'Véritable bras droit du chef de projet, Catalina est le lien humain entre tous les collaborateurs du projet et garantit une bonne communication et une organisation réussie.',
        img: '../images/catalina.png',
        imgskills: '../images/skill_catalina.png'
    },
    {
        name: 'Sabrina',
        desc: 'Lumière de ce projet, Sabrina assure la bonne gestion et disposition des “lights” sur les tournages et contribue à l’esthétique du rendu.',
        img: '../images/sabrina.png',
        imgskills: '../images/skill_sabrina.png'
    },
    {
        name: 'Margaux',
        desc: 'Couteau-suisse du marketing, Margaux a permis au projet d’être visible sur les réseaux sociaux. Elle manage l’ensemble du pôle communication et attribue les missions à chacun.',
        img: '../images/margaux.png',
        imgskills: '../images/skill_margaux.png'
    },
    {
        name: 'Théo',
        desc: 'Source d’information inépuisable et amoureux de la langue française, Théo pense et rédige les contenus qui seront ensuite diffusés sur nos réseaux ou sur le site internet.',
        img: '../images/theo.png',
        imgskills: '../images/skill_theo.png'
    },
    {
        name: 'Alexandre',
        desc: 'Balise essentielle de notre projet, Alexandre code et retranscrit les idées du pôle web design pour donner vie aux maquettes imaginées et illustrées de notre site internet.',
        img: '../images/alexandre.png',
        imgskills: '../images/skill_alexandre.png'
    },
    {
        name: 'Tatiana',
        desc: 'Inspirée et inspirante, Tatiana contribue à rendre l’identité visuelle d’E-TV et son style graphique toujours plus aboutis. Elle travaille en collaboration avec l’ensemble des pôles du projet.',
        img: '../images/tatiana.png',
        imgskills: '../images/skill_tatiana.png'
    },
    {
        name: 'Nolan',
        desc: 'Acteur essentiel du projet, Nolan assure la post-production des interviews et podcast. Il permet à nos productions filmées d’être dynamiques et esthétiques.',
        img: '../images/nolan.png',
        imgskills: '../images/skill_nolan.png'
    },
    {
        name: 'Yan',
        desc: 'Balise essentielle de notre projet, Yan code et retranscrit les idées du pôle web design pour donner vie aux maquettes imaginées et illustrées de notre site internet.',
        img: '../images/yan.png',
        imgskills: '../images/skill_alexandre.png'
    }
];

$('.content .header').html(membre[0].name);
$('.content .description').html(membre[0].desc)

let numSlides;
let $carousel = $('.carousel');
$(document).ready(function () {
    $('.items img').fadeTo(300, .5);
    $('.description').html('Veuillez sélectionner une photo d\'un membre de l\'équipe pour voir son profil.');
    $('.header').html('Information');
    $('.img').style.width = '0';
    $('.imgskills').style.width = '0';
});

$carousel.on('beforeChange', function (event, slick, currentSlide, newSlide) {
    if (newSlide !== currentSlide) {
        $('.items-content').animate({ opacity: 0 }, 150);
        $('.slick-active img').removeClass('select');
        $('.slick-active img').fadeTo(300, .5);
    }
}).on('afterChange', function (event, slick, currentSlide) {
    $('.items-content').animate({ opacity: 1 }, 150);
    $('.content .header').html(membre[currentSlide].name);
    $('.content .description').html(membre[currentSlide].desc);
    $('.content .img').attr("src", membre[currentSlide].img);
    $('.content .imgskills').attr("src", membre[currentSlide].imgskills);
    $('.slick-active img').addClass('select');
    $('.slick-active img').fadeTo(.5, 300);
}).on('init', function (event, slick) {
    numSlides = slick.slideCount;
});

$carousel.slick({
    infinite: false,
    vertical: true,
    verticalSwiping: true,
    centerPadding: '40px',
    speed: 200,
    focusOnSelect: true,
    arrows: false
});

// Up/down
$('html').keydown(function (event) {
    let currentSlide = $carousel.slick('slickCurrentSlide');
    // Up
    if (event.keyCode === 40 && currentSlide !== 0) {
        $carousel.slick("slickPrev");
    }
    else if (event.keyCode === 38 && numSlides - 1 !== currentSlide) {
        $carousel.slick("slickNext");
    }
});