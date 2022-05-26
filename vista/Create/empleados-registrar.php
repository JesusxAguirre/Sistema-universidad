<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <!-- Imagen universidad -->
    <link rel="Shortcut Icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/output.css">
    <!-- libreria Jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</head>

<body>
    <div class="flex flex-row">
        <!-- SIDEBAR -->
        <?php
        require_once 'componentes/sidebar.php';
        ?>
        <!-- FIN SIDEBAR -->

        <div class="flex-auto">
            <div class="flex flex-col">
                <div class="flex flex-col bg-white">
                    <div class="flex flex-row space-x-3">
                        <h4 class="font-bold text-gray-500 p-3">Plantilla</h4>

                    </div>
                    <p class="text-gray-400 p-1">4 de Abril del 2022 </p>
                </div>
                <div class="min-h-screen bg-blue-100">
                    <!-- Aqui Se acomdan todas las grid -->


                    <div class=" mt-5 p-4 ">
                        <div class="p-8 bg-white rounded shadow-sm">
                            <form class="" action="">
                                
                                    <label class="" for="">Nombre</label>
                                    <input class="border border-black p-2 " type="text" />

                                    <label class="" for="">Apellido</label>
                                    <input class=" border border-black p-2 " type="text">

                                    <label for="">Nombre</label>
                                    <input class="border border-black p-2 " type="text" />

                                    <label for="">Apellido</label>
                                    <input class="border border-black p-2 " type="text">

                                    <label for="">Nombre</label>
                                    <input class="border border-black p-2 " type="text" />

                                    <label for="">Apellido</label>
                                    <input class="border border-black p-2 " type="text">
                                    <button class="bg-blue-500 rounded-lg ml-10 text-black" type="submit ">Enviar</button>
                                   
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>