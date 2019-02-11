var switchFr = document.getElementById('switchFr');
var switchEn = document.getElementById('switchEn');
var switchFr2 = document.getElementById('switchFr2');
var switchEn2 = document.getElementById('switchEn2');
var switchFr3 = document.getElementById('switchFr3');
var switchEn3 = document.getElementById('switchEn3');
var switchFr4 = document.getElementById('switchFr4');
var switchEn4 = document.getElementById('switchEn4');

var FrItems = document.getElementsByClassName('fr');
var EnItems = document.getElementsByClassName('en');


function switchLang(fromLang, toLang){
    for (let i = 0; i < FrItems.length; i++) {
      if(fromLang[i].nodeName === "BUTTON"){
        fromLang[i].style.display = "none";
        toLang[i].style.display = "inline-block";
      }
      else{
        fromLang[i].style.display = "none";
        toLang[i].style.display = "block";
      }
    }
}


switchLang(EnItems, FrItems);


switchFr.addEventListener('click', function(){
    switchLang(EnItems, FrItems);
});
switchEn.addEventListener('click', function(){
    switchLang(FrItems, EnItems);
});

switchFr2.addEventListener('click', function(){
  switchLang(EnItems, FrItems);
});
switchEn2.addEventListener('click', function(){
  switchLang(FrItems, EnItems);
});

switchFr3.addEventListener('click', function(){
  switchLang(EnItems, FrItems);
});
switchEn3.addEventListener('click', function(){
  switchLang(FrItems, EnItems);
});

switchFr4.addEventListener('click', function(){
  switchLang(EnItems, FrItems);
});
switchEn4.addEventListener('click', function(){
  switchLang(FrItems, EnItems);
});


// Si bug, vérifier qu'il y a bien le même nombre d'éléments en et fr 

// ----------------------- Fin fonction changement de langue ----------------------------



// window.addEventListener('wheel', function(e) {
//     if (e.deltaY < 0) {
//       console.log('scrolling up');
//     }
//     if (e.deltaY > 0) {
//       console.log('scrolling down');
//     }
//   });

  function animationHome() {

    TweenMax.to(".wrapper", 2, {
        delay: 0.3,
        top: "-100%",
        ease: Expo.easeInOut
    })
    
    TweenMax.from("header", 1, {
        delay: 1.3,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

    TweenMax.from("#projet", 1, {
        delay: 1.6,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })


  }

  function animationProjet() {

    TweenMax.to(".wrapper", 2, {
        delay: 0.3,
        top: "-200%",
        ease: Expo.easeInOut
    })
    
    TweenMax.from("#pageP2", 1, {
        delay: 1.6,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

    

  }

  function animationProjet2() {

    TweenMax.to(".wrapper", 2, {
        delay: 0.3,
        top: "-300%",
        ease: Expo.easeInOut
    })
    

    TweenMax.from("#aboutme", 1, {
        delay: 1.6,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

  }

  function animationAbout() {

    TweenMax.to(".wrapper", 2, {
        delay: 0.3,
        top: "-400%",
        ease: Expo.easeInOut
    })
    

    TweenMax.from(".fond", 1, {
        delay: 1.6,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

  }

  function animationContact() {

    TweenMax.to(".wrapper", 2, {
        delay: 0.3,
        top: "-100%",
        ease: Power4.easeOut
    })
    

  }

  let home = document.getElementById('mouse');
  home.addEventListener("click", animationHome, false);

  let projet = document.getElementById('mouse1');
  projet.addEventListener("click", animationProjet, false);

  let projet2 = document.getElementById('mouse2');
  projet2.addEventListener("click", animationProjet2, false);

  let about = document.getElementById('mouse3');
  about.addEventListener("click", animationAbout, false);

  let contact = document.getElementById('retour');
  contact.addEventListener("click", animationContact, false);

  let contact2 = document.getElementById('retour2');
  contact2.addEventListener("click", animationContact, false);


  // ----------------------- Fin animations pages ----------------------------

function validateForm() {
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('email').value;
    var sujet = document.getElementById('sujet').value;
    var message = document.getElementById('message').value;
    var onlyLetters =/^[a-zA-Z\s]*$/; 
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    
    if(nom == "" || nom == null){
        document.getElementById('LabelNom').innerHTML = ('Veuillez entrer votre nom');
        document.getElementById('nom').style.borderColor = "red";
        return false;
    }
       
  
    if (!nom.match(onlyLetters)) {
        document.getElementById('LabelNom').innerHTML = ('Veuillez ne saisir que des lettres');
        document.getElementById('nom').style.borderColor = "red";
        return false;
    }
  
    if(email == "" || email == null ){
          document.getElementById('LabelEmail').innerHTML = ('Veuillez entrer votre email');
          document.getElementById('email').style.borderColor = "red";
          return false;
      }
  
    if (!email.match(onlyEmail)) {
        document.getElementById('LabelEmail').innerHTML = ('Veuillez saisir une adresse email valide');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
  
    if(sujet == "" || sujet == null ){
          document.getElementById('LabelSujet').innerHTML = ('Veuillez entrer le sujet du message');
          document.getElementById('sujet').style.borderColor = "red";
          return false;
      }
  
    if (!sujet.match(onlyLetters)) {
        document.getElementById('LabelSujet').innerHTML = ('Veuillez ne saisir que des lettres');
        document.getElementById('sujet').style.borderColor = "red";
        return false;
    }
  
    if(message == "" || message == null){
        document.getElementById('LabelMessage').innerHTML = ('Veuillez saisir votre message');
        document.getElementById('message').style.borderColor = "red";
        return false;
    }
  
    else{
          return true;
      }
      
}

 // ----------------------- Fin vérif formulaire contact côté utilisateur ----------------------------

