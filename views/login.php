<!DOCTYPE html>
<html>
    <!-- https://www.appelsiini.net/projects/slim-jwt-auth -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Organization Home</title> 
        <link rel="icon" href="/views/img/logo.jpg">
        <link rel="stylesheet" href="../foundation/css/foundation.css">
        <link rel="stylesheet" href="../foundation/css/app.css">
        <style type="text/css">
            .log-in-form {
                 border: 1px solid #cacaca;
                 padding: 1rem;
                 border-radius: 3px; 
                 min-width: 10vw;
                 margin: auto;
            }
            
        </style>
    </head>
    
    <body>
        
    <div id="main" class="row">
      <div class="medium-6 medium-centered large-4 large-centered columns">
    
        <form>
          <div class="row column log-in-form">
            <h4 class="text-center">Log in with you email account</h4>
            <label>Email
              <input type="text" placeholder="somebody@example.com">
            </label>
            <label>Password
              <input type="text" placeholder="Password">
            </label>
            <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
            <p><a type="submit" class="button expanded">Log In</a></p>
            <p class="text-center"><a href="#">Forgot your password?</a></p>   
          </div>
        </form>
    
      </div>
    </div>
    
    </body>
    
</html>