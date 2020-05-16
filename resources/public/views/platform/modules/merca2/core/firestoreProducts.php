<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/merca2/conf.php');
require_once(CONTROLLERS_PATH.'productController.php');
require_once(DATABASE_PATH.'ConnectionFirebase.php');
require_once(VENDOR_PATH.'autoload.php');         

    function addProducts(){
        $dbConnect = initialize();

        $docRef = $dbConnect->collection('Products')->document('40001');
        $docRef->set([
            'active' => 'true',
            'createTime' => "1580875357372",
            'description' => 'prueba_producto2',
            'img' => "https://firebasestorage.googleapis.com/v0/b/sarpcolombia-3c64c.appspot.com/o/image%2FProducts%2F03HFzO9Og7aNy78VUPpH.jpeg?alt=media&token=5e97e2b2-4510-4484-a79f-2ac1568fe11b",
            'iva' => "0",
            'name' => 'prueba producto2',
            'price' => '1000',
            'section' => [
                'id' => "Gck5gidbTSN484DobgmK",
                'subSection' => 4
            ],
            'updateTime' => 15808756535263,
            'weight' => "90gr"
        ]);

        printf('producto añadido correctamente.' . PHP_EOL);
    }

    function readData(){
        $dbConnect = initialize();

        $productsRef = $dbConnect->collection('Products');
        $snapshot = $productsRef->documents();
        foreach ($snapshot as $products) {
           
            var_dump($products);
            die();
           printf(PHP_EOL);
        }
        printf('Retrieved and printed out all documents from the users collection.' . PHP_EOL);
    } 

    readData();
?> 