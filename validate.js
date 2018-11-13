$('.ui')
  .form({
    on: 'blur',  //turns empty fields red
    inline: true,
    fields: {
      fname: {
        identifier: 'fname',
        rules: [
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
            type   : 'regExp[^([a-zA-Z]\'*-* ?){2,20}$]',
            prompt : 'Please enter a valid last name'
          }
        ]
      },
      uid: {
        identifier: 'uid',
        rules: [
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
            type  : 'regExp[^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d])([^\s]){8,16}$]',
            prompt  : 'Password must contain 1 uppercase and lowercase letter, 1 number, and be 8-20 characters long.'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
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