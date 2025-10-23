@extends('layouts.app')
@section('content')

        <!-- Grille de Produits -->
        <!-- Mobiles 1/rangée, Tablettes 2/rangée, Ordinateurs 4/rangée --> 

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse ($products as $product)
                        <x-card-product :product="$product"/> 
                @empty
                        Bientôt les nouveautés !
                @endforelse
                
        </div>

        Page d'accueil
@endsection

