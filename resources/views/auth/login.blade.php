<!DOCTYPE html>
   <html lang="en">
      <head>
         <title>SMS|Login </title>
         <!-- Meta tags -->
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         
            />
         {{-- <script>
            addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
         </script> --}}
         <!-- Meta tags -->
         <!--stylesheets-->
         <link href="{{  asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
         <!--//style sheet end here-->
         <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
      </head>
      <body>
         <div class="mid-class">
            <div class="art-right-w3ls">
               <h2>Sign in Here</h2>
               <form action="#" method="post" autocomplete="off">
                  <div class="main">
                     <div class="form-left-to-w3l">
                        <input type="text" name="name" placeholder="Username" required="">
                     </div>
                     <div class="form-left-to-w3l ">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="clear"></div>
                     </div>
                  </div>
                  <div class="left-side-forget">
                     <input type="checkbox" class="checked">
                     <span class="remenber-me">Remember me </span>
                  </div>
                  
                  <div class="clear"></div>
                  <div class="btnn">
                     <button type="submit">Sign In</button>
                  </div>
               </form>
               <div class="w3layouts_more-buttn">
                  <h3>Don't Have an account..?
                     <a href="{{ route('auth.register') }}">Sign Up Here
                     </a>
                  </h3>
               </div>
               
            </div>
            <div class="art-left-w3ls">
               <h1 class="header-w3ls">
                  SMS - Login Zone
               </h1>
            </div>
         </div>
      </body>
   </html>