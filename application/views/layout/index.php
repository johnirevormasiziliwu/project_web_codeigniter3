<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/header') ?>

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Tokoh Sepatu Online | Hitarika</title>
   <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
   <header id="header">
      <ul type="none" class="menu-bar">
         <li><a href="<?= base_url('profile') ?>">Home</a></li>
         <li class="dropdown">
            <a>Collection</a>
            <ul type="none" class="dropdown-content">
               <li><a href="#sepatu1">Sneakers</a></li>
               <li><a href="#sepatu2">Athletic Kicks</a></li>
               <li><a href="#sepatu3">Converse</a></li>
               <li><a href="">Pantofel</a></li>
            </ul>
         </li>
         <li class="dropdown">
            <a>Brands</a>
            <ul type="none" class="dropdown-content">
               <li><a href="">Adidas</a></li>
               <li><a href="">Nike</a></li>
               <li><a href="">Converse</a></li>
               <li></li>
            </ul>
         </li>
         <li><a href="#">Sales</a></li>
         <ul type="none" class="drop-login">
            <li><a href="#">Log in</a></li>
         </ul>
      </ul>
      <h1>
         <span style="color: darkgray">You</span><span style="color: #d65a31">Show</span>
      </h1>
   </header>
   <main id="main">
      <div id="main1">
         <img src="assets/images/gambar_sepatu2.jpg" alt="Sepatu1" />
         <h2>Keep Warm in Style</h2>
         <h3><i>Don't Get Mad Get New Shoes</i></h3>
      </div>
      <section class="produk">
         <div id="sepatu1">
            <img src="assets/images/gambar_sepatu5.jpg" alt="sepatu1" />
            <h1>Sneakers</h1>
            <a href="detail.html">Details</a>
         </div>
         <div id="sepatu2">
            <img src="assets/images/gambar_sepatu6.jpg" alt="sepatu2" />
            <h1>Athletic Kicks</h1>
            <a href="detail.html">Details</a>
         </div>
         <div id="sepatu3">
            <img src="assets/images/gambar_sepatu3.jpg" alt="sepatu4" />
            <h1>Converse</h1>
            <a href="detail.html">Details</a>
         </div>
      </section>
      <section id="main2">
         <div>
            <h1>What is Hatarika?</h1>
            <p>
               Hatarika.com is the official website for Online shooping if you want
               to buy products from Hatarika.Hatarika provides a complete
               collection of the best shoes made by the Indonesian
               children.Complete your overall appearance with the best Hatarika
               shoes. Hatarika provides many choices ranging from slip on or
               sneakers that are suitable for a casual atmosphere. For formal
               conditions, Hatarika provides a variety of choices ranging from the
               best boots t leather shoes.
            </p>
            <img src="assets/images/gambar_sepatu7.jpg" alt="sepatu5" />
         </div>
      </section>
      <section id="main3">
         <div>
            <img src="assets/images/gambarsepatu_8.jpg" alt="sepatu6" />
            <h1>What will you get in here</h1>
            <p>
               Shooping shoes via Hatarika.com is easier with several features,
               like Delivery Guarantee, Return and refund problem products,
               Customer Service (09.30-22.00), easy payments via your favorite
               E-Wallet
            </p>
         </div>
      </section>
      <section id="main4">
         <div>
            <img src="assets/images/foto saya.jpeg" alt="sepatu9" />
            <h1>Testimoni</h1>
            <p>
               "Pantofel yang saya beli di Haratika sangat bagus. Bahannya premium
               dan jahitannya juga sangat rapi. Pengemasannya sangat cepat dan
               aman. Saya menunggu untuk koleksi Sneakers lainya!"
            </p>
            <h2>
               <span style="color: #d65a31">Johni Revormasi Ziliwu,</span>
               <span style="color: white">Pegawai Kantor</span>
            </h2>
         </div>
      </section>
   </main>
   <footer id="footer">
      <ul type="none" class="menu-footer">
         <li class="menu-footer1">
            <h3>Haratika</h3>
            <ul type="none">
               <li>Hatarika</li>
               <li>JL. Sudirman No.xx</li>
               <li>hatarika@mail.com</li>
               <li>(021) 2552-xxx</li>
            </ul>
         </li>

         <li class="menu-footer2">
            <h3>Haratika Collection</h3>
            <ul type="none">
               <li><a href="">Sneakers</a></li>
               <li><a href="">Athletic Kicks</a></li>
               <li><a href="">Converse</a></li>
               <li><a href="">Pantopel</a></li>
            </ul>
         </li>

         <li class="menu-footer3">
            <h3>Follow us on</h3>
            <ul type="none">
               <li>
                  <img src="assets/images/gambar_twiter.png" alt="twiter" />
                  <a href="">twiter</a>
               </li>
               <li>
                  <img src="assets/images/gambar_instragram.png" alt="instragram" />
                  <a href="">instragram</a>
               </li>
               <li>
                  <img src="assets/images/gambar_facebook.png" alt="facebook" />
                  <a href="">facebook</a>
               </li>
            </ul>
         </li>
      </ul>
      <p>Copyright © 2021 Hatarika. co All Rights Reserved.</p>
   </footer>
</body>

</html>