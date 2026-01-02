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
    <link rel="stylesheet" href="assets/css/style.css">
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
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          
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
        
     

        <!-- COFFEE-BASED DRINKS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/5d2/5d24e7726f8d55a532d3fc23cea3c338/02_Coffee_Toffee_-_Coffee_based_drink_02_2x.jpg" alt="Coffee Drinks">
                <div class="category-info">
                    <h2>COFFEE-BASED DRINKS</h2>
                    <p>Coffee Toffee IDN adalah perusahaan kopi dengan pengalaman lebih dari 14 tahun, mengklaim bahwa salah satu keahlian kami adalah menciptakan varian minuman berbasis kopi. Terdapat banyak sekali varian minuman kopi untuk semua kalangan. Mulai dari Espresso dan Manual Brew untuk kamu pencinta kopi sejati, minuman klasik kopi seperti cappuccino, latte, machiato sampai minuman kopi modern seperti Frappe Blend dan Es Kopi Susu.</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/3e4/3e47bf48525f796ee44c2f7136339943/Coffee_Toffee_-_Coffee_Drinks_01_-_Frappe_Blend_02c_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>FRAPPE BLEND</h3>
                <p class="description">Java Jimmie Joe • I Need Coffee • Avocado Creame Joe • Rum Raisin • Caramel Delight • Hazelnut Crave</p>
                </div>
                </div>
                
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/689/6898e87236b943ecff372f068465b131/Coffee_Toffee_-_Coffee_Drinks_02_-_Espresso_Based_02b_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>ESPRESSO-BASED</h3>
                    <p class="description">Cappuccino • Cafe Latte •  Creme Brullee Mocha Blast • Black Coffee Nusantara Espresso</p>
                </div>
                </div>

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/1ca/1ca4b196e581da7ad8bd75bda1cb3e9e/Coffee_Toffee_-_Coffee_Drinks_03_-_Es_Kopi_Susu_02c_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>ESKOSU (TRADITIONAL COFFEE)</h3>
                    <p class="description">Malaka • Arum Manis • Dandang Gulo • Eskosu Kumpeni  • Eskosu Kelapa</p>
                </div>
                </div>  

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/a56/a563ac5b567f7ff509f37d58327a620b/Coffee_Toffee_-_Coffee_Drinks_04_-_Manual_Brew_01c_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>MANUAL BREW</h3>
                    <p class="description">( Pour Over V60 | French Press ) Single Origin : Java Mocha, Mount Malabar, Bali Kintamani, Flores Bajawa, Toraja Kalosi, Aceh Gayo, Sumatra Linthong</p>
                </div>
                </div>   

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/d31/d31330e35b48be69974955eaf11476c1/Coffee_Toffee_-_Nitro_Coffee_02b_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>NITRO COFFEE</h3>
                    <p class="description">Mild Nitro Coffee (Arabika Single Origin) • Bold Nitro Coffee (House Blend) • Brown Sugar Nitro Coffee *hanya di gerai tertentu</p>
                </div>
                </div>               
            </div>
        </div>

        <!-- NON-COFFEE DRINKS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/04d/04dc5af81ad5b85830e8b40d6ba087fd/03_Coffee_Toffee_-_Non_Coffee_Drinks_02_2x.jpg" alt="Non Coffee">
                <div class="category-info">
                    <h2>NON-COFFEE DRINKS</h2>
                    <p>Kemungkinan besar kamu akan datang ke Coffee Toffee bersama orang - orang terdekatmu,  apakah itu keluarga, anak, rekan kerja, atau teman komunitasmu. Dan kami menyadari bahwa sebagian dari mereka menginginkan adanya pilihan menu non-kopi. Oleh karena itu kami juga menyediakan berbagai macam non-coffee juga di gerai  kami. </p>
                    <p>Minuman - minuman ini tetap diracik menggunakan bahan bahan baku terbaik Indonesia, mulai dari teh, coklat sampai sirup yang digunakan. Kami memberikan perhatian dan apresiasi khusus terhadap menu non-coffee kami ini, karena kami memahami bahwa minuman - minuman akan dinikmati oleh orang - orang terpenting dalam hidup kamu.</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/883/883e6ef8d57a4417aed01ca4b97507c2/Coffee_Toffee_-_Non_Coffee_Drinks_01_-_Chocolate_02c_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>CHOCOLATE</h3>
                    <p class="description">Chocolate Grande • Chocolate Nutella • Caramello • Chocomilk • Hot Chocolate</p>
                </div>
                </div> 
                
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/9b9/9b9d926582570347e263f2cbc1f15bc0/Tea_-_1_Green_tea_Blended_Cream_-_Strawberry_Blended_Tea_-_Blueberry_Blended_Tea_2x_2x.jpg" alt="Tea">
                    <div class="menu-card-body">
                    <h3>TEA</h3>
                    <p class="description">Green Tea Blended Creame • Fruity Blended Tea • Green Tea Latte • Milk Tea • Black Tea • Black Tea Lemon • Black Tea Lychee</p>
                </div>
                </div>

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/980/980a8c394accf61ab6f46aece04d1601/Coffee_Toffee_-_Non_Coffee_Drinks_03_-_Fruit_Punch_03b_2x.jpg" alt="Tea">
                    <div class="menu-card-body">
                    <h3>FRUIT PUNCH</h3>
                    <p class="description">I'm Manggo • Irish Lemonade • Lychee Punch</p>
                </div>
                </div>

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/eee/eeee249a6f9afd6435cb26259a1d1aa9/Coffee_Toffee_-_Non_Coffee_Drinks_04_-_Smoothies_02b_2x.jpg" alt="Tea">
                    <div class="menu-card-body">
                    <h3>SMOOTHIES</h3>
                    <p class="description">Manggo Avocado Smoothies • Manggo Madness Smoothies • Mix Berries Smoothies</p>
                </div>
                </div>
            </div>
        </div>

        <!-- FOOD & SNACK -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/c2c/c2cb0be94f3715677f67326a554017da/04_Coffee_Toffee_-_Food_n_Snack_03_-_Cordon_Bleu_2x.jpg" alt="Food & Snack">
                <div class="category-info">
                    <h2>FOOD & SNACK</h2>
                    <p>Coffee Toffee Indonesia juga menyediakan berbagai pilihan makanan dan camilan yang cocok menemani kopi</p>
                </div>
            </div>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/9ca/9ca04754c35e1bb023413edcea20df93/Coffee_Toffee_-_Food_Snack_-_RiceBowl_04b_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>RICE BOWL</h3>
                    <p class="description">Chicken Rice Bowl (Sambal Matah |BBQ|Korean Sauce|Black Pepper) • Sause Rice Bowl (Sambal Matah|BBQ|Korean Sauce|Black Pepper) • Fried Rice (Javanese|Red|Traditional)</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/706/7062e444f3bc885c850d682229382c78/Coffee_Toffee_-_Food_Snack_-_Main_Course_03b_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>MAIN COURSE</h3>
                    <p class="description">Chicken Cordon Bleu • Chicken Schnitzel • Rebel Beef/Chicken Burger • Square Pants Burger • Club Sandwich • Grilled Cheese Sandwich • Buttermilk Latte Sandwich</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/5e4/5e4c14e2c308a3aef6c3f4f73db4ae54/Coffee_Toffee_-_Food_Snack_-_Pasta_03b_Spaghetti_Meatball_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>PASTA</h3>
                    <p class="description">Fettucinne Carbonara • Aglio Olio Con Tonno  • Spagetti Bolognese • Spagetti Meat Ball  • Noodle Bowl (BlackPepper|BBQ|Korean)</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/e6c/e6c8069393b489855c2a72cf237a3591/Strawberry_Pancake_2x_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>PANCAKE</h3>
                    <p class="description">Original  • Nutella  • Manggo</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/703/7032c2fd1879b164f68365caa0a558d0/Coffee_Toffee_-_Food_Snack_-_Snack_02b_Spring_Roll_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>SNACK</h3>
                    <p class="description">BBQ Chicken Wings • Chicken Lolipop • Crispy Chicked Skin • Mozarella Cheese Stick • Spring Roll • Beef Samosa • Banana Bites • Baked Potato Bolognese • Seafood Platter  • Cheesy Platter • Fish n Chips  • French Fries</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/eff/eff9ff0bb3e576d4c4648f45988d3f2e/Coffee_Toffee_-_Food_Snack_-_Traditional_01_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>TRADITIONAL</h3>
                    <p class="description">Classic Casava (Stemed|Fried) • Fried Tofu Chilly Soy Sauce</p>
                </div>
                </div> 
            </div>
        </div>

        <!-- COFFEE PACK -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg" alt="Our Beans">
                <div class="category-info">
                    <h2>COFFEE PACK & COFFEE BANKING</h2>
                    <p>Sekarang kalian bisa dengan mudah menikmati coffee specialty dengan bermacam-macam karakter, aroma dan rasa dari berbagai daerah penghasil kopi di Indonesia yang tersedia di gerai-gerai coffee toffee terdekat:</p>
                </div>
            </div>
            
             <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/ecc/ecc236dc983db1078e3adddc7a8e05ed/Kopi_Retail_-_All_2x.png" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>COFFEE PACK</h3>
                    <p class="description">Terdapat beberapa single origin arabica specialty dengan aroma, rasa dan karakter yang unik dari berbagai daerah yang bisa kamu pesan di gerai coffee toffee untuk dinikmati di rumah atau sekedar untuk gift keluarga/keluarga/kerabat kalian. di antaranya: bali kintamani, sumatera linthong, bali batukaru, sumatera gayo, java mocha, mount malabar, dan sulawesi toraja.</p>
                    <p><b>Kontak kami untuk order atau info lebih lanjut...</b></p>
                </div>
                </div> 
                
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/b85/b856c9e1a2e93375dfc0d59cc110baf8/Kopi_Retail_-_Peaberry_02_2x.png" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>LIMITED STOCK</h3>
                    <p class="description">Salah satu single origin specialty yang selalu di nantikan oleh coffee lovers. Biji kopi specialty rare & limited stock yang hanya tersedia di waktu tertentu, mulai dari kopi peaberry, kopi luwak, liberica, maragogype, sampai dengan single origin yang diproses khusus oleh para ahli dari hulu ke hilir untuk di jadikan gacoan/andalan dalam kompetisi barista</p>
                    <p><b>Kontak kami untuk order atau info lebih lanjut...</b></p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/10d/10d034b2d5f08cd0287b094a95d8a293/Kopi_Retail_-_Coffee_Banking_2x.png" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>COFFEE BANKING</h3>
                    <p class="description">Buat kalian pecinta black coffee, kami menyediakan coffee banking. Dengan membeli 1 pack single origin specialty (coffee banking) kalian bisa menitipkan coffee pack ke barista di gerai. Jadi very simple banget ini, ketika kamu datang ke gerai tinggal sebut nama dan pesan ke barista maka black coffee akan langsung diseduhkan dan bisa langsung kalian nikmatin, gratis tanpa ada biaya tambahan apapun.</p>
                    <p><b>Kontak kami untuk order atau info lebih lanjut...</b></p>
                </div>
                </div>
            </div>
        </div>

        <!-- MERCHANDISE -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/4b0/4b0dd7a794074f694a017ca5629a503e/01_Coffee_Toffee_-_Our_Bean_-_Biji_Kopi_02_2x.jpg" alt="Our Beans">
                <div class="category-info">
                    <h2>MERCHANDISE</h2>
                    <p>Kami dengan bangga berkolaborasi bersama pengrajin local untuk membuat semua merchandise coffee toffee dengan design dan kualitas terbaik menjadikan kalian semua bisa semakin bergaya dan keren, jadi segera miliki koleksi merchandise coffee toffee ya.</p>
                </div>
            </div>
            
             <div class="menu-grid">
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/8fe/8fee2e455ab1dc2936f034a22dad5dc4/118770_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>KEYCHAIN</h3>
                    <p class="description">UNIQUE. Gantungan kunci unik dan lucu, dengan tema berbagai peralatan kopi serta kecintaan </p>
                </div>
                </div> 
                
                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/532/53241b89799b9c62a7715c2834fe3c01/line_191569338040498_2x_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>PIN</h3>
                    <p class="description">LUCU. Berbagai pin lucu dan unik dengan tema kopi, peralatan kopi, serta kebanggaan terhadap kopi Indonesia.</p>
                </div>
                </div> 

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/be3/be37da63d1143478f01f214146620a50/line_192383395167375_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>TSHIRT</h3>
                    <p class="description">LIMITED. Beerbagai desain kaos dengan tema kecintaan terhadap dunia kopi serta. Setiap desain diproduksi dalam jumlah terbatas hanya 50 pcs per desain.</p>
                </div>
                </div>

                <div class="menu-card">
                    <img src="https://cdn.bitrix24.id/b14044525/landing/d13/d139813066a14d3e6f8d9ebed7f80aef/line_192733357065887_2x_2x.jpg" alt="Espresso">
                    <div class="menu-card-body">
                    <h3>TAKE ME</h3>
                    <p class="description">Kabar gembira nihh...buat pelanggan coffee toffee, kalian bisa mendapatkan semua merchandise coffee toffee dengan gratis lho, jadi follow dan pantengin terus IG coffee toffee ya...</p>
                </div>
                </div>
            </div>
        </div>

        <!-- HAMPERS -->
        <div class="menu-category">
            <div class="category-header">
                <img src="https://cdn.bitrix24.id/b14044525/landing/659/659ac3f5c1e010048e856c449c131579/Coffee_Toffee_-_Hampers_Parcel_05c_2x.jpg" alt="Our Beans">
                <div class="category-info">
                    <h2>HAMPERS</h2>
                    <p>Jangan lewatkan momen istimewa orang - orang terdekatmu. Tunjukkan perhatianmu dan kirimkan satu paket penuh cinta dengan parcel yang berisi biji kopi terbaik Indonesia, racikan minuman terbaik dari Coffee Toffee serta berbagai merchandise unik.</p> <br>
                    <P>Kalian bisa pesan di gerai terdekat sesuai keinginan dengan pesan singkat menarik dan cocok buat moment Ied hampers, charity hampers, birthday hampers, christmas hampers, wedding hampers, dan lain iannya.</P><br>
                    <P>CATATAN. Layanan hampers ini kita sediakan untuk momen perayaan tahun baru, Natal dan Idul Fitri. Apabila kamu ada momen spesial lainnya, silahkan kontak gerai Coffee Toffee terdekat dan konsultasikan kebutuhan kamu, dengan senang hati kami akan memastikan momen spesial orang terdekatmu tidak terlewatkan dengan begitu saja. 😘</P>
                </div>
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