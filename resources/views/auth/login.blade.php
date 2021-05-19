@extends('layouts.auth-front-end')
        @section('content')
        <center>

            <div class="container">

                <div class="loginCard">


                    {{-- <div class="col-md-12"> --}}

                        <div class="ui" style="margin-top: 300px">
                
                             
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf

                                <header>Log In Account</header>
                    
                                <!-- Email Address -->
                                <div>
                    
                                    <x-input  class="myInput shadow-lg p-3 mb" type="email" name="email" :value="old('email')" placeholder="Email" required/>
                                </div>
                    
                                <!-- Password -->
                                {{-- <div class="mt-4"> --}}
                                    <br><br>
                    
                                    <x-input placeholder="Password" id="password" class="myInput shadow-lg p-3 mb"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                {{-- </div> --}}
                    
                                <!-- Remember Me -->
                                <div class=" mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                    
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                    
                                    <input type="submit" class="btn" value="CREATE ACCOUNT">
                                </div>
                            </form>
                
                           
                        </div>

                    {{-- </div> --}}
                   
                </div>

            </div>
            
        </center>
        
        @endsection

