<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="loggedin_acc.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <style>
      .current {
        background-color: rgba(211, 211, 211, 0.8);
        font-weight: 500;
      }
    </style>
        <title>Pangasinan Travels - Home</title>

  </head>
  <body>
    <header>
        
      <div class="nav">
        <a href="search.html">Search</a>
        <a href="#" class="current">Home</a>
      </div>
      <div class="logo_text">
        <h2>Pangasinan Travels</h2>
      </div>
      <div class="nav">
        <a href="places.html">Places To Go</a>
        <a href="about.html">About Us</a>
      </div>
    </header>
    <main>
      <picture>
        <source
          class="display_image"
          media="(min-width: 800px)"
          srcset="images\patar_beach.png"
          alt="Welcome to Pangasinan"
        />
        <img
          class="display_image"
          src="images\patar_beach.png"
          alt="Welcome to Pangasinan"
        />
      </picture>
      <!-- New text content -->
      <div class="hero-text">
        <h1>Welcome back!</h1>
        <?php
        echo '<p>' . $user['name'] . '</p>';
        ?>
        <a href="home_page.html" class="cta-btn">Log out ></a>
      </div>
      <div class="places">
        <div class="tab">
          <button
            class="tabLink"
            id="default"
            onclick="openCity(event, 'Lingayen')"
          >
            Lingayen
          </button>
          <button class="tabLink" onclick="openCity(event, 'Binmaley')">
            Binmaley
          </button>
          <button class="tabLink" onclick="openCity(event, 'Manaoag')">
            Manaoag
          </button>
          <button class="tabLink" onclick="openCity(event, 'Bolinao')">
            Bolinao
          </button>
          <button class="tabLink" onclick="openCity(event, 'Sual')">
            Sual
          </button>
          <button class="tabLink" onclick="openCity(event, 'Alaminos')">
            Alaminos
          </button>
          <button class="tabLink" onclick="openCity(event, 'Burgos')">
            Burgos
          </button>
          <button class="tabLink" onclick="openCity(event, 'Dasol')">
            Dasol
          </button>
        </div>
        <div class="content">
          <div class="title_container">
            <div class="line"></div>
            <div class="label">
              <h3 id="title"></h3>
            </div>
            <div class="line"></div>
          </div>
          <div class="description">
            <p id="description">Description</p>
          </div>
          <div class="map">
            <img id="map" src="#" />
          </div>
          <div class="title_container">
            <div class="line"></div>
            <div class="label">
              <h5>DESTINATIONS</h5>
            </div>
            <div class="line"></div>
          </div>
          <div class="destinations">
            <div class="image">
              <img id="spot1_image" src="#" />
            </div>
            <div class="image">
              <img id="spot2_image" src="#" />
            </div>
            <div class="desc">
              <p id="spot1_description"></p>
            </div>
            <div class="desc">
              <p id="spot2_description"></p>
            </div>
          </div>
          <div class="title_container">
            <div class="line"></div>
            <div class="label">
              <h5>ACTIVITIES</h5>
            </div>
            <div class="line"></div>
          </div>
          <div class="activities">
            <ul id="activities"></ul>
          </div>
          <div class="title_container">
            <div class="line"></div>
            <div class="label">
              <h5>GALLERY</h5>
            </div>
            <div class="line"></div>
          </div>
          <div class="gallery" id="gallery"></div>
        </div>

        <section class="reviews-section">
            <h2><em>Reviews</em></h2>
            <div class="rating-filter">
                <button class="star-rating">★★★★★</button>
                <button class="star-rating">★★★★☆</button>
                <button class="star-rating">★★★☆☆</button>
                <button class="star-rating">★★☆☆☆</button>
                <button class="star-rating">★☆☆☆☆</button>
            </div>
            <div class="reviews-container">
                <div class="review-card">
                    <div class="reviewer">⚫ Juan Gonzales</div>
                    <p>“ The place is very nice and clean. The people are friendly, good for family bonding.”</p>
                </div>
                <div class="review-card">
                    <div class="reviewer">⚫ Juan Gonzales</div>
                    <p>“ The place is very nice and clean. The people are friendly, good for family bonding.”</p>
                </div>
                <div class="review-card">
                    <div class="reviewer">⚫ Juan Gonzales</div>
                    <p>“ The place is very nice and clean. The people are friendly, good for family bonding.”</p>
                </div>
                <div class="review-card">
                    <div class="reviewer">⚫ Juan Gonzales</div>
                    <p>“ The place is very nice and clean. The people are friendly, good for family bonding.”</p>
                </div>
            </div>
            <div class="pagination">
                <button class="prev">&lt;</button>
                <button class="next">&gt;</button>
            </div>
        </section>
    </main>
      
    <footer class="footer-99382">
        <div class="container">
          <div class="row">
            <div class="column1">
                <a href="#" class="footer-site-logo" style="color: white;">Pangasinan Travels</a>
                <p style="color: white;">Pangasinan Travels is your ultimate travel companion, helping you discover destinations, 
                    plan seamless itineraries, and track your budget—all in one place. Start exploring and make every trip unforgettable!</p>
            </div>
            <div class="column2">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li class="list-unstyled1"><a href="home_page.html">Home</a></li>
                    <li><a href="places.html">Places To Go</a></li>
                    <li><a href="home_page.html">Itinerary Planner</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </div>
            <div class="column3">
                <h3>Contact</h3>
                <p style="color: white;">pangasintravels@gmail.com</p>
                <p style="color: white;">+639954423018</p>
            </div>
            <div class="column4">
                <h3>Follow Us</h3>
                <ul class="social list-unstyled">
                    <li><a href="#" class="pl-0"><span class="icon-instagram"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-pinterest"></span></a></li>
                    <li><a href="#"><span class="icon-dribbble"></span></a></li>
                  </ul>
            </div>
          </div>
          <div class="row-copyright">
            <div class="col-12">
              <div class="copyright mt-5 pt-5">
                <p style="color: white;"><small>© 2025 Pangasinan Travels. All rights reserved.</small></p>
              </div>
            </div>
          </div> 
        </div>
      </footer>
    <script>
        const locations = {
            "Lingayen": {
                "name": "Lingayen",
                "description": "Lingayen is the Capital  of Pangasinan. It is known for its bagoong making industry. The word 'Lingayen' was from the Pangasinan languuage word 'lingawen' meaning 'to look back.'",
                "map": "lingayen.jpg",
                "spot1Image": "lingayen1.jpg",
                "spot2Image": "lingayen2.jpg",
                "spot1Desc": "The Lingayen Beach and Baywalk- Which Offers a Free, Tranquil, And Scenic Spot For All Families, Friendships, And Other Groups’ Gathering. It Is Also a Perfect Place for Deep Thoughts. Likewise, It Has Been Known as A Favorite Site for Pictorials.",
                "spot2Desc": "The Princess Urduja Palace is named after the legendary warrior Princess Urduja, a legendary 14th-century warrior princess of the dynastic Kingdom of Tawalisi in Pangasinan. Urduja is often described as tall and beautiful with golden bronze skin and dark hair, clad in gold, and was famous for leading an army of strong women warrior’s adept in sword fighting and horseback riding called Kinalakihan or Amazons. The Urduja House currently serves as the governor’s official residence and guest house.",
                "activities": [
                    "Historical Site Visit",
                    "Photography",
                    "Swimming",
                    "Food Trip"
                ],
                "gallery": [
                    "gallery_lingayen1.jpg",
                    "gallery_lingayen2.jpg",
                    "gallery_lingayen3.jpg"
                ]
            },
            "Binmaley": {
                "name": "Binmaley",
                "description": "Binmaley, a municipality located in the Province of Pangasinan in the northern part of the Philippines, is a destination that should not be missed by travelers who want to experience the rich culture and natural beauty of the country.",
                "map": "binmaley.jpg",
                "spot1Image": "binmaley1.jpg",
                "spot2Image": "binmaley2.jpg",
                "spot1Desc": "Binmaley Beach - Situated near the center of the municipality of Binmaley, the Binmaley Beach is easily accessible and is considered to be one of the cleanest and most scenic beaches in Pangasinan. Aside from swimming, visitors can also take motorboat rides being offered by local fishermen who rent out their boats for such tourist activities. Visitors can also try surfing or simply swim in the usually calm waters of the beach.",
                "spot2Desc": "Our Lady of the Purification Parish Church- Our Lady of the Purification Parish Church is a historical gem nestled along the western coast of Pangasinan in Poblacion, Binmaley. This church is mostly visited to its historical significance and architectural features.",
                "activities": [
                    "Boat Riding",
                    "Food Trip",
                    "Photography",
                    "Historical Visit Site"
                ],
                "gallery": [
                    "gallery_binmaley1.jpg",
                    "gallery_binmaley2.jpg",
                    "gallery_binmaley3.jpg"
                ]
            },
            "Manaoag": {
                "name": "Manaoag",
                "description": "Manaoag is a town in the province of Pangasinan, located in the northern part of the Philippines. It is known for its centuries-old church, the Our Lady of the Most Holy Rosary of Manaoag Church, which is considered as one of the most significant religious sites in the country.",
                "map": "manaoag.jpg",
                "spot1Image": "manaoag1.jpg",
                "spot2Image": "manaoag2.jpg",
                "spot1Desc": "Our Lady of Manaoag Museum - is the best place to get a firm grasp of the real history of Manaoag. It is dimly lit and quiet, housing a vast collection of artefacts and vestments, gifts to the Virgin Mary, and other religious items associated with the area. Photography is strictly forbidden in the museum to protect the sanctity of its contents and prevent you from disturbing other visitors.",
                "spot2Desc": "The Rosary Garden- It’s the perfect spot for those looking for a serene place to meditate and reflect. The Rosary Garden was explicitly designed for that purpose. Visitors decide upon their intentions for their Rosary as they enter through the oval entrance, which contains a crucifix. Then, one makes their way to the statues around the garden; each describes the mysteries of the Rosary.",
                "activities": [
                    "Historical Visit Site",
                    "Spiritual Solace"
                ],
                "gallery": [
                    "gallery_manaoag1.jpg",
                    "gallery_manaoag2.jpg",
                    "gallery_manaoag3.jpg"
                ]
            },
            "Bolinao": {
                "name": "Bolinao",
                "description": "Bolinao, the Hidden Jewel of the North a captivating destination in the Philippines, is renowned for its natural beauty and diverse attractions.",
                "map": "bolinao.jpg",
                "spot1Image": "bolinao1.jpg",
                "spot2Image": "bolinao2.jpg",
                "spot1Desc": "Patar White Sand Beach in Bolinao, Pangasinan is a gem among the pristine beauty and captivating features such as. It is known for its Golden Sand and Crystal-Clear Waters, Breathtaking Views, Public Beach with No Entrance Fees and more.",
                "spot2Desc": "Enchanted Cave is a natural cave formation located inside a privately owned resort along the coast of Bolinao. It is said to be a huge coral reef that emerged underwater as a result of evolution. The cave holds a unique underground pool filled with turquoise water, which is estimated to be around 3 ft to 6 ft deep2. It also houses a trail of hundreds of corals that look like rocks. Visitors are provided with safety equipment and gear prior to descending to the cave.",
                "activities": [
                    "Camping only in the vicinity.",
                    "Photography",
                    "Historic Site Visit",
                    "Beach Volleyball"
                ],
                "gallery": [
                    "gallery_bolinao1.jpg",
                    "gallery_bolinao2.jpg",
                    "gallery_bolinao3.jpg"
                ]
            },
            "Sual": {
                "name": "Sual",
                "description": "Sual, Pangasinan is a coastal town known for its beautiful beaches and as a hub for power generation in the Philippines.",
                "map": "sual.jpg",
                "spot1Image": "sual1.jpg",
                "spot2Image": "sual2.jpg",
                "spot1Desc": "Masamerey Beach known for its fine white sand and crystal-clear blue waters, it offers a more secluded alternative to the often crowded beaches found in more popular tourist spots.The beach is lined with coconut trees and has a very rustic charm",
                "spot2Desc": "Cabalitian Island It's known for its beautiful beaches, clear waters, and tranquil environment, making it a great destination for those looking to escape the hustle and bustle of city life.",
                "activities": [
                    "Camping",
                    "Sunset Viewing",
                    "Renting Kayak",
                    "Snorkeling"
                ],
                "gallery": [
                    "gallery_sual1.jpg",
                    "gallery_sual2.jpg",
                    "gallery_sual3.jpg"
                ]
            },
            "Alaminos": {
                "name": "Alaminos",
                "description": "Alaminos is known as the Home of the Hundred Islands.  A place with separated Islands yet still a city of united people with various ideas and culture and a single faith to the Lord.",
                "map": "alaminos.jpg",
                "spot1Image": "alaminos1.jpg",
                "spot2Image": "alaminos2.jpg",
                "spot1Desc": "Hundred Islands features around 124 separate islands and islets (123 at high tide and one more visible at low tide) scattered over an area of about 1,844 hectares in Lingayen Gulf.",
                "spot2Desc": "Cuenco Cave is essentially a small cavern that doubles as a tunnel, connecting two parts of the same island. The most distinctive feature of Cuenco Cave is that it can be accessed both by foot and by swimming, depending on the tide.",
                "activities": [
                    "Island Hoping",
                    "Cave Exploring",
                    "Sunset Viewing",
                    "Food Trip"
                ],
                "gallery": [
                    "gallery_alaminos1.jpg",
                    "gallery_alaminos2.jpg",
                    "gallery_alaminos3.jpg"
                ]
            },
            "Burgos": {
                "name": "Burgos",
                "description": "Burgos is known for its agricultural industry, particularly rice and corn production. The town also has some scenic spots and tourist attractions, including beaches along the Lingayen Gulf and historical landmarks like churches and old structures. If you're planning a visit, you might enjoy exploring the local culture, sampling traditional Pangasinense cuisine, and taking in the natural beauty of the area.",
                "map": "burgos.jpg",
                "spot1Image": "burgos1.jpg",
                "spot2Image": "burgos2.jpg",
                "spot1Desc": "Cabongaoan beach offers visitors a serene and picturesque environment to unwind and enjoy nature's beauty. The beach is known for its peaceful atmosphere, making it an ideal destination for those seeking relaxation away from the hustle and bustle of city life. Additionally, Cabongaoan Beach is often praised for its stunning sunsets, providing visitors with breathtaking views to complement their beach experience.",
                "spot2Desc": "Originally called Depth Pool, locals coined the term “Death Pool” because it suited the site's thrilling effect. The Death Pool is a natural pool located on the far right side of the beach.",
                "activities": [
                    "Island Hoping",
                    "Crystal Kayak",
                    "Banana Boat",
                    "Diving"
                ],
                "gallery": [
                    "gallery_burgos1.jpg",
                    "gallery_burgos2.jpg",
                    "gallery_burgos3.jpg"
                ]
            },
            "Dasol": {
                "name": "Dasol",
                "description": "Dasol is known for its serene coastal areas and as a developing spot for tourists seeking tranquility away from more commercialized destinations.",
                "map": "dasol.jpg",
                "spot1Image": "dasol1.jpg",
                "spot2Image": "dasol2.jpg",
                "spot1Desc": "Tambobong Beach is known for its pristine white sand and clear blue waters. The beach is ideal for swimming, sunbathing, and enjoying the scenic views of the sea and nearby islands.",
                "spot2Desc": "Colibra Island is particularly known for its pristine beauty and serene environment, making it a popular destination for tourists seeking tranquility and a natural setting. The island is relatively untouched, featuring white sandy beaches and clear waters ideal for snorkeling and swimming.",
                "activities": [
                    "Explore Caves",
                    "Island Hoping",
                    "Camping",
                    "Sunset Viewing"
                ],
                "gallery": [
                    "gallery_dasol1.jpg",
                    "gallery_dasol2.jpg",
                    "gallery_dasol3.jpg"
                ]
            }
        };

        const defaultOpen = document.getElementById("default");
        defaultOpen.click();
        loadCity(defaultOpen.textContent);

        function openCity(evt, cityName) {
            var i, tabLinks;
            tabLinks = document.getElementsByClassName("tabLink");
            for (i = 0; i < tabLinks.length; i++) {
                tabLinks[i].className = tabLinks[i].className.replace(" active", "");
            }
            evt.currentTarget.className += " active";
            loadCity(cityName);
        }

        function loadCity(cityName) {
            const title = document.getElementById("title");
            const description = document.getElementById("description");
            const map = document.getElementById("map");
            const spot1Image = document.getElementById("spot1_image");
            const spot2Image = document.getElementById("spot2_image");
            const spot1Desc = document.getElementById("spot1_description");
            const spot2Desc = document.getElementById("spot2_description");
            const activities = document.getElementById("activities");
            const gallery = document.getElementById("gallery");

            title.textContent = locations[cityName].name;
            description.textContent = locations[cityName].description;
            map.src = 'images/' + locations[cityName].map;
            map.setAttribute('alt', 'Map of ' + locations[cityName].name);
            spot1Image.src = 'images/' + locations[cityName].spot1Image;
            spot2Image.src = 'images/' + locations[cityName].spot2Image;
            spot1Image.setAttribute('alt', 'Tourist destination in ' + locations[cityName].name);
            spot2Image.setAttribute('alt', 'Tourist destination in ' + locations[cityName].name);
            spot1Desc.textContent = locations[cityName].spot1Desc;
            spot2Desc.textContent = locations[cityName].spot2Desc;
            activities.innerHTML = '';
            locations[cityName].activities.forEach(activity => {
                const li = document.createElement('li');
                li.textContent = activity;
                activities.appendChild(li);
            });
            gallery.innerHTML = '';
            locations[cityName].gallery.forEach(image => {
                const div = document.createElement('div');
                const img = document.createElement('img');
                img.src = "images/" + image;
                div.appendChild(img);
                gallery.appendChild(div);
            });
        }

        const reviews = [
            { name: "Juan Gonzales", text: "The place is very nice and clean. The people are friendly, good for family bonding." },
            { name: "Juan Gonzales", text: "Great experience! Definitely coming back." },
            { name: "Juan Gonzales", text: "Loved the ambiance and hospitality." },
            { name: "Juan Gonzales", text: "A must-visit place for nature lovers." },
            { name: "Juan Gonzales", text: "Perfect getaway for the weekend." },
            { name: "Juan Gonzales", text: "Highly recommended for families." }
        ];
        
        let currentPage = 0;
        const reviewsPerPage = 4;
        
        function displayReviews() {
            const container = document.getElementById("reviewsContainer");
            container.innerHTML = "";
            const start = currentPage * reviewsPerPage;
            const end = start + reviewsPerPage;
            const pageReviews = reviews.slice(start, end);
            
            pageReviews.forEach(review => {
                const reviewCard = document.createElement("div");
                reviewCard.classList.add("review-card");
                reviewCard.innerHTML = `<div class="reviewer">⚫ ${review.name}</div><p>“ ${review.text}”</p>`;
                container.appendChild(reviewCard);
            });
        }
        
        function nextPage() {
            if ((currentPage + 1) * reviewsPerPage < reviews.length) {
                currentPage++;
                displayReviews();
            }
        }
        
        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
                displayReviews();
            }
        }
        
        displayReviews();
    </script>
  </body>
</html>
