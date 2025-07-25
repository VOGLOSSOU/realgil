<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits - GilTech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                        accent: '#06b6d4',
                        dark: '#0f172a',
                        'dark-light': '#1e293b'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'scale-in': 'scaleIn 0.5s ease-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .dark .glass {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-dark text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="index.php" class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                        <i class="fas fa-microchip text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold gradient-text">GilTech</span>
                </a>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="hover:text-primary transition-colors">Accueil</a>
                    <a href="produits.php" class="text-primary font-semibold">Produits</a>
                    <a href="formations.php" class="hover:text-primary transition-colors">Formations</a>
                    <a href="about.php" class="hover:text-primary transition-colors">À propos</a>
                    <button id="themeToggle" class="p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                </div>
                
                <button id="mobileMenuBtn" class="md:hidden">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Menu mobile -->
        <div id="mobileMenu" class="hidden md:hidden glass">
            <div class="px-6 py-4 space-y-4">
                <a href="index.php" class="block hover:text-primary transition-colors">Accueil</a>
                <a href="produits.php" class="block text-primary font-semibold">Produits</a>
                <a href="formations.php" class="block hover:text-primary transition-colors">Formations</a>
                <a href="about.php" class="block hover:text-primary transition-colors">À propos</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 bg-gradient-to-br from-primary/10 to-secondary/10 dark:from-primary/5 dark:to-secondary/5">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto animate-fade-in">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Nos Produits</span><br>
                    <span class="text-gray-800 dark:text-white">Électroniques</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                    Découvrez notre large gamme de produits électroniques de haute qualité, sélectionnés avec soin pour répondre à tous vos besoins technologiques.
                </p>
            </div>
        </div>
    </section>

    <!-- Filtres et Recherche -->
    <section class="py-8 bg-white dark:bg-dark-light sticky top-20 z-40 border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <!-- Barre de recherche -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Rechercher un produit..." 
                               class="w-full px-4 py-3 pl-12 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark dark:text-white">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                
                <!-- Filtres -->
                <div class="flex flex-wrap gap-4 items-center">
                    <div class="relative">
                        <select id="categoryFilter" class="px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark dark:text-white appearance-none pr-10">
                            <option value="">Toutes les catégories</option>
                            <option value="smartphones">Smartphones</option>
                            <option value="ordinateurs">Ordinateurs</option>
                            <option value="arduino-iot">Arduino & IoT</option>
                            <option value="accessoires">Accessoires</option>
                            <option value="audio-video">Audio & Vidéo</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                    </div>
                    
                    <div class="relative">
                        <select id="sortFilter" class="px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark dark:text-white appearance-none pr-10">
                            <option value="newest">Plus récents</option>
                            <option value="price-low">Prix croissant</option>
                            <option value="price-high">Prix décroissant</option>
                            <option value="name">Nom A-Z</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                    </div>
                    
                    <button id="clearFilters" class="px-4 py-3 text-primary hover:bg-primary hover:text-white border border-primary rounded-lg transition-colors">
                        <i class="fas fa-times mr-2"></i>Effacer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Produits -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <!-- Résultats et filtres actifs -->
            <div class="mb-8">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <p class="text-gray-600 dark:text-gray-300">
                            <span id="resultsCount">12</span> produits trouvés
                        </p>
                        <div id="activeFilters" class="flex flex-wrap gap-2 mt-2"></div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-500">Affichage:</span>
                        <button id="gridView" class="p-2 rounded-lg bg-primary text-white">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button id="listView" class="p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Grille des produits -->
            <div id="productsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Les produits seront chargés ici via JavaScript -->
            </div>
            
            <!-- Message si aucun produit -->
            <div id="noProducts" class="hidden text-center py-16">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-search text-6xl text-gray-300 dark:text-gray-600 mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Aucun produit trouvé</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Essayez de modifier vos critères de recherche ou de navigation.
                    </p>
                    <button onclick="clearAllFilters()" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                        Voir tous les produits
                    </button>
                </div>
            </div>
            
            <!-- Pagination -->
            <div id="pagination" class="flex justify-center mt-12">
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors disabled:opacity-50">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">2</button>
                    <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">3</button>
                    <button class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-microchip text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold gradient-text">GilTech</span>
                    </div>
                    <p class="text-gray-300">
                        Votre partenaire technologique de confiance pour tous vos besoins en électronique et formation.
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-gray-300 hover:text-primary transition-colors">Accueil</a></li>
                        <li><a href="produits.php" class="text-gray-300 hover:text-primary transition-colors">Produits</a></li>
                        <li><a href="formations.php" class="text-gray-300 hover:text-primary transition-colors">Formations</a></li>
                        <li><a href="about.php" class="text-gray-300 hover:text-primary transition-colors">À propos</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Catégories</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-primary transition-colors">Smartphones</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Ordinateurs</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Arduino & IoT</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Accessoires</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><i class="fas fa-envelope mr-2"></i> contact@giltech.com</li>
                        <li><i class="fas fa-phone mr-2"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Avenue de la Technologie, Paris</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-gray-300">
                <p>&copy; 2024 GilTech. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Données fictives des produits
        const allProducts = [
            {
                id: 1,
                name: "iPhone 15 Pro",
                description: "Le dernier iPhone avec processeur A17 Pro et caméra avancée",
                price: 1299.99,
                image: "https://images.unsplash.com/photo-1592286499134-b5b2b0c9e8a8?w=500",
                category: "smartphones",
                categoryName: "Smartphones",
                whatsapp: "+33123456789",
                stock: 15,
                featured: true
            },
            {
                id: 2,
                name: "MacBook Air M3",
                description: "Ordinateur portable ultra-fin avec puce M3",
                price: 1399.99,
                image: "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500",
                category: "ordinateurs",
                categoryName: "Ordinateurs",
                whatsapp: "+33123456790",
                stock: 8,
                featured: true
            },
            {
                id: 3,
                name: "Arduino Uno R4",
                description: "Carte de développement Arduino dernière génération",
                price: 29.99,
                image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500",
                category: "arduino-iot",
                categoryName: "Arduino & IoT",
                whatsapp: "+33123456791",
                stock: 50,
                featured: false
            },
            {
                id: 4,
                name: "Samsung Galaxy S24",
                description: "Smartphone Android haut de gamme",
                price: 899.99,
                image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500",
                category: "smartphones",
                categoryName: "Smartphones",
                whatsapp: "+33123456792",
                stock: 12,
                featured: true
            },
            {
                id: 5,
                name: "Dell XPS 13",
                description: "Ordinateur portable professionnel",
                price: 1199.99,
                image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500",
                category: "ordinateurs",
                categoryName: "Ordinateurs",
                whatsapp: "+33123456793",
                stock: 6,
                featured: false
            },
            {
                id: 6,
                name: "AirPods Pro 2",
                description: "Écouteurs sans fil avec réduction de bruit active",
                price: 249.99,
                image: "https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=500",
                category: "audio-video",
                categoryName: "Audio & Vidéo",
                whatsapp: "+33123456794",
                stock: 25,
                featured: false
            },
            {
                id: 7,
                name: "Raspberry Pi 5",
                description: "Mini-ordinateur pour projets IoT et apprentissage",
                price: 89.99,
                image: "https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=500",
                category: "arduino-iot",
                categoryName: "Arduino & IoT",
                whatsapp: "+33123456795",
                stock: 30,
                featured: false
            },
            {
                id: 8,
                name: "Câble USB-C Premium",
                description: "Câble de charge rapide USB-C vers USB-C 2m",
                price: 19.99,
                image: "https://images.unsplash.com/photo-1583394838336-acd977736f90?w=500",
                category: "accessoires",
                categoryName: "Accessoires",
                whatsapp: "+33123456796",
                stock: 100,
                featured: false
            },
            {
                id: 9,
                name: "iPad Pro 12.9\"",
                description: "Tablette professionnelle avec puce M2",
                price: 1099.99,
                image: "https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=500",
                category: "ordinateurs",
                categoryName: "Ordinateurs",
                whatsapp: "+33123456797",
                stock: 10,
                featured: false
            },
            {
                id: 10,
                name: "Sony WH-1000XM5",
                description: "Casque sans fil avec réduction de bruit exceptionnelle",
                price: 399.99,
                image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500",
                category: "audio-video",
                categoryName: "Audio & Vidéo",
                whatsapp: "+33123456798",
                stock: 15,
                featured: false
            },
            {
                id: 11,
                name: "Kit Capteurs Arduino",
                description: "Pack de 37 capteurs pour projets Arduino",
                price: 49.99,
                image: "https://images.unsplash.com/photo-1518611012118-696072aa579a?w=500",
                category: "arduino-iot",
                categoryName: "Arduino & IoT",
                whatsapp: "+33123456799",
                stock: 40,
                featured: false
            },
            {
                id: 12,
                name: "Chargeur sans fil Qi",
                description: "Station de charge sans fil universelle 15W",
                price: 39.99,
                image: "https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?w=500",
                category: "accessoires",
                categoryName: "Accessoires",
                whatsapp: "+33123456800",
                stock: 60,
                featured: false
            }
        ];

        let filteredProducts = [...allProducts];
        let currentView = 'grid';

        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
        
        // Load saved theme
        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }
        
        // Mobile Menu
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Fonction pour formater le prix
        function formatPrice(price) {
            return new Intl.NumberFormat('fr-FR', {
                style: 'currency',
                currency: 'EUR'
            }).format(price);
        }

        // Fonction pour créer une carte produit
        function createProductCard(product) {
            const stockStatus = product.stock > 0 
                ? `<span class="text-green-600 dark:text-green-400"><i class="fas fa-check-circle mr-1"></i>En stock (${product.stock})</span>`
                : `<span class="text-red-600 dark:text-red-400"><i class="fas fa-times-circle mr-1"></i>Rupture de stock</span>`;

            return `
                <div class="product-card bg-white dark:bg-dark-light rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden animate-scale-in">
                    <div class="relative overflow-hidden">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">${product.categoryName}</span>
                        </div>
                        ${product.featured ? '<div class="absolute top-4 right-4"><span class="px-3 py-1 bg-yellow-500 text-white text-sm rounded-full"><i class="fas fa-star mr-1"></i>Vedette</span></div>' : ''}
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="flex space-x-4">
                                <button onclick="viewProduct(${product.id})" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                                    <i class="fas fa-eye mr-2"></i>Voir
                                </button>
                                <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors ${product.stock === 0 ? 'opacity-50 pointer-events-none' : ''}">
                                    <i class="fab fa-whatsapp mr-2"></i>Contact
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">${product.name}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-2">${product.description}</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold text-primary">${formatPrice(product.price)}</span>
                            <div class="text-sm">
                                ${stockStatus}
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <button onclick="viewProduct(${product.id})" class="px-4 py-2 border border-primary text-primary hover:bg-primary hover:text-white rounded-lg transition-colors">
                                Détails
                            </button>
                            <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors ${product.stock === 0 ? 'opacity-50 pointer-events-none' : ''}">
                                Commander
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }

        // Fonction pour afficher les produits
        function displayProducts(products) {
            const grid = document.getElementById('productsGrid');
            const noProducts = document.getElementById('noProducts');
            const resultsCount = document.getElementById('resultsCount');

            resultsCount.textContent = products.length;

            if (products.length === 0) {
                grid.innerHTML = '';
                noProducts.classList.remove('hidden');
            } else {
                noProducts.classList.add('hidden');
                grid.innerHTML = products.map(product => createProductCard(product)).join('');
            }
        }

        // Fonction de filtrage
        function filterProducts() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const sortFilter = document.getElementById('sortFilter').value;

            let filtered = allProducts.filter(product => {
                const matchesSearch = product.name.toLowerCase().includes(searchTerm) || 
                                    product.description.toLowerCase().includes(searchTerm);
                const matchesCategory = !categoryFilter || product.category === categoryFilter;
                
                return matchesSearch && matchesCategory;
            });

            // Tri
            switch (sortFilter) {
                case 'price-low':
                    filtered.sort((a, b) => a.price - b.price);
                    break;
                case 'price-high':
                    filtered.sort((a, b) => b.price - a.price);
                    break;
                case 'name':
                    filtered.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'newest':
                default:
                    filtered.sort((a, b) => b.id - a.id);
                    break;
            }

            filteredProducts = filtered;
            displayProducts(filtered);
            updateActiveFilters();
        }

        // Fonction pour mettre à jour les filtres actifs
        function updateActiveFilters() {
            const container = document.getElementById('activeFilters');
            const searchTerm = document.getElementById('searchInput').value;
            const categoryFilter = document.getElementById('categoryFilter').value;
            
            let filters = [];
            
            if (searchTerm) {
                filters.push(`
                    <span class="inline-flex items-center px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">
                        Recherche: "${searchTerm}"
                        <button onclick="document.getElementById('searchInput').value=''; filterProducts();" class="ml-2 hover:text-primary/70">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                `);
            }
            
            if (categoryFilter) {
                const categoryName = document.getElementById('categoryFilter').selectedOptions[0].text;
                filters.push(`
                    <span class="inline-flex items-center px-3 py-1 bg-secondary/10 text-secondary rounded-full text-sm">
                        Catégorie: ${categoryName}
                        <button onclick="document.getElementById('categoryFilter').value=''; filterProducts();" class="ml-2 hover:text-secondary/70">
                            <i class="fas fa-times"></i>
                        </button>
                    </span>
                `);
            }
            
            container.innerHTML = filters.join('');
        }

        // Fonction pour effacer tous les filtres
        function clearAllFilters() {
            document.getElementById('searchInput').value = '';
            document.getElementById('categoryFilter').value = '';
            document.getElementById('sortFilter').value = 'newest';
            filterProducts();
        }

        // Modal de détails produit
        function viewProduct(productId) {
            const product = allProducts.find(p => p.id === productId);
            if (!product) return;

            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white dark:bg-dark rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="relative">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-64 md:h-80 object-cover">
                        <button onclick="this.closest('.fixed').remove()" class="absolute top-4 right-4 w-10 h-10 bg-white/90 dark:bg-black/90 rounded-full flex items-center justify-center text-2xl hover:bg-white dark:hover:bg-black transition-colors">
                            ×
                        </button>
                        ${product.featured ? '<div class="absolute top-4 left-4"><span class="px-3 py-1 bg-yellow-500 text-white text-sm rounded-full"><i class="fas fa-star mr-1"></i>Produit vedette</span></div>' : ''}
                    </div>
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row md:items-start gap-6">
                            <div class="flex-1">
                                <div class="mb-4">
                                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">${product.categoryName}</span>
                                </div>
                                <h2 class="text-3xl font-bold mb-4">${product.name}</h2>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 text-lg">${product.description}</p>
                                <div class="grid md:grid-cols-2 gap-4 mb-6">
                                    <div class="flex items-center">
                                        <i class="fas fa-tag text-primary mr-3"></i>
                                        <span>Prix: <strong class="text-primary">${formatPrice(product.price)}</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-warehouse text-primary mr-3"></i>
                                        <span>Stock: <strong class="${product.stock > 0 ? 'text-green-600' : 'text-red-600'}">${product.stock > 0 ? product.stock + ' disponibles' : 'Rupture de stock'}</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shipping-fast text-primary mr-3"></i>
                                        <span>Livraison: <strong>2-3 jours ouvrés</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-primary mr-3"></i>
                                        <span>Garantie: <strong>2 ans</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-80">
                                <div class="bg-gray-50 dark:bg-dark-light rounded-lg p-6">
                                    <div class="text-center mb-6">
                                        <div class="text-3xl font-bold text-primary mb-2">${formatPrice(product.price)}</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Prix TTC, livraison incluse</div>
                                    </div>
                                    <div class="space-y-4">
                                        <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="w-full flex items-center justify-center px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors font-semibold ${product.stock === 0 ? 'opacity-50 pointer-events-none' : ''}">
                                            <i class="fab fa-whatsapp mr-2"></i>
                                            Contacter sur WhatsApp
                                        </a>
                                        <div class="text-center text-sm text-gray-600 dark:text-gray-400">
                                            Réponse rapide garantie
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Fermer en cliquant à l'extérieur
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.remove();
                }
            });
        }

        // Event listeners
        document.getElementById('searchInput').addEventListener('input', filterProducts);
        document.getElementById('categoryFilter').addEventListener('change', filterProducts);
        document.getElementById('sortFilter').addEventListener('change', filterProducts);
        document.getElementById('clearFilters').addEventListener('click', clearAllFilters);

        // View toggles
        document.getElementById('gridView').addEventListener('click', function() {
            currentView = 'grid';
            this.classList.add('bg-primary', 'text-white');
            this.classList.remove('hover:bg-gray-200', 'dark:hover:bg-gray-700');
            document.getElementById('listView').classList.remove('bg-primary', 'text-white');
            document.getElementById('listView').classList.add('hover:bg-gray-200', 'dark:hover:bg-gray-700');
            
            const grid = document.getElementById('productsGrid');
            grid.className = 'grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8';
            displayProducts(filteredProducts);
        });

        document.getElementById('listView').addEventListener('click', function() {
            currentView = 'list';
            this.classList.add('bg-primary', 'text-white');
            this.classList.remove('hover:bg-gray-200', 'dark:hover:bg-gray-700');
            document.getElementById('gridView').classList.remove('bg-primary', 'text-white');
            document.getElementById('gridView').classList.add('hover:bg-gray-200', 'dark:hover:bg-gray-700');
            
            const grid = document.getElementById('productsGrid');
            grid.className = 'space-y-6';
            displayProductsList(filteredProducts);
        });

        // Fonction pour affichage en liste
        function displayProductsList(products) {
            const grid = document.getElementById('productsGrid');
            const noProducts = document.getElementById('noProducts');
            const resultsCount = document.getElementById('resultsCount');

            resultsCount.textContent = products.length;

            if (products.length === 0) {
                grid.innerHTML = '';
                noProducts.classList.remove('hidden');
            } else {
                noProducts.classList.add('hidden');
                grid.innerHTML = products.map(product => createProductCardList(product)).join('');
            }
        }

        // Fonction pour créer une carte produit en liste
        function createProductCardList(product) {
            const stockStatus = product.stock > 0 
                ? `<span class="text-green-600 dark:text-green-400"><i class="fas fa-check-circle mr-1"></i>En stock (${product.stock})</span>`
                : `<span class="text-red-600 dark:text-red-400"><i class="fas fa-times-circle mr-1"></i>Rupture de stock</span>`;

            return `
                <div class="product-card bg-white dark:bg-dark-light rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden animate-scale-in">
                    <div class="flex flex-col md:flex-row">
                        <div class="relative md:w-80 overflow-hidden">
                            <img src="${product.image}" alt="${product.name}" class="w-full h-64 md:h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">${product.categoryName}</span>
                            </div>
                            ${product.featured ? '<div class="absolute top-4 right-4"><span class="px-3 py-1 bg-yellow-500 text-white text-sm rounded-full"><i class="fas fa-star mr-1"></i>Vedette</span></div>' : ''}
                        </div>
                        <div class="flex-1 p-6">
                            <div class="flex flex-col h-full">
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors">${product.name}</h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-lg">${product.description}</p>
                                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                                        <div class="flex items-center">
                                            <i class="fas fa-tag text-primary mr-3"></i>
                                            <span class="text-xl font-bold text-primary">${formatPrice(product.price)}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-warehouse text-primary mr-3"></i>
                                            ${stockStatus}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-4">
                                    <button onclick="viewProduct(${product.id})" class="px-6 py-3 border border-primary text-primary hover:bg-primary hover:text-white rounded-lg transition-colors flex-1 md:flex-none">
                                        <i class="fas fa-eye mr-2"></i>Voir détails
                                    </button>
                                    <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors flex-1 md:flex-none ${product.stock === 0 ? 'opacity-50 pointer-events-none' : ''}">
                                        <i class="fab fa-whatsapp mr-2"></i>Contacter
                                    </a>
                                    <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors flex-1 md:flex-none ${product.stock === 0 ? 'opacity-50 pointer-events-none' : ''}">
                                        <i class="fas fa-shopping-cart mr-2"></i>Commander
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            displayProducts(allProducts);
            
            // Observer les sections pour l'animation
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });

        // Fonction pour le scroll smooth vers le haut
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Bouton de retour en haut (optionnel)
        window.addEventListener('scroll', function() {
            const scrollButton = document.getElementById('scrollToTop');
            if (scrollButton) {
                if (window.pageYOffset > 300) {
                    scrollButton.classList.remove('hidden');
                } else {
                    scrollButton.classList.add('hidden');
                }
            }
        });

        // Ajout du bouton de retour en haut
        const scrollToTopButton = document.createElement('button');
        scrollToTopButton.id = 'scrollToTop';
        scrollToTopButton.className = 'fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg hover:bg-primary/90 transition-all duration-300 z-40 hidden flex items-center justify-center';
        scrollToTopButton.innerHTML = '<i class="fas fa-chevron-up"></i>';
        scrollToTopButton.onclick = scrollToTop;
        document.body.appendChild(scrollToTopButton);
    </script>
</body>
</html>