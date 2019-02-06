window.addEventListener('wheel', function(e) {
    if (e.deltaY < 0) {
      console.log('scrolling up');
    }
    if (e.deltaY > 0) {
      console.log('scrolling down');
    }
  });

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

    TweenMax.from("h2", 1, {
        delay: 1.8,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

    TweenMax.from("#desc", 1, {
        delay: 2.1,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

    TweenMax.from(".justify-content-between", 1, {
        delay: 2.3,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })

  }

  let home = document.getElementById('mouse');
  home.addEventListener("click", animationHome, false);

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

// let English = document.querySelectorAll('.en');
// let French = document.querySelectorAll('.fr');
// result;
// for (var i = 0; i < div.length; i++) {
//     result = div[i];
//     result.addEventListener('click', function Change() {

// });



// // var els = document.querySelectorAll('.panel');
// // els.forEach(function (el) {
// //     el.style.display = "none";
// // });


// 		var div = document.querySelectorAll('div'),
// 			result;
// 		for (var i = 0; i < div.length; i++) {
// 	    result = div[i];
// 	    result.addEventListener('click', function() {
// 			alert(this.innerHTML);
// 		});
// }

// JQuery ToggleClass !!!