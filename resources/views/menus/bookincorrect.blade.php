<!---
/****
*@booking
*@Leena CB
*@date
*@12/03/2021
******/
---->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking') }}  <div>{{ Auth::user()->id }}</div>
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/style.css')}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                <div class="container ">
   <form action="bookdata" class="form-inline " method="get"class=" border border-primary" >
            @csrf
     <div class="container">
        <div class="card">
           <div class=" text-center card-body">
                   
          
           <div class="form-group p-2">
                <label for="exampleInputEmail1"> FlightNumber</label>
                <input type="text" name="flno"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{ $user->fno }}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>

                <div class="form-group p-2">
                <label for="exampleInputEmail1">FlightName</label>
                <input type="text" name="flname"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->fname}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>
                          
                <input type="hidden" name="fid" value="{{$user->fid}}">
                <input type="hidden" name="deptime" value="{{$user->deptime}}">
                <input type="hidden" name="departure" value="{{$user->departure}}">
                <input type="hidden" name="arrival" value="{{$user->arrival}}">

                <div class="form-group p-2">
                <label for="exampleInputEmail1">Date of Travel</label>
                <input type="text" name="date"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{$user->depdate}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>

                <div class="form-group p-2">
                <label for="exampleInputEmail1">Name of Passenger</label>
                <input type="text" name="pname"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{Auth::user()->name}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>



                <div class="form-group p-2">
                <div class="form-check">
                <label> Gender</label>
                <input class="form-check-input"type="radio"name="gender"id="flexRadioDefault1" value="female" >
                 <label class="form-check-label" for="flexRadioDefault1"> female</label>                 
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                
                <input class="form-check-input" type="radio" name="gender" id="male" vaue="male">
                <label class="form-check-label" for="male">male </label>
                   </div>
                   </div></br>
                   <div class="form-group p-2">
                   <div class="form-group p-2">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" name="age"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>
                <label for="exampleInputEmail1">Class</label>
                <select name="class">
                <option value="bussiness">bussiness</option>
                <option value="economic">economic</option>
                <option value="first">first</option>
                </select>
                </div></br>
               

                 
                <div class="form-group p-2">
                <label for="exampleInputEmail1">TotalAmount</label>
                <input type="text" name="age"   class="form-control form-control-file" id="exampleFormControlFile1" value="{{old('email')}}">
                <span class="error text-danger">
                @error('email'){{$message}}@enderror
                </span>
                </div></br>


               
               </div>
       </div> 
</div>
<input type="submit" name="book" value="Book">
           
   </form> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
