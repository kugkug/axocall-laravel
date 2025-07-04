 @include('partials.unauth.header')

 <div class="login-form-bg h-100">
  <div class="container h-100">
      <div class="row justify-content-center h-100">
          <div class="col-xl-6">
              <div class="form-input-content">
                  <div class="card login-form mb-0">
                      <div class="card-body pt-5">
                          <a class="text-center" href="index.html"> <h4>Rosella</h4></a>
  
                          <form class="mt-5 mb-5 login-input">
                              <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Password">
                              </div>
                              <button class="btn login-form__btn submit w-100">Sign In</button>
                          </form>
                          <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
