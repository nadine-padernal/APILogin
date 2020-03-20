
<head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="410146654780-dfpjcnbrs7vpqkm62hs14l7bhtglj9gc.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
 </head><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="column" id="main">
          <h1>Sign Up </h1>
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          <form>
            <div class="form-group">
            <body>
                <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                <script>
                  function onSignIn(googleUser) {
                    // Useful data for your client-side scripts:
                    var profile = googleUser.getBasicProfile();
                    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                    console.log('Full Name: ' + profile.getName());
                    console.log('Given Name: ' + profile.getGivenName());
                    console.log('Family Name: ' + profile.getFamilyName());
                    console.log("Image URL: " + profile.getImageUrl());
                    console.log("Email: " + profile.getEmail());

                    // The ID token you need to pass to your backend:
                    var id_token = googleUser.getAuthResponse().id_token;
                    console.log("ID Token: " + id_token);
                  }
                </script>
              </body>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
        </div>
        <div>
          <?xml version="1.0" encoding="UTF-8"?>
          <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
              <title>Path</title>
              <desc>Created with Sketch.</desc>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#F9BC35"></path>
              </g>
          </svg>
        </div>
        <div class="column" id="secondary">
          <div class="sec-content">
            <h2>Welcome Back!</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{673026740130754}',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : '{api-version}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };

  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

</script>



<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</body>
</html>
<style>
body {
  display: flex;
  justify-content: center;
  margin-top: 200px;
  background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath opacity=".5" d="M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z"/%3E%3Cpath d="M6 5V0H5v5H0v1h5v94h1V6h94V5H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
}

.modal-body {
  display: flex;
  padding: 0;
  border-radius: 4rem;
  font-family: 'PT Sans', sans-serif;
}

.modal-content {
  border-radius: 4rem;
  width: 140%;
  -webkit-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
-moz-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
}
.modal-content h1, .modal-content h2, .modal-content h3 {
    text-align: center;
}
.modal-content h1 {
  font-size: 1.3em;
  text-transform: uppercase;
}

.modal-content h2 {
    font-size: 1.1em;
}
.modal-content h3 {
  font-size: .8em;
  letter-spacing: 2px;
}
form {
    font-size: .8em;
}
.column {
  flex: 50%;
  padding: 10px;
}

.column#main {
  flex: 75%;
  padding: 50px;
  margin-top: 30px;
  margin-left: 15px;
}

#secondary {
  background-color: #F9BC35;
  border-radius: 0 4rem 4rem 0;
  text-align: center;
}

#main .form-control {
  border-radius: 0;
  font-size: .9em;
}

.btn {
  text-transform: uppercase;
  border-radius: .15rem;
  width: 200px;
  padding: .150rem .75rem;
  margin: 30px auto;
  font-family: 'PT Sans', sans-serif;
  letter-spacing: 2px;
}

.btn-primary {
  border-color: rgba( 255, 255, 255, 0);
  background: #f1da36; /* Old browsers */
background: -moz-linear-gradient(left, #f1da36 0%, #fca86c 99%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #f1da36 0%,#fca86c 99%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #f1da36 0%,#fca86c 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1da36', endColorstr='#fca86c',GradientType=1 ); /* IE6-9 */
Color format:     Comments
}

.btn-primary:hover {
  border-color: rgba( 255, 255, 255, 0);
}

#main .btn-primary {
  width: 100%;
}
#secondary .btn-primary {
  background: #f8f9fa4f;
  color: #000;
}
.modal-body label {
  margin-bottom: 0;
}

.sec-content {
  margin-top: 85%;
}
</style>
