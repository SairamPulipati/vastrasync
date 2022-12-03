<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <link rel="icon" type="image/x-icon" href="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png">
  <title>Mens Wedding Studio</title>
</head>

<body>
    <section class="vh-100" style="background-color: #d19859;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    
                         <div class="mt-5"></div>
                    <img src="https://ssr.piniteinfosol.tk/saloon2/wp-content/uploads/2022/10/wedding__1_-removebg-preview-1.png"
                      alt="login form" class="img-fluid mx-auto d-block"  style="border-radius: 1rem 0 0 1rem;" />
                      <div class="my-2"></div>
                      <h4 class="ml-5" style="color:#af0000">Welcome to Wedding Studio</h4>
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="post" id="form" action="{{route('login')}}">
                        @csrf
                        <!--<div class="d-flex align-items-center mb-3 pb-1">-->
                        <!--  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>-->
                        <!--  <span class="h1 fw-bold mb-0">Logo</span>-->
                        <!--</div>-->
                        <h4 id="error_msg" class="my-2"></h4>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
      
                        <!--<a class="small text-muted" href="#!">Forgot password?</a>-->
                       
                       
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
          const email = document.getElementById('form2Example17');
          const password = document.getElementById('form2Example27');
          const ErrorElement = document.getElementById('error_msg')
          const form = document.getElementById('form');
          form.addEventListener('submit', (e) =>{
              let messages = [];
              if(email.value === '' || email.value === null ){
                  messages.push('email is required');
              }
              if(messages.length>0){
              e.preventDefault();
              ErrorElement.innerText = messages.join(', ');
              }    
          })
      </script>
</body>
</html>