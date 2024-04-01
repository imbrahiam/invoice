<?php

require('../common/main.php');

class template
{
  public static $instance = null;

  public static function apply()
  {
    if (self::$instance == null) {
      self::$instance = new template();
    }
    return self::$instance;
  }

  function href($path)
  {
    return $path;
  }

  function __construct()
  {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>API</title>
      <link rel="stylesheet" href="../css/output.css">
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


      <?php
      if (!defined('CURRENT_PAGE')) {
        define('CURRENT_PAGE', '');
      }

      ?>
    </head>
    <div class="h-screen">

      <header class="relative bg-white">
        <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Software de la rubia en desarrollo</p>

        <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="border-b border-gray-200">
            <div class="flex h-16 items-center">

              <!-- Logo -->
              <div class="ml-4 flex lg:ml-0">
                <a href="../index.php">
                  <span class="sr-only">Your Company</span>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg" alt="">
                </a>
              </div>

              <!-- Flyout menus -->
              <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                <div class="flex h-full space-x-8">

                  <a href="<?= self::href("./stats.php"); ?>" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 <?= (CURRENT_PAGE == 'home') ? 'active' : '' ?>">Estadísticas</a>
                  <a href="<?= self::href("./invoices.php"); ?>" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 <?= (CURRENT_PAGE == 'invoices') ? 'active' : '' ?>">Facturas</a>

                </div>
              </div>

              <div class="ml-auto flex items-center">
                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                  <!-- <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Facturar</a> -->
                  <a href="./checkout.php"><button class="h-10 px-4 text-indigo-700 transition-colors duration-150 border border-indigo-500 rounded-full focus:shadow-outline hover:bg-indigo-500 hover:text-indigo-100">Nueva factura</button></a>
                  <a href="https://dgii.gov.do/herramientas/consultas/Paginas/rnc-Registrados.aspx" target="_blank" class="flex items-center text-gray-700 hover:text-gray-800">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_the_Dominican_Republic.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                    <span class="ml-3 block text-sm font-medium">DO</span>
                    <!-- <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span> -->

                    <!-- <span class="sr-only"></span> -->
                  </a>
                </div>

                <div class="hidden lg:ml-8 lg:flex">
                </div>

                <!-- Search -->
                <!-- <div class="flex lg:ml-6">
                  <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                  </a>
                </div> -->

                <!-- Cart -->
                <!-- <div class="ml-4 flow-root lg:ml-6">
                  <a href="#" class="group -m-2 flex items-center p-2">
                    <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                    <span class="sr-only">items in cart, view bag</span>
                  </a>
                </div> -->

                <!-- <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                  <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                  <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Salir</a>
                </div> -->

              </div>
            </div>
          </div>
        </nav>
      </header>

    <?php
  }

  function __destruct()
  {
    ?>
      <!-- </div> -->
    </div>
    </body>

    </html>
<?php
  }
}
?>