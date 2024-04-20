<?php

# Brahiam Montero -> 2022-2034

require_once "../common/main.php";
// define('CURRENT_PAGE', 'home');
template::apply();

$bill = new Bill();

?>

<div class="flex mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-auto">
  <div class="flex w-full  ">
    <div class="w-full bg-white">
      <div class="overflow-y-auto px-4 py-6 sm:px-6">
        <form id="new-product-form" action="" method="">
          <div class="flex items-center justify-start">
            <div class="max-w-sm  p-6 bg-white border border-gray-200 rounded-lg shadow">
              <div>
                <label for="name_input" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                <input type="text" id="name_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Empanada" required />
              </div>
              <br>
              <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900">Cantidad:</label>
              <input type="number" id="quantity-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="1" min=1 required />
              <br>
              <label for="price-input" class="block mb-2 text-sm font-medium text-gray-900">Precio:</label>
              <input type="number" id="price-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" min=0 placeholder="50.00" required />
              <br>
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar cambios</button>
            </div>
        </form>
        <div id="products" class="ml-10">
          <br>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
              <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
                Lista de productos
              </caption>
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Cantidad
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Precio
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody id="products-list">
                <!--<td class="px-6 py-4 text-right"><a href="#" class="font-medium text-blue-600 hover:underline">Editar</a></td>-->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="print" class="w-1/2" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <br>
  <div class="pointer-events-auto w-screen max-w-md ml-auto">
    <div class="flex h-full flex-col bg-white shadow-xl rounded-md">
      <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6 ">
        <div class="flex items-start justify-between ">
          <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Facturación #
            <code id="billHash">
              <?= $bill->id; ?>
            </code>
          </h2>
        </div>
        <br>
        <div class="flex ">
          <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-lg">
            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
            </svg>
          </span>
          <input type="number" id="clientid-input" aria-describedby="helper-text-explanation" class="pd-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-half p-2.5  " placeholder="matricula">
          <input type="text" id="client-name" class="rounded-lg rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-half text-sm border-gray-300 p-2.5  " placeholder="Nombre" value="">
        </div>
        <br>
        <div class="flex justify-between text-base font-medium text-gray-900">
          <p>Items</p>
        </div>
        <div class="mt-4">
          <div class="flow-root">
            <ul id="items-list" role="list" class="-my-6 divide-y divide-gray-200"></ul>
          </div>
        </div>
        <br>
        <div class="flex justify-between text-base font-medium text-gray-900">
          <p>Subtotal</p>
          <p>$<span id="items-subtotal">0.00</span> DOP</p>
        </div>
        <p class="mt-0.5 text-sm text-gray-500">Impuestos no incluidos.</p>
        <br>
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Nota de venta</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe tu comentario..."></textarea>
      </div>

      <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
        <div class="">
          <a id="printBtn" href="" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Imprimir</a>
        </div>
        <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
          <p>
            <a href="checkout.php">
              <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                Cancelar factura
              </button>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>