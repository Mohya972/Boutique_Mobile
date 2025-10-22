<!-- Section Catégorie des Produits -->
<section class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-bold text-center mb-12 text-gray-800"> Nos Produits </h2>

    <!-- Categories -->
    <div class="flex flex-wrap justify-center gap-4 mb-12">
        <a href="#" class="px-6 py-2 bg-green-600 text-white rounded-full font-semibold hover:bg-green-700 transition">
                Tous
            </a>
        @forelse ($categories as $row_categories)
            <a href="#" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold hover:bg-blue-300 transition">
                {{$row_categories->name}}
            </a>
            
        @empty
            
        @endforelse
        
    </div>
</section>