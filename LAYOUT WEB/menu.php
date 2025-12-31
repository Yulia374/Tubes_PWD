<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Coffee Toffee</title>
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<!-- NAVBAR -->
<header>
    <div class="container navbar">
      <div class="logo">Coffee Toffee</div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="kopi.php">Kopi</a></li>
          <li><a href="menu.php" class="active">Menu</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Kontak</a></li>
          
          <?php if (isset($_SESSION['login'])): ?>
            <!-- Jika sudah login -->
            <?php if ($_SESSION['level'] == 0): ?>
              <!-- Menu khusus admin -->
              <li><a href="admin/halamanA.php"><i class="fa-solid fa-user-shield"></i> Admin Panel</a></li>
            <?php endif; ?>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
          <?php else: ?>
            <!-- Jika belum login -->
            <li><a href="login.php"><i class="fa-solid fa-user"></i> Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <span class="hero-tag">OUR MENU</span>
        <h1>MENU KAMI</h1>
        <div class="line"></div>
    </div>
</section>

<!-- MENU CATEGORIES -->
<section class="menu-section">
    <div class="container">
        
        <!-- OUR BEANS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg" alt="Our Beans">
                <div class="category-info">
                    <h2>OUR BEANS</h2>
                    <p>Biji kopi grade Specialty Arabica dan Fine Robusta dari 9 perkebunan terbaik Indonesia</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <h3>ACEH GAYO</h3>
                    <p class="description">Arabica - Medium Roast</p>
                    <p class="taste">Herbal, Earthy, Nutty</p>
                </div>
                
                <div class="menu-card">
                    <h3>SUMATERA MANDHELING</h3>
                    <p class="description">Arabica - Dark Roast</p>
                    <p class="taste">Chocolate, Earthy, Full Body</p>
                </div>
                
                <div class="menu-card">
                    <h3>TORAJA</h3>
                    <p class="description">Arabica - Medium Roast</p>
                    <p class="taste">Fruity, Sweet, Balanced</p>
                </div>
                
                <div class="menu-card">
                    <h3>JAVA IJEN</h3>
                    <p class="description">Arabica - Medium Roast</p>
                    <p class="taste">Citrus, Floral, Bright</p>
                </div>
                
                <div class="menu-card">
                    <h3>BALI KINTAMANI</h3>
                    <p class="description">Arabica - Light Roast</p>
                    <p class="taste">Fruity, Citrus, Clean</p>
                </div>
                
                <div class="menu-card">
                    <h3>FLORES BAJAWA</h3>
                    <p class="description">Arabica - Medium Roast</p>
                    <p class="taste">Chocolate, Spicy, Sweet</p>
                </div>
            </div>
        </div>

        <!-- COFFEE-BASED DRINKS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/5d2/5d24e7726f8d55a532d3fc23cea3c338/02_Coffee_Toffee_-_Coffee_based_drink_02_2x.jpg" alt="Coffee Drinks">
                <div class="category-info">
                    <h2>COFFEE-BASED DRINKS</h2>
                    <p>Dari minuman tradisional berbasis espresso sampai berbagai minuman racikan kopi terkini</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <h3>ESPRESSO</h3>
                    <p class="description">Single/Double Shot</p>
                    <p class="price">Rp 15.000 - Rp 20.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>AMERICANO</h3>
                    <p class="description">Espresso dengan air panas</p>
                    <p class="price">Rp 20.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>CAPPUCCINO</h3>
                    <p class="description">Espresso, susu, foam</p>
                    <p class="price">Rp 25.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>CAFFE LATTE</h3>
                    <p class="description">Espresso dengan susu</p>
                    <p class="price">Rp 25.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>MOCHA</h3>
                    <p class="description">Espresso, cokelat, susu</p>
                    <p class="price">Rp 28.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>CARAMEL MACCHIATO</h3>
                    <p class="description">Espresso, vanilla, karamel</p>
                    <p class="price">Rp 30.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>VIETNAMESE DRIP</h3>
                    <p class="description">Kopi Vietnam dengan susu kental manis</p>
                    <p class="price">Rp 22.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>KOPI SUSU GULA AREN</h3>
                    <p class="description">Kopi dengan susu dan gula aren</p>
                    <p class="price">Rp 24.000</p>
                </div>
            </div>
        </div>

        <!-- NON-COFFEE DRINKS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/04d/04dc5af81ad5b85830e8b40d6ba087fd/03_Coffee_Toffee_-_Non_Coffee_Drinks_02_2x.jpg" alt="Non Coffee">
                <div class="category-info">
                    <h2>NON-COFFEE</h2>
                    <p>Beragam pilihan minuman non-kopi untuk semua kalangan</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <h3>CHOCOLATE</h3>
                    <p class="description">Hot/Iced</p>
                    <p class="price">Rp 22.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>MATCHA LATTE</h3>
                    <p class="description">Green tea latte</p>
                    <p class="price">Rp 25.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>THAI TEA</h3>
                    <p class="description">Original Thai tea</p>
                    <p class="price">Rp 20.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>LEMON TEA</h3>
                    <p class="description">Teh dengan lemon segar</p>
                    <p class="price">Rp 18.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>MILKSHAKE</h3>
                    <p class="description">Vanilla, Chocolate, Strawberry</p>
                    <p class="price">Rp 28.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>FRESH JUICE</h3>
                    <p class="description">Orange, Apple, Watermelon</p>
                    <p class="price">Rp 20.000</p>
                </div>
            </div>
        </div>

        <!-- FOOD & SNACK -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/c2c/c2cb0be94f3715677f67326a554017da/04_Coffee_Toffee_-_Food_n_Snack_03_-_Cordon_Bleu_2x.jpg" alt="Food & Snack">
                <div class="category-info">
                    <h2>FOOD & SNACK</h2>
                    <p>Berbagai pilihan makanan dan camilan yang cocok menemani kopi</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <h3>CROISSANT</h3>
                    <p class="description">Plain, Chocolate, Almond</p>
                    <p class="price">Rp 18.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>SANDWICH</h3>
                    <p class="description">Chicken, Tuna, Veggie</p>
                    <p class="price">Rp 25.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>PASTA</h3>
                    <p class="description">Carbonara, Aglio Olio</p>
                    <p class="price">Rp 32.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>NASI GORENG</h3>
                    <p class="description">Nasi goreng spesial</p>
                    <p class="price">Rp 28.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>FRENCH FRIES</h3>
                    <p class="description">Kentang goreng dengan saus</p>
                    <p class="price">Rp 15.000</p>
                </div>
                
                <div class="menu-card">
                    <h3>CAKE</h3>
                    <p class="description">Red Velvet, Chocolate, Cheese</p>
                    <p class="price">Rp 22.000</p>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>
    <p>© 2025 Coffee Toffee - All rights reserved.</p>
</footer>

</body>
</html>