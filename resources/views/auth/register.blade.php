   <!DOCTYPE html>
   <html lang="en">
      <head>
         <title>SMS|Signup </title>
         <!-- Meta tags -->
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         
            
         {{-- <script>
            addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
         </script> --}}
         <!-- Meta tags -->
         <!--stylesheets-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link href="{{  asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
         <!--//style sheet end here-->
         <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>
      <body>
         <div class="mid-class">
            <div class="art-right-w3ls">
            
    
                     <!--login form-->
                     <div class="letter-w3ls">
                        <form action="{{ route('auth.save') }}" method="post" autocomplete="off">
                            @if (Session::get('success'))
                            <div class="alert alert-success" id="alert">
                                {{ session::get('success') }}
                            </div>
                            @endif

                            @if (session::get('failed'))
                            <div class="alert alert-danger" id="alert">
                                {{ session::get('failed') }}
                            </div>
                            @endif

                            @csrf
                            <div class="form-left-to-w3l">
                                <span class="text-danger">@error('full_name'){{ $message }}@enderror</span>
                                <input type="text" name="full_name" placeholder="Full Name" >
                             </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                              <input type="text" name="username" placeholder="Username" >
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                              <input type="text" name="phone" placeholder="Phone" >
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                              <input type="email" name="email" placeholder="Email" >
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                              <input type="password" name="password" placeholder="Password" >
                           </div>
                          
                           <div class="btnn">
                              <button type="submit">Sign Up</button>
                             
                           </div>
                        </form>
                        <div class="w3layouts_more-buttn">
                  <h3>Do you have an account..?
                     <a href="{{ route('auth.login') }}">Sign in Here
                     </a>
                  </h3>
               </div>
                        {{-- <div class="clear"></div> --}}
                     </div>
                     <!--//login form-->
                     
               
            </div>
            <div class="art-left-w3ls">
               <h1 class="header-w3ls">
                  SMS - Registration zone
               </h1>
            </div>
         </div>

         <script type="text/javascript" src="{{  asset('custom/bower_components/jquery/dist/jquery.min.js') }}"></script>
         <script type="text/javascript">
            $("document").ready(function(){
              setTimeout(function(){
                $("div.alert").remove();
            }, 3000);
          });
          </script>
      </body>
   </html>