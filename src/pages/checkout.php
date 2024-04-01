<?php

# Brahiam Montero -> 2022-2034

require("../common/template.php");
// define('CURRENT_PAGE', 'home');
template::apply();

?>

<body>
 <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-auto">
  <div class="flex w-full">

   <div class="w-1/2 bg-white">
    <div class="overflow-y-auto px-4 py-6 sm:px-6">

     <div class="flex items-start justify-between">
      <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Productos</h2>
     </div>

     <div class="flex flex-wrap items-center justify-start">
      <div class="mt-6 mr-6 mb-6 relative overflow-hidden bg-indigo-700 rounded-xl max-w-xs shadow-lg group ">
       <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform" viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
       </svg>
       <div class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
        </div>
        <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
       </div>
       <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block opacity-75 -mb-1">Indoor</span>
        <div class="flex justify-between">
         <span class="block font-semibold text-xl">Peace Lily</span>
         <span class="block bg-white rounded-full text-indigo-700 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
        </div>
       </div>
      </div>

      <div class="flex flex-wrap items-center justify-start">
       <div class="mt-6 mr-6 mb-6 relative overflow-hidden bg-indigo-700 rounded-xl max-w-xs shadow-lg group ">
        <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform" viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
         <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
         <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
         <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
         </div>
         <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
         <span class="block opacity-75 -mb-1">Indoor</span>
         <div class="flex justify-between">
          <span class="block font-semibold text-xl">Peace Lily</span>
          <span class="block bg-white rounded-full text-indigo-700 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
         </div>
        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
   <div class="w-1/2 z-10 m-4" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">

    <div class="pointer-events-auto w-screen max-w-md ml-auto">
     <div class="flex h-full flex-col bg-white shadow-xl rounded-md">
      <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
       <div class="flex items-start justify-between">
        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Facturación <code>#99800b8</code></h2>
       </div>
       <div class="mt-8">
        <div class="flow-root">
         <ul role="list" class="-my-6 divide-y divide-gray-200">
          <li class="flex py-6">
           <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
           </div>
           <div class="ml-4 flex flex-1 flex-col">
            <div>
             <div class="flex justify-between text-base font-medium text-gray-900">
              <h3>
               <a href="#">Throwback Hip Bag</a>
              </h3>
              <p class="ml-4">$90.00</p>
             </div>
             <p class="mt-1 text-sm text-gray-500">$45.00</p>
            </div>
            <div class="flex flex-1 items-end justify-between text-sm">
             <div class="flex items-center ">
              <button class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
               <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
               </svg>
              </button>
              <p class="text-gray-500 mr-2">Qty 2</p>

              <button class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
               <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
               </svg>
              </button>
             </div>
             <div class="flex">
              <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remover</button>
             </div>
            </div>
           </div>
          </li>
          <li class="flex py-6">
           <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
           </div>

           <div class="ml-4 flex flex-1 flex-col">
            <div>
             <div class="flex justify-between text-base font-medium text-gray-900">
              <h3>
               <a href="#">Medium Stuff Satchel</a>
              </h3>
              <p class="ml-4">$32.00</p>
             </div>
             <p class="mt-1 text-sm text-gray-500">$32.00</p>

            </div>
            <div class="flex flex-1 items-end justify-between text-sm">
             <div class="flex items-center ">
              <button class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
               <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
               </svg>
              </button>
              <p class="text-gray-500 mr-2">Qty 1</p>

              <button class="inline-flex items-center justify-center w-7 h-7 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-full focus:shadow-outline hover:bg-indigo-800">
               <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
               </svg>
              </button>
             </div>
             <div class="flex">
              <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remover</button>
             </div>
            </div>

           </div>
          </li>

          <!-- More products... -->
         </ul>
        </div>
       </div>
      </div>

      <div class="border-t border-gray-200 px-4 py-6 sm:px-6">

       <div class="flex justify-between text-base font-medium text-gray-900">
        <p>Subtotal</p>
        <p>$262.00</p>
       </div>
       <p class="mt-0.5 text-sm text-gray-500">Impuestos no incluidos.</p>
       <br>
       <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Nota de venta</label>
       <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe tu comentario..."></textarea>

       <div class="mt-6">

        <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Imprimir</a>
       </div>
       <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
        <p>
         <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
          Cancelar factura
         </button>
        </p>
       </div>
      </div>

     </div>
    </div>
   </div>
  </div>
 </div>
</body>

</html>