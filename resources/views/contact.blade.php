@extends('layout')
@section('title', 'Contact Us')
@section('content')
<section class="text-gray-600 min-h-screen body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end 
    justify-start relative z-1">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" 
      marginheight="0" marginwidth="0" scrolling="no" 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.6687636324673!2d88.43232537609417!3d22.441489737761515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273ce1834669f%3A0xf20bae386b622fe5!2sSusangini%20Apartment!5e0!3m2!1sen!2sin!4v1680923768213!5m2!1sen!2sin" 
      style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative z-1 flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">267, Susangini Apartment, A.P. nagar, Sonarpur,South 24 Parganas, Kolkata-700150</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-purple-500 leading-relaxed">raimondsolar83@gmail.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">9073249403 / 9073059780</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact Us</h2>
      <form action="https://formsubmit.co/raimondsolar83@gmail.com" method="post">
      <input type="hidden" name="_subject" value="Customer Enquiry">
      <input type="text" name="_honey" style="display:none">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_next" value="http://raimondsolar.in">
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" required class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" required class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" required class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button type="submit" class="text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Button</button>
      </form>
    </div>
  </div>
</section>
@endsection