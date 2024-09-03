@extends('layout')
@section('title', 'About Us')
@section('content')
<div class="flex flex-col md:flex-row items-center justify-around min-h-screen px-6 md:px-36">


    <div class="text-center md:text-left text-sm md:w-1/2 md:text-md">
      <p><span class="font-bold text-xl">In a world</span> with growing demands of environmentally beningn power, 
        solar energy has the advantage of being low cost solar electricity for 
        grid connected application to day. Raimond Solar, An ISO 9001:2015 
        Certified and MSME, MNRE approved since from it's inception in year 
        2009, for more than 13 years has been a leading provider of solar 
        energy solutions in India and welcomes you to love solar too.For the last fifteen years, 
        we have completed a number of high-profile 
        Solar Projects and achieved great success. 
        As one of the leading Solar firms in West Bengal, 
        Raimond Solar has been at the forefront in execution of a wide array of Solar projects for individuals, 
        Governments and large corporations. The vision of “RAIMOND SOLAR” is to implement solar energy 
        system installations and energy efficiency activities to do it in a way, so 
        that customers get a good outcome and society as a whole gets a 
        positive impact sincerely.
      </p>
    </div>

    <div class="flex flex-row md:flex-col justify-center items-center
    md:space-y-12 space-x-4 md:space-x-0 w-1/2">
      <img class="w-36" src="{{asset('images/iso-new.png')}}" alt="iso logo">
      <img class="w-36"  src="{{asset('images/mnre.png')}}" alt="msme logo">
      <img  class="w-36" src="{{asset('images/msme.png')}}"  alt="mnre logo">
    </div>

  </div>
@endsection