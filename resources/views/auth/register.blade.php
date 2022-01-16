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
         <link rel="stylesheet" type="text/css" href="{{  asset('custom/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
         <link href="{{  asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
         <!--//style sheet end here-->
         <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
         
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
                                <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" >
                             </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                              <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" >
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                              <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                              <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" >
                              
                           </div>
                           <div class="form-left-to-w3l">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                              <input type="password" name="password" placeholder="Password" >
                           </div>
                           <div class="w3layouts_more-buttn">
                           <h3>Do you have an account..?
                              <a href="{{ route('auth.login') }}">Sign in Here
                              </a>
                           </h3>
                           </div>
                           <div class="btnn">
                              <button type="submit">Sign Up</button>
                             
                           </div>
                        </form>
                        
                 
      
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
         <script type="text/javascript" src="{{  asset('custom/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
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