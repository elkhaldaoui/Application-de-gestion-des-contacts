const form = document.getElementById('addForm')
const userName = document.getElementById('userName')
const email = document.getElementById('email')
const adresse = document.getElementById('adresse')
const phone = document.getElementById('phone')

const userNameErrors = document.getElementById('userNameErrors')
const emailErrors = document.getElementById('emailErrors')
const phoneErrors = document.getElementById('phoneErrors')
const adresseErrors = document.getElementById('adresseErrors')

form.addEventListener('submit', e => {
    let phoneLenght = phone.value
    let errors = 0
    let pattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]{2,})+$/
    if(userName.value == ''){
       userNameErrors.textContent = 'user name is required'
       errors++
    }
    if(email.value == ''){
        emailErrors.textContent = 'Email is required'
        errors++
    }
    if(phone.value == ''){
        phoneErrors.textContent = 'Phone number is required'
        errors++
    }
    if(adresse.value == ''){
        adresseErrors.textContent = 'City is required'
        errors++
    }
    if(!email.value.match(pattern)){
        emailErrors.textContent = 'Email is not valid'
        errors++
    }
    if(phoneLenght.length < 10){
        phoneErrors.textContent = 'phone nubmber must be at least 10 digits'
        errors++
    }
    if(errors > 0) {
        e.preventDefault()
    }
})