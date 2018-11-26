$('.ui')
  .form({
    on: 'blur',  //turns empty fields red
    inline: true,
    fields: {
      fname: {
        identifier: 'fname',
        rules: [
          {
            type   : 'regExp[/^([a-zA-Z]\'*-*.* ?){1,20}$/]',
            prompt : 'Please enter a valid first name'
          }
        ]
      },
      lname: {
        identifier: 'lname',
        rules: [
          {
            type   : 'regExp[/^([a-zA-Z]\'*-*.* ?){2,20}$/]',
            prompt : 'Please enter a valid last name'
          }
        ]
      },
      uid: {
        identifier: 'uid',
        rules: [
          {
            type   : 'regExp[/^[A-Za-z0-9_-]{4,16}$/]',
            prompt : 'Please enter a 4-16 letter username'
          }
        ]
      },
      pwd: {
        identifier: 'pwd',
        rules: [
          {
            //type  : 'regExp[/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d])([^\s]){8,20}$/]',
            type: 'regExp',
            value: /^(?=.*(\d|[^\w]))(?=.*\w)([^\s]){8,20}$/,
            prompt  : 'Password must contain 1 number or non-alphanumeric character and be 8-20 characters long.'
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