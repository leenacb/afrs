@extends('layout')
@section('content')
<h1 class="text-center">Registration</h1>

   <form action="login" method="get"class=" border border-primary  " >
   <div class="result">
     @if(Session::get('success'))
     <div class="alert alert-success">
        {{Session::get('success')}}
      </div>  
     @endif

     @if(Session::get('fail'))
     <div class="alert alert-success">
        {{Session::get('fail')}}
        </div>
     @endif
           <div class="form-group p-2">
           @csrf
           <label for="exampleFormControlInput1">FirstName</label>
            <input type="text"  class="form-control form-control-file" name="fname" id="exampleFormControlFile1"  value="{{old('name')}}" >
            <span class="error text-danger">
            @error('name'){{$message}}@enderror
            </span>
           </div>

            <div class="form-group p-2">
            <label for="exampleFormControlInput1">LastName</label>
               <input type="text"  class="form-control form-control-file" name="lname" id="exampleFormControlFile1"  value="{{old('name')}}" >
               <span class="error text-danger">
               @error('name'){{$message}}@enderror
               </span>
            </div>
                  
                        <div class="form-group p-2">
                     <label for="exampleFormControlInput1">DateOfBirth</label>
                        <input type="date"  class="form-control form-control-file" name="dob" id="exampleFormControlFile1"  value="{{old('name')}}" >
                        <span class="error text-danger">
                        @error('name'){{$message}}@enderror
                        </span>
                     </div>
     
                     <div class="form-group p-2">
                <label for="exampleFormControlInput1">PhoneNumber</label>
                <input type="text" name="phno"   class="form-control form-control-file" id="exampleFormControlFile1"   value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>

                <div class="form-group p-2">
                <label for="exampleFormControlInput1">Email </label>
                <input type="email" name="email"   class="form-control form-control-file" id="exampleFormControlFile1"   value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div>



          <div class="form-group p-2">
          <label for="exampleFormControlInput1">Password</label>
            <input type="password" name="password"   class="form-control form-control-file" id="exampleFormControlFile1"   value="{{old('password')}}">
            <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
           </div>
                          
           <div class="form-group p-2">
          <label for="exampleFormControlInput1">ConfirmPassword</label>
            <input type="password" name="password"   class="form-control form-control-file" id="exampleFormControlFile1"   value="{{old('password')}}">
            <span class="error text-danger">
            @error('password'){{$message}}@enderror
            </span>
           </div>
                    
            <div class="form-group p-2">
            <button type="submit" class="btn btn-primary mb-2">Submit <a href="login"></a></button>
            <button type="submit" class="btn btn-info mb-2">Login</button>
                        </div> 
    </div>                    
   </form> 
   @endsection('content')