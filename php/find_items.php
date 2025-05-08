<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Find Lost Items</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link href="../styles.css" rel="stylesheet" />
        <style>
            .item-card {
                background-color: #1c1a24;
                border-radius: 0.5rem;
                padding: 1.5rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3),
                    0 2px 4px -1px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 1px solid #8b5cf6;
                margin-bottom: 1.5rem;
            }

            .item-card:hover {
                transform: translateY(-0.5rem);
                box-shadow: 0 6px 8px -1px rgba(0, 0, 0, 0.4),
                    0 3px 6px -1px rgba(0, 0, 0, 0.3);
            }

            .item-card h2 {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 1rem;
                color: #d81b60
            }

            .item-card p {
                font-size: 1rem;
                margin-bottom: 0.75rem;
                color: #d1d5db;
            }

            .item-card img {
                width: 100%;
                max-height: 200px;
                object-fit: cover;
                border-radius: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid #4b5563;
            }

            .location {
                font-style: italic;
                color: #a3e635;
            }

            #search-box {
                width: 100%;
                padding: 0.75rem;
                border-radius: 0.375rem;
                border: 1px solid #4b5563;
                background-color: #282633;
                color: #ffffff;
                font-size: 1rem;
                transition: border-color 0.15s ease-in-out,
                    box-shadow 0.15s ease-in-out;
            }

            #search-box:focus {
                border-color: #6ee7b7;
                box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.5);
                outline: none;
            }

            #no-items-message {
                color: #f87171;
                font-size: 1.25rem;
                text-align: center;
                margin-top: 2rem;
            }
        </style>
    </head>
    <body class="bg-gray-800">
        <header
            class="bg-gray-900 text-white py-4 flex justify-between items-center shadow-md sticky top-0 z-10 rounded-md"
        >
            <div class="logo text-xl font-bold ml-6">FindMyStuff</div>
            <nav class="mr-6">
                <ul
                    class="nav-links flex space-x-4"
                    style="list-style-type: none"
                >
                    <li>
                        <a
                            href="../index.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="find_items.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Find</a
                        >
                    </li>
                    <li>
                        <a
                            href="post_item.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Post</a
                        >
                    </li>
                    <li>
                        <a
                            href="about.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >About</a
                        >
                    </li>
                </ul>
            </nav>
        </header>
        <main class="container mx-auto">
            <h1
                class="text-3xl font-semibold text-purple-400 mb-6 text-center"
                style="margin-top: 2rem"
            >
                Lost and Found Items
            </h1>
            <input
                type="text"
                id="search-box"
                placeholder="Search for items..."
                class="w-full rounded-md p-4 mb-6 bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-400"
            />
            <div
                id="lost-items-section"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
            >
                <?php
                include 'config.php';

                $sql = "SELECT * FROM items ORDER BY date_posted DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item-card">';
                        if ($row['image_url']) {
                            echo '<img src="' .
                                $row['image_url'] .
                                '" alt="Item">';
                        }
                        echo '<h2>' . $row['name'] . '</h2>';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '<p class="location">Location: ' .
                            $row['location'] .
                            '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p id="no-items-message">No items found.</p>';
                }
                $conn->close();
                ?>
            </div>
        </main>
        <footer
            class="bg-gray-900 text-gray-300 py-4 mt-8 rounded-md border-t border-gray-700"
        >
            <div class="container mx-auto">
                <div
                    class="flex flex-col md:flex-row items-center justify-between"
                >
                    <div
                        class="logo text-lg font-semibold ml-6 text-purple-400 mb-4 md:mb-0"
                        style="margin-left: 0"
                    >
                        FindMyStuff
                    </div>
                    <div
                        class="flex flex-col md:flex-row items-center gap-4 mr-6"
                    >
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Contact</a
                        >
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Help</a
                        >
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Privacy</a
                        >
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Terms</a
                        >
                    </div>
                    <div class="flex gap-4 mt-4 md:mt-0">
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300"
                        >
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300"
                        >
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a
                            href="#"
                            class="hover:text-purple-300 transition duration-300"
                        >
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-4 text-sm text-gray-400">
                    &copy;
                    <?php echo date("Y"); ?>
                    FindMyStuff. All rights reserved.
                </div>
            </div>
        </footer>
        <script>
            //search js
            const searchBox = document.getElementById("search-box");
            const lostItemsSection = document.getElementById("lost-items-section");
            const noItemsMessage = document.getElementById("no-items-message");

            searchBox.addEventListener("input", (event) => {
                const query = event.target.value.toLowerCase();
                const itemCards =
                    lostItemsSection.getElementsByClassName("item-card");
                let found = false;

                for (let i = 0; i < itemCards.length; i++) {
                    const card = itemCards[i];
                    const name = card
                        .querySelector("h2")
                        .textContent.toLowerCase();
                    const description = card
                        .querySelector("p")
                        .textContent.toLowerCase();
                    const location = card
                        .querySelector(".location")
                        .textContent.toLowerCase();

                    if (
                        name.includes(query) ||
                        description.includes(query) ||
                        location.includes(query)
                    ) {
                        card.style.display = "";
                        found = true;
                    } else {
                        card.style.display = "none";
                    }
                }
                noItemsMessage.style.display = found ? "none" : "block";
            });
        </script>
    </body>
</html>



