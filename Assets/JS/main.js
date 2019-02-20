var switchFr = document.getElementById('switchFr');
var switchEn = document.getElementById('switchEn');
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

    TweenMax.to(".kev", 2, {
        opacity : 0,
        y: -60,
        ease: Expo.easeInOut
    })

    TweenMax.to(".pres", 2, {
        opacity : 0,
        y: -60,
        ease: Expo.easeInOut
    })

    TweenMax.to("#home", 2, {
        delay: 0.3,
        top : "-100%",
        ease: Expo.easeInOut
    })

  }

  function OverflowHeader() {
    document.body.style.overflow = "visible";
    document.getElementById('header').style.display = "block";
    document.getElementById('header').style.position = "fixed";
    document.getElementById('header').style.top = "0%";
    document.getElementById('header').style.width = "100%";
    document.getElementById('header').style.zIndex = "1";
}



  var home = document.getElementById('mouse');
  home.addEventListener("click", () => { 
      animationHome();
      OverflowHeader();
    }, false);

  // ----------------------- Fin animations pages ----------------------------


  // ----------------------- Fin ancres ----------------------------

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

function validateFormEn() {
  var nomEn = document.getElementById('nomEn').value;
  var emailEn = document.getElementById('emailEn').value;
  var sujetEn = document.getElementById('sujetEn').value;
  var messageEn = document.getElementById('messageEn').value;
  var onlyLettersEn =/^[a-zA-Z\s]*$/; 
  var onlyEmailEn = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
  
  if(nomEn == "" || nomEn == null){
      document.getElementById('LabelNomEn').innerHTML = ('Please enter your name');
      document.getElementById('nomEn').style.borderColor = "red";
      return false;
  }
     

  if (!nomEn.match(onlyLettersEn)) {
      document.getElementById('LabelNomEn').innerHTML = ('Please only enter letters');
      document.getElementById('nomEn').style.borderColor = "red";
      return false;
  }
  


  if(emailEn == "" || emailEn == null ){
        document.getElementById('LabelEmailEn').innerHTML = ('Please enter your email address');
        document.getElementById('emailEn').style.borderColor = "red";
        return false;
    }

  if (!emailEn.match(onlyEmailEn)) {
      document.getElementById('LabelEmailEn').innerHTML = ('Please enter a valid email address');
      document.getElementById('emailEn').style.borderColor = "red";
      return false;
  }

  if(sujetEn == "" || sujetEn == null ){
        document.getElementById('LabelSujetEn').innerHTML = ('Please enter the subject of your message');
        document.getElementById('sujetEn').style.borderColor = "red";
        return false;
    }

  if (!sujetEn.match(onlyLettersEn)) {
      document.getElementById('LabelSujetEn').innerHTML = ('Please only enter letters');
      document.getElementById('sujetEn').style.borderColor = "red";
      return false;
  }

  if(messageEn == "" || messageEn == null){
      document.getElementById('LabelMessageEn').innerHTML = ('Please enter your message');
      document.getElementById('messageEn').style.borderColor = "red";
      return false;
  }

  else{
        return true;
    }
    
}

let validate = document.getElementById('validate');
validate.addEventListener("click", validateForm, false);

let validateEn = document.getElementById('validateEn');
validateEn.addEventListener("click", validateFormEn, false);

// ----------------------- Fin vérif formulaire contact côté utilisateur ----------------------------



