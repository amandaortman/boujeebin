//Will validation work if header in another folder provides link to Semantic UI?

$('.ui')
  .form({
    on: 'blur',  //turns empty fields red
    fields: {
      fname: {
        identifier: 'fname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your first name'
          },
          {
            type   : 'regExp[^([a-zA-Z]\'*-* ?){1,20}$]',
            prompt : 'Please enter a valid first name'
          }
        ]
      },
      lname: {
        identifier: 'lname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your last name'
          },
          {
            type   : 'regExp[^([a-zA-Z]\'*-* ?){2,20}$]',
            prompt : 'Please enter a valid last name'
          }
        ]
      },
      uid: {
        identifier: 'uid',
        rules: [
          {
            type  : 'empty',
            prompt  : 'Please enter your username'
          },
          {
            type   : 'regExp[/^[a-z0-9_-]{4,16}$/]',
            prompt : 'Please enter a 4-16 letter username'
          }
        ]
      },
      pwd: {
        identifier: 'pwd',
        rules: [
          {
            type  : 'empty',
            prompt  : 'Please enter your password'
          },
          {
            type  : 'regExp[^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d])([^\s]){8,16}$]',
            prompt  : 'Password must contain 1 uppercase and lowercase letter, 1 number, and be 8-20 characters long.'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type  : 'empty',
            prompt  : 'Please enter your email'
          },
          {
            type  : 'email',
            prompt  : 'Please enter a valid email'
          }
        ]
      },
      terms: {
        identifier: 'terms',
        rules: [
          {
            type   : 'checked',
            prompt : 'You must agree to the terms and conditions'
          }
        ]
      }
    }  //end of fields
  });  //end of selection