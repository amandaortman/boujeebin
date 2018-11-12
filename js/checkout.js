// Create a Stripe client.
//ADD KEY FOR STRIPE
var stripe = Stripe('');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
    base: {
      // Add your base input styles here. For example:
      fontSize: '1em',
    fontFamily: 'Lato,Helvetica Neue,Arial,Helvetica,sans-serif'
    },
    complete: { //when input is complete
        color: "#11ddae",    
    }
  };

// Create an instance of the card Element.
var card = elements.create('cardNumber', {
    'placeholder': '4242 4242 4242 4242', 
    'style': style
});

var cardExpiry = elements.create('cardExpiry', {
    'placeholder': 'MM / YY', 
    'style': style
});

var cardCvc = elements.create('cardCvc', {
    'placeholder': 'CVC', 
    'style': style
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-number');
cardExpiry.mount('#card-expiry');
cardCvc.mount('#card-cvc');

card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
    displayError.textContent = '';
    }
});

cardExpiry.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
    displayError.textContent = '';
    }
});

cardCvc.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
    displayError.textContent = '';
    }
});


//elements
customer_first_name = document.getElementById('customer_first_name');
customer_last_name = document.getElementById('customer_last_name');
email = document.getElementById('stripeEmail');
address_line1 = document.getElementById('address_line1');
address_city = document.getElementById('address_city');
address_state = document.getElementById('address_state');
address_zip = document.getElementById('address_zip');
address_country = document.getElementById('address_country');

var displayError = document.getElementById('card-errors');

//regex
var lettersOnly = /^[a-zA-Z\s]*$/;
var zipOnly = /^(\d{5})$/;
var numbersOnly = /^[\d]+$/;
var mixOnly = /^[a-zA-Z0-9\s]*$/;
var stateMax =  /^(\w{2})$/;
//var emailReg = /^\w+@\w+\.\w+$/;

