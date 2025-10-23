@extends('layouts.app')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone X100 - Détails du produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- En-tête -->
    <header class="bg-green-600 text-white py-6 text-center">
        <h1 class="text-3xl font-bold">Smartphone X100</h1>
        <p class="text-lg">La puissance et l'élégance réunies</p>
    </header>

    <!-- Contenu principal -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row">
            <!-- Section des images -->
            <div class="md:w-1/2 p-6">
                <img src="{{$product->image}}" alt="Smartphone X100" class="w-full h-auto rounded-lg">
                
            </div>

            <!-- Section des détails -->
            <div class="md:w-1/2 p-6">
                <h2 class="text-2xl font-bold mb-4">Smartphone X100</h2>
                <p class="text-gray-700 mb-6">
                    Le Smartphone X100 allie performance et design pour répondre à tous vos besoins. Avec son écran AMOLED de 6,5 pouces, son processeur ultra-rapide et sa batterie longue durée, il est parfait pour le travail et les loisirs.
                </p>
                <p class="text-3xl font-bold text-blue-600 mb-6">899,99 €</p>

                <!-- Spécifications techniques -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3">Spécifications techniques</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Écran : 6,5 pouces AMOLED</li>
                        <li>Processeur : Octa-core 2.8 GHz</li>
                        <li>RAM : 8 Go</li>
                        <li>Stockage : 128 Go (extensible)</li>
                        <li>Caméra : Triple capteur 48 MP + 12 MP + 8 MP</li>
                        <li>Batterie : 5000 mAh</li>
                        <li>Système d'exploitation : Android 13</li>
                    </ul>
                </div>

                <!-- Boutons d'action -->