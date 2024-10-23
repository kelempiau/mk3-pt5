<html>
 <head>
  <title>
   Bootslander
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
 </head>
 <body class="bg-blue-900 text-white">
  <div class="container mx-auto p-4" id="app">
   <nav class="flex justify-between items-center py-4">
    <div class="text-2xl font-bold">
     Bootslander
    </div>
    <ul class="flex space-x-6">
     <li>
      <a class="text-white" href="#">
       Home
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       About
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Features
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Works
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Team
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Pricing
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Drop Down
      </a>
     </li>
     <li>
      <a class="text-white" href="#">
       Contact
      </a>
     </li>
    </ul>
   </nav>
   <div class="flex flex-col md:flex-row items-center mt-10">
    <div class="md:w-1/2">
     <h1 class="text-4xl md:text-5xl font-bold mb-4">
      Build Your Landing Page With Bootslander
     </h1>
     <p class="text-lg mb-6">
      We are team of talented designers making websites with Bootstrap
     </p>
     <button class="bg-green-500 text-white px-6 py-3 rounded-full">
      Get Started
     </button>
    </div>
    <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
     <img alt="Illustration of a car with trees and a person holding a phone" class="w-1/2" height="400" src="https://storage.googleapis.com/a1aa/image/tnXEsAH7Gr6GN5YVqaWieGDzJEdx1UgMEJ1i4WEkPxVIKx0JA.jpg" width="200"/>
     <img alt="Illustration of a person with a map and a location pin" class="w-1/2 ml-4" height="400" src="https://storage.googleapis.com/a1aa/image/dft4fskYkqgcIUuEeq3baZ0dJeTQWNMYbkJ5MZQ3OfH8hSMdC.jpg" width="200"/>
    </div>
   </div>
  </div>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js">
  </script>
  <script>
   const { createApp, ref } = Vue
    createApp({
      setup() {
        const message = ref('Hello vue!')
        return {
          message
        }
      }
    }).mount('#app')
  </script>
 </body>
</html>
