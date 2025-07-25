<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GilTech - Votre partenaire technologique de confiance</title>
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
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(99, 102, 241, 0.5); }
            to { box-shadow: 0 0 30px rgba(99, 102, 241, 0.8); }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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
    </style>
</head>
<body class="bg-white dark:bg-dark text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                        <i class="fas fa-microchip text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold gradient-text">GilTech</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="hover:text-primary transition-colors">Accueil</a>
                    <a href="produits.php" class="hover:text-primary transition-colors">Produits</a>
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
                <a href="#accueil" class="block hover:text-primary transition-colors">Accueil</a>
                <a href="produits.php" class="block hover:text-primary transition-colors">Produits</a>
                <a href="formations.php" class="block hover:text-primary transition-colors">Formations</a>
                <a href="about.php" class="block hover:text-primary transition-colors">À propos</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-secondary/20 dark:from-primary/10 dark:to-secondary/10"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-32 h-32 bg-primary/30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-secondary/30 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
            <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-accent/30 rounded-full blur-3xl animate-float" style="animation-delay: -1.5s;"></div>
        </div>
        
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="animate-slide-up">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    <span class="gradient-text">Votre partenaire</span><br>
                    <span class="text-gray-800 dark:text-white">technologique</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                    Découvrez notre gamme de produits électroniques de pointe et nos formations pratiques pour maîtriser les nouvelles technologies.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="produits.php" class="px-8 py-4 bg-gradient-to-r from-primary to-secondary text-white rounded-full font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 animate-glow">
                        Découvrir nos produits
                    </a>
                    <a href="formations.php" class="px-8 py-4 border-2 border-primary text-primary hover:bg-primary hover:text-white rounded-full font-semibold transition-all duration-300">
                        Nos formations
                    </a>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-2xl text-primary"></i>
        </div>
    </section>

    <!-- Produits en vedette -->
    <section class="py-20 bg-gray-50 dark:bg-dark-light">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Produits en vedette</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto">
                    Découvrez notre sélection des derniers produits électroniques de haute qualité
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="featuredProducts">
                <!-- Les produits seront chargés ici via JavaScript -->
            </div>
            
            <div class="text-center mt-12">
                <a href="produits.php" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors">
                    Voir tous les produits
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Formations en vedette -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Formations populaires</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto">
                    Développez vos compétences avec nos formations pratiques animées par des experts
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="featuredFormations">
                <!-- Les formations seront chargées ici via JavaScript -->
            </div>
            
            <div class="text-center mt-12">
                <a href="formations.php" class="inline-flex items-center px-6 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors">
                    Voir toutes les formations
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="py-20 bg-gray-50 dark:bg-dark-light">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Ce que disent nos clients</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    La satisfaction de nos clients est notre priorité
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="testimonials">
                <!-- Les témoignages seront chargés ici via JavaScript -->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-secondary">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">
                Prêt à commencer votre parcours tech ?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Rejoignez des milliers de clients satisfaits qui nous font confiance pour leurs besoins technologiques
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="produits.php" class="px-8 py-4 bg-white text-primary rounded-full font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300">
                    Explorer les produits
                </a>
                <a href="formations.php" class="px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-primary rounded-full font-semibold transition-all duration-300">
                    Découvrir les formations
                </a>
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
                        <li><a href="#accueil" class="text-gray-300 hover:text-primary transition-colors">Accueil</a></li>
                        <li><a href="produits.php" class="text-gray-300 hover:text-primary transition-colors">Produits</a></li>
                        <li><a href="formations.php" class="text-gray-300 hover:text-primary transition-colors">Formations</a></li>
                        <li><a href="about.php" class="text-gray-300 hover:text-primary transition-colors">À propos</a></li>
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
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-primary/80 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-primary/80 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary rounded-full flex items-center justify-center hover:bg-primary/80 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-gray-300">
                <p>&copy; 2024 GilTech. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
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
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Données fictives pour la démonstration
        const featuredProducts = [
            {
                id: 1,
                name: "iPhone 15 Pro",
                price: "1 299,99€",
                image: "https://images.unsplash.com/photo-1592286499134-b5b2b0c9e8a8?w=500",
                whatsapp: "+33123456789",
                category: "Smartphones"
            },
            {
                id: 2,
                name: "MacBook Air M3",
                price: "1 399,99€", 
                image: "https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500",
                whatsapp: "+33123456790",
                category: "Ordinateurs"
            },
            {
                id: 3,
                name: "Samsung Galaxy S24",
                price: "899,99€",
                image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500", 
                whatsapp: "+33123456792",
                category: "Smartphones"
            }
        ];
        
        const featuredFormations = [
            {
                id: 1,
                title: "Développement Web Complet",
                duration: "3 mois",
                price: "599,99€",
                image: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=500",
                participants: 15
            },
            {
                id: 2,
                title: "Arduino et IoT", 
                duration: "6 semaines",
                price: "399,99€",
                image: "https://images.unsplash.com/photo-1518644730709-0835105d9daa?w=500",
                participants: 12
            },
            {
                id: 3,
                title: "Réparation Smartphones",
                duration: "4 semaines", 
                price: "299,99€",
                image: "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=500",
                participants: 10
            }
        ];
        
        const testimonials = [
            {
                name: "Marie Dubois",
                title: "Développeuse Web",
                content: "Excellente formation en développement web. Les instructeurs sont très compétents et le contenu est à jour.",
                rating: 5,
                image: "https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150"
            },
            {
                name: "Jean Martin", 
                title: "Entrepreneur",
                content: "J'ai acheté plusieurs produits chez GilTech, toujours de la qualité et un service client irréprochable.",
                rating: 5,
                image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150"
            },
            {
                name: "Sophie Laurent",
                title: "Étudiante",
                content: "La formation Arduino m'a permis de créer mon premier projet IoT. Je recommande vivement !",
                rating: 5,
                image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150"
            }
        ];
        
        // Fonction pour générer les étoiles
        function generateStars(rating) {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    stars += '<i class="fas fa-star text-yellow-400"></i>';
                } else {
                    stars += '<i class="far fa-star text-gray-300"></i>';
                }
            }
            return stars;
        }
        
        // Charger les produits en vedette
        function loadFeaturedProducts() {
            const container = document.getElementById('featuredProducts');
            container.innerHTML = featuredProducts.map(product => `
                <div class="bg-white dark:bg-dark rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">${product.category}</span>
                        </div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors flex items-center">
                                <i class="fab fa-whatsapp mr-2"></i>
                                Contacter
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">${product.name}</h3>
                        <p class="text-2xl font-bold text-primary mb-4">${product.price}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">En stock</span>
                            <a href="https://wa.me/${product.whatsapp.replace('+', '')}" target="_blank" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors text-sm">
                                Commander
                            </a>
                        </div>
                    </div>
                </div>
            `).join('');
        }
        
        // Charger les formations en vedette
        function loadFeaturedFormations() {
            const container = document.getElementById('featuredFormations');
            container.innerHTML = featuredFormations.map(formation => `
                <div class="bg-white dark:bg-dark rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="${formation.image}" alt="${formation.title}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-secondary text-white text-sm rounded-full">${formation.duration}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-secondary transition-colors">${formation.title}</h3>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold text-secondary">${formation.price}</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">
                                <i class="fas fa-users mr-1"></i>
                                ${formation.participants} places
                            </span>
                        </div>
                        <button onclick="openRegistrationModal(${formation.id})" class="w-full px-4 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-semibold">
                            S'inscrire maintenant
                        </button>
                    </div>
                </div>
            `).join('');
        }
        
        // Charger les témoignages
        function loadTestimonials() {
            const container = document.getElementById('testimonials');
            container.innerHTML = testimonials.map(testimonial => `
                <div class="bg-white dark:bg-dark rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <img src="${testimonial.image}" alt="${testimonial.name}" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">${testimonial.name}</h4>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">${testimonial.title}</p>
                            <div class="flex mt-1">
                                ${generateStars(testimonial.rating)}
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">"${testimonial.content}"</p>
                </div>
            `).join('');
        }
        
        // Modal d'inscription aux formations
        function openRegistrationModal(formationId) {
            const formation = featuredFormations.find(f => f.id === formationId);
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4';
            modal.innerHTML = `
                <div class="bg-white dark:bg-dark rounded-2xl p-8 max-w-md w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold">Inscription</h3>
                        <button onclick="this.closest('.fixed').remove()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                    </div>
                    <div class="mb-6">
                        <h4 class="font-semibold text-lg text-secondary">${formation.title}</h4>
                        <p class="text-gray-600 dark:text-gray-300">Durée: ${formation.duration} • Prix: ${formation.price}</p>
                    </div>
                    <form id="registrationForm" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Prénom</label>
                            <input type="text" name="firstName" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent dark:bg-dark-light">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Nom</label>
                            <input type="text" name="lastName" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent dark:bg-dark-light">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Numéro WhatsApp</label>
                            <input type="tel" name="whatsapp" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent dark:bg-dark-light">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email (optionnel)</label>
                            <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent dark:bg-dark-light">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Message (optionnel)</label>
                            <textarea name="message" rows="3" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent dark:bg-dark-light"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-secondary text-white rounded-lg hover:bg-secondary/90 transition-colors font-semibold">
                            Confirmer l'inscription
                        </button>
                    </form>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Gérer la soumission du formulaire
            modal.querySelector('#registrationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Ici, vous ajouteriez la logique pour envoyer les données au serveur
                alert('Inscription enregistrée ! Nous vous contacterons bientôt.');
                modal.remove();
            });
            
            // Fermer en cliquant à l'extérieur
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.remove();
                }
            });
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
        
        // Observer les sections
        document.addEventListener('DOMContentLoaded', function() {
            loadFeaturedProducts();
            loadFeaturedFormations(); 
            loadTestimonials();
            
            // Observer les éléments pour l'animation
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>