//validation
function validateForm(event){
    //name validation
	customer_first_name.addEventListener("blur", function firstNameValidation() {
        var nameString = customer_first_name.value;
        var nameResult = lettersOnly.test(nameString); //test to see if passes reg
        console.log(nameResult); //TRUE or FALSE

        if((nameString == "") || (nameResult == false)) {
            var name_error = "Name cannot be blank and must contain letters only.";
            displayError.textContent = name_error;
            document.getElementById("customer_first_name").style.borderColor = "#fa755a";
        } else {
            var name_error = '';
            displayError.textContent = name_error;
            customer_first_name.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur

    //name validation
	customer_last_name.addEventListener("blur", function LastNameValidation() {
        var nameString = customer_last_name.value;
        var nameResult = lettersOnly.test(nameString); //test to see if passes reg
        console.log(nameResult); //TRUE or FALSE

        if((nameString == "") || (nameResult == false)) {
            var name_error = "Name cannot be blank and must contain letters only.";
            displayError.textContent = name_error;
            document.getElementById("customer_last_name").style.borderColor = "#fa755a";
        } else {
            var name_error = '';
            displayError.textContent = name_error;
            customer_last_name.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur

    //email validation
	email.addEventListener("blur", function emailValidation() {
        var emailString = email.value;
        //var emailResult = lettersOnly.test(emailString); //test to see if passes reg
        console.log(emailString); //TRUE or FALSE

        if(emailString == "") {
            var email_error = "Email cannot be blank.";
            displayError.textContent = email_error;
            document.getElementById("stripeEmail").style.borderColor = "#fa755a";
        } else {
            var email_error = '';
            displayError.textContent = email_error;
            email.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	

    //address validation
	address_line1.addEventListener("blur", function addressValidation() {
        var addressString = address_line1.value;
        var addressResult = mixOnly.test(addressString); //test to see if passes reg
        console.log(addressResult); //TRUE or FALSE

        if((addressString == "") || (addressResult == false)) {
            var address_error = "Address cannot be blank and contain letters and numbers only.";
            displayError.textContent = address_error;
            document.getElementById("address_line1").style.borderColor = "#fa755a";
        } else {
            var address_error = '';
            displayError.textContent = address_error;
            address_line1.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	

    //city validation
	address_city.addEventListener("blur", function addressValidation() {
        var cityString = address_city.value;
        var cityResult = lettersOnly.test(cityString); //test to see if passes reg
        console.log(cityResult); //TRUE or FALSE

        if((cityString == "") || (cityResult == false)) {
            var city_error = "City cannot be blank and contain letters only.";
            displayError.textContent = city_error;
            document.getElementById("address_city").style.borderColor = "#fa755a";
        } else {
            var city_error = '';
            displayError.textContent = city_error;
            address_city.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	

    //state validation
	address_state.addEventListener("blur", function addressValidation() {
		var stateString = address_state.value;
        var stateResult = lettersOnly.test(stateString); //test to see if passes reg
        console.log(stateResult); //TRUE or FALSE

        if((stateString == "") || (stateResult == false)) {
            var state_error = "State cannot be blank.";
            displayError.textContent = state_error;
            document.getElementById("address_state").style.borderColor = "#fa755a";
        } else {
            var state_error = '';
            displayError.textContent = state_error;
            address_state.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	

    //zip validation
	address_zip.addEventListener("blur", function addressValidation() {
        var zipString = address_zip.value;
        var zipResult = zipOnly.test(zipString); //test to see if passes reg
        console.log(zipResult); //TRUE or FALSE

        if((zipString == "") || (zipResult == false)) {
            var zip_error = "Zip cannot be blank and contain numbers only.";
            displayError.textContent = zip_error;
            document.getElementById("address_zip").style.borderColor = "#fa755a";
        } else {
            var zip_error = '';
            displayError.textContent = zip_error;
            address_zip.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	

    //country validation
	address_country.addEventListener("blur", function addressValidation() {
		var countryString = address_country.value;
        var counrtyResult = lettersOnly.test(countryString); //test to see if passes reg
        console.log(counrtyResult); //TRUE or FALSE

        if((countryString == "") || (counrtyResult == false)) {
            var country_error = "Country cannot be blank and contain letters only.";
            displayError.textContent = country_error;
            document.getElementById("address_country").style.borderColor = "#fa755a";
        } else {
            var country_error = '';
            displayError.textContent = country_error;
            address_country.style.borderColor = "#bbbbbb";
        }
    }, true); //end name blur	
}

//validation function
validateForm();


//submit forms
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    //if valid
    var firstNameString = customer_first_name.value;
    var firstNameResult = lettersOnly.test(firstNameString); 

    var lastNameString = customer_last_name.value;
    var lastNameResult = lettersOnly.test(lastNameString);     

    var emailString = email.value;

    var addressString = address_line1.value;
    var addressResult = mixOnly.test(addressString);

    var cityString = address_city.value;
    var cityResult = lettersOnly.test(cityString);

    var stateString = address_state.value;
    var stateResult = lettersOnly.test(stateString); 

    var zipString = address_zip.value;
    var zipResult = zipOnly.test(zipString);

    var countryString = address_country.value;
    var counrtyResult = lettersOnly.test(countryString);
    
    if ((firstNameResult == true) && (firstNameString !== '') && (lastNameResult == true) && (lastNameString !== '') && (emailString !== '') && (addressResult == true) && (addressString !== '') && (cityResult == true) && (cityString !== '') && (stateResult == true) && (zipResult == true) && (counrtyResult == true)) {	
    
        var cardData = {
            'name': document.getElementById('customer_first_name').value + ' ' + document.getElementById('customer_last_name').value,
            'address_line1': document.getElementById('address_line1').value,
            'address_city': document.getElementById('address_city').value,
            'address_state': document.getElementById('address_state').value,
            'address_zip': document.getElementById('address_zip').value,
            'address_country': document.getElementById('address_country').value,
            'currency': 'usd'
        };
    
        stripe.createToken(card, cardData).then(function(result) {
            if (result.error) {
            // Inform the customer that there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
            }
        });   
    } else { //if validation fails do not submit
        event.preventDefault();
        return false;
    }
});  

//submit token form
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}
