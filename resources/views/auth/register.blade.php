 @extends('layouts.auth')
 @section('content')
     <div class="container-xxl">
         <div class="authentication-wrapper authentication-basic container-p-y">
             <div class="authentication-inner">
                 <!-- Register Card -->
                 <div class="card">
                     <div class="card-body">
                         <form class="mb-3" method="POST" action="{{ route('register') }}">
                             @csrf
                             <div class="mb-3">
                                 <label for="username" class="form-label">Name</label>
                                 <input type="text" class="form-control" id="name" type="text" name="name"
                                     :value="old('name')" autofocus placeholder="Enter your name" />
                                 <x-input-error :messages="$errors->get('name')" class="mt-2" />
                             </div>
                             <div class="mb-3">
                                 <label for="email" class="form-label">Email</label>
                                 <input class="form-control" id="email" type="email" name="email"
                                     :value="old('email')" placeholder="Enter your email" />
                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
                             </div>
                             <div class="mb-3">
                                 <label for="email" class="form-label">Phone Number</label>
                                 <input type="text" class="form-control" id="phone" name="phone"
                                     placeholder="Enter your phone number" />
                             </div>
                             <div class="mb-3 form-password-toggle">
                                 <label class="form-label" for="password">Password</label>
                                 <div class="input-group input-group-merge">
                                     <input id="password" class="form-control" type="password" name="password" required
                                         autocomplete="new-password" placeholder="Enter your password" />
                                     <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                             </div>
                             <div class="mb-3 form-password-toggle">
                                 <label class="form-label" for="password">Confirm Password</label>
                                 <div class="input-group input-group-merge">
                                     <input id="password_confirmation" class="form-control" type="password"
                                         name="password_confirmation" placeholder="Confirm your password" />
                                     <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                     <label class="form-check-label" for="terms-conditions">
                                         I agree to
                                         <a href="javascript:void(0);">privacy policy & terms</a>
                                     </label>
                                 </div>
                             </div>
                             <button class="btn btn-primary d-grid w-100">Sign up</button>
                         </form>

                         <p class="text-center">
                             <span>Already have an account?</span>
                             <a href="{{ url('login') }}">
                                 <span>Sign in instead</span>
                             </a>
                         </p>
                     </div>
                 </div>
                 <!-- Register Card -->
             </div>
         </div>
     </div>
 @endsection
