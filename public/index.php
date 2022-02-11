<?php
require_once "../bootstrap.php";

echo '<pre>';
print_r(mysqli_connect('db_api','chip','ZF8WaFhf', 'api'));
echo '</pre>';

$id =1;// $argv[1];
$author = $entityManager->find('Author', $id);

if ($author === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $author->getFirstName());

$productRepository = $entityManager->getRepository('Url');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getHeadline());
}

$imageRepository = $entityManager->getRepository('Image');
$images= $imageRepository->findAll();

foreach ($images as $image) {
    $imageUrl= sprintf("-%s\n", $image->getUrl());
}
