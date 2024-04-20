<?php

class Bill
{
    public $id = null;
    public $date = null;
    public $client_code = null;
    public $client_name = null;
    public $articles = array();
    public $total = null;
    public $comment = null;

    public function __construct()
    {
        $this->date = date("Y-m-d H:i:s");
        $this->id = sha1(getGUID());
    }
}

class Article
{
    public $name = null;
    public $quantity = null;
    public $price = null;
    public $_billId = null;

    public function __construct($_name, $_quantity, $_price, $_billId)
    {
    }
}

class Template
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

                                    <!--
                                    <a href="<?= self::href("./stats.php"); ?>" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 <?= (CURRENT_PAGE == 'home') ? 'active' : '' ?>">Estadísticas</a>
                                    <a href="<?= self::href("./invoices.php"); ?>" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 <?= (CURRENT_PAGE == 'invoices') ? 'active' : '' ?>">Facturas</a>
-->
                                </div>
                            </div>

                            <div class="ml-auto flex items-center">
                                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                    <a href="./checkout.php"><button class="h-10 px-4 text-indigo-700 transition-colors duration-150 border border-indigo-500 rounded-full focus:shadow-outline hover:bg-indigo-500 hover:text-indigo-100">Nueva factura</button></a>
                                    <a href="https://dgii.gov.do/herramientas/consultas/Paginas/rnc-Registrados.aspx" target="_blank" class="flex items-center text-gray-700 hover:text-gray-800">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_the_Dominican_Republic.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                                        <span class="ml-3 block text-sm font-medium">DO</span>
                                    </a>
                                </div>
                                <div class="hidden lg:ml-8 lg:flex">
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div>

            <?php
        }

        function __destruct()
        {
            ?>
                <!-- </div> -->
            </div>

            <script src="../common/index.js"></script>
            </body>

        </html>
<?php
        }
    }
?>