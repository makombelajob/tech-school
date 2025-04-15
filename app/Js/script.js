import { burger } from './modules/burger.js';
import { themeDark } from './modules/themeDark.js';
// Call of functions
formContact();
burger();
slide();
themeDark();

function slide() {
    function forward() {
        const active = document.querySelector(".active");
        active.classList.remove("active");
        if(active.nextElementSibling){
            active.nextElementSibling.classList.add("active");
        }else{
            active.parentElement.firstElementChild.classList.add("active");
        }
    }
    function backward() {
        const active = document.querySelector(".active");
        active.classList.remove("active");
        if(active.previousElementSibling){
            active.previousElementSibling.classList.add("active");
        }else{
            active.parentElement.lastElementChild.classList.add("active");
        }
    }

    const next = document.querySelector("#right");
    next.addEventListener("click", forward);

    const prev = document.querySelector("#left");
    prev.addEventListener("click", backward);

    const intervalle = setInterval(forward, 10000);
}
function formContact() {

    let emailValid = false;
    let sujetValid = false;
    let msgValid = false;
    let rgpdValid = false;
    const submitBtn = document.querySelector("#submit");

    function allValid() {
        submitBtn.disabled = !(emailValid && sujetValid && msgValid && rgpdValid);
    }

    const emailField = document.querySelector("#email");
    emailField.addEventListener("change", function() {
        const valid = this.nextElementSibling;
        const invalid = this.nextElementSibling.nextElementSibling;
        const feedback = this.parentElement.nextElementSibling;

        const regex = /\S+@\S+\.\S+/;
        if(!regex.test(emailField.value)){
            invalid.style.display = "block";
            feedback.style.display = "block";
            emailValid = false;
        }else{
            invalid.style.display = "none";
            feedback.style.display = "none";
            valid.style.display = "block";
            emailValid = true;
        }
        allValid();
    });

    const sujetField = document.querySelector("#sujet");
    sujetField.addEventListener("change", function() {

        const valid = this.nextElementSibling;
        const invalid = this.nextElementSibling.nextElementSibling;
        const feedback = this.parentElement.nextElementSibling;

       if(this.value.length < 5) {
           invalid.style.display = "block";
           feedback.style.display = "block";
           valid.style.display = "none";

           sujetValid = false;
       }else{
           invalid.style.display = "none";
           feedback.style.display = "none";
           valid.style.display = "block";
           sujetValid = true;
       }
       allValid();
    });

    const msgField =  document.querySelector("#message");
    msgField.addEventListener("change", function() {

        const valid = this.nextElementSibling;
        const invalid = this.nextElementSibling.nextElementSibling;
        const feedback = this.parentElement.nextElementSibling;
        if(this.value.length < 50) {
            invalid.style.display = "block";
            feedback.style.display = "block";
            msgValid = false;
        }else{
            invalid.style.display = "none";
            feedback.style.display = "none";
            valid.style.display = "block";
            msgValid = true;
        }
        allValid();
    });

    const rgpdField = document.querySelector("#rgpd");
    rgpdField.addEventListener("change", function() {
        const feedback = this.nextElementSibling.nextElementSibling;
       if(!this.checked) {
           feedback.style.display = "block";
           rgpdValid = false;
       }else{
           feedback.style.display = "none";
           rgpdValid = true;
       }
       allValid();
    });

    const formContact = document.querySelector("#formContact");
    formContact.addEventListener("submit", function(e){
       e.preventDefault();
       if(emailValid && sujetValid && msgValid && rgpdValid) {
           alert("Message envoyer");
           location.href = "index.html";
       }else{
           const eventErrors = new Event("change");
           emailField.dispatchEvent(eventErrors);
           sujetField.dispatchEvent(eventErrors);
           msgField.dispatchEvent(eventErrors);
           rgpdField.dispatchEvent(eventErrors);
       }

    });
}



// Call of functions
formContact();
burger();
slide();
themedDark();