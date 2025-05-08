<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FindMyStuff</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link href="styles.css" rel="stylesheet" />
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
                            href="index.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="php/find_items.php"  
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Find</a
                        >
                    </li>
                    <li>
                        <a
                            href="php/post_item.php"  
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Post</a
                        >
                    </li>
                    <li>
                        <a
                            href="php/about.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >About</a
                        >
                    </li>
                </ul>
            </nav>
        </header>

        <main class="container mx-auto mt-8 p-4">
            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700"
            >
                <h1 class="text-3xl font-semibold text-purple-400 mb-4">
                    Welcome to FindMyStuff
                </h1>
                <p class="text-gray-300 mb-4 text-lg">
                    Whether it’s a cherished heirloom, a lost phone, or a
                    forgotten backpack left behind at the bus stop, FindMyStuff
                    gives you the tools to act quickly and increase the chances
                    of recovery. Our intuitive platform allows you to submit
                    detailed reports, upload photos, and add location data, all
                    to help others identify and return lost items with ease.
                </p>
                <p class="text-gray-300 mb-4 text-lg">
                    We believe that returning a lost item isn’t just a kind act,
                    it’s a way to build stronger, more connected communities.
                    That’s why FindMyStuff is built around trust, transparency,
                    and a commitment to public service. With every report
                    submitted, you're not just solving a personal problem,
                    you're contributing to a larger effort to make your
                    neighborhood more caring and accountable.
                </p>
                <p class="text-gray-300 mb-4 text-lg first-paragraph">
                    Start your journey with FindMyStuff today and become part of
                    a growing movement to turn small actions into meaningful
                    impact.
                </p>
            </section>

            <section class="cta-container">
                <p class="cta-text">COME FIND YOUR LOST ITEMS...</p>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 video-section"
            >
                <div class="video-container">
                    <video autoplay loop muted plays-inline>
                        <source src="images/editedvideo.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 community-reunion-section"
            >
                <div class="text-container">
                    <h2 class="text-2xl font-semibold text-purple-400 mb-4">
                        About Our Community
                    </h2>
                    <p class="text-gray-300 text-lg">
                        We are a community-driven platform dedicated to helping
                        people find their lost items and reunite them with their
                        owners. Our users are at the heart of everything we do.
                    </p>
                    <p class="text-gray-300 mt-4 text-lg">
                        By fostering a spirit of collaboration and trust, we aim
                        to create a safe and effective space for everyone to
                        participate in the search and recovery process.
                    </p>
                </div>
                <div class="image-container">
                    <img
                        src="images/pexels-labim-tamang-2151867634-31897683.jpg"
                        alt="Community Illustration"
                    />
                </div>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 community-reunion-section"
            >
                <div class="image-container">
                    <img
                        src="images/pexels-cottonbro-8388223.jpg"
                        alt="Lost Item Found"
                    />
                </div>
                <div class="text-container">
                    <h2 class="text-2xl font-semibold text-purple-400 mb-4">
                        Extensive Search Methods
                    </h2>
                    <p class="text-gray-300 text-lg">
                        Our platform offers powerful, location-based search
                        tools that make it easy to pinpoint where an item might
                        have been lost or found. By narrowing searches to
                        specific areas, such as parks, cafes, or transit stops,
                        users can dramatically improve their chances of locating
                        missing belongings.
                    </p>
                    <p class="text-gray-300 mt-4 text-lg">
                        Whether you're retracing your steps or browsing recently
                        found items in your neighborhood, FindMyStuff helps you
                        cut through the noise. With advanced filters and
                        real-time updates, we make the process of reconnecting
                        with your lost items faster, smarter, and more personal.
                    </p>
                </div>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700"
            >
                <h2
                    class="text-2xl font-semibold text-purple-400 mb-4 flex items-center"
                >
                    <span class="mr-2 text-purple-300"></span>How to Search for
                    Items
                </h2>
                <ul
                    class="list-disc list-inside space-y-2 text-gray-300 text-lg"
                >
                    <li>Visit the <strong>Find</strong> page.</li>
                    <li>
                        Use keywords, dates, and locations to narrow your
                        search.
                    </li>
                    <li>
                        Contact the person who posted the item directly. We
                        provide a secure messaging system for your convenience.
                    </li>
                    <li>
                        You can also browse through different categories to find
                        what you are looking for.
                    </li>
                    <li>
                        Sign up for email alerts to get notified when an item
                        matching your search is posted.
                    </li>
                </ul>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700"
            >
                <h2
                    class="text-2xl font-semibold text-purple-400 mb-4 flex items-center"
                >
                    <span class="mr-2 text-purple-300"></span>Posting Rules
                </h2>
                <ol
                    class="list-decimal list-inside space-y-2 text-gray-300 text-lg"
                >
                    <li>
                        Only post real items you’ve lost or found. Providing
                        accurate information increases the chances of a
                        successful recovery.
                    </li>
                    <li>
                        Be honest and include helpful details such as a
                        description of the item, when and where it was lost or
                        found, and any identifying features.
                    </li>
                    <li>
                        No spam or misleading content. Posts that violate this
                        rule will be removed.
                    </li>
                    <li>
                        Include a clear photo of the item, if possible. This
                        helps others identify the item more easily.
                    </li>
                    <li>
                        Update your post if the item is found or returned. This
                        helps keep the platform organized.
                    </li>
                </ol>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 mb-6 border border-gray-700"
            >
                <h2
                    class="text-2xl font-semibold text-purple-400 mb-4 flex items-center"
                >
                    <span class="mr-2 text-purple-300"></span>Frequently Asked
                    Questions
                </h2>
                <div class="space-y-4">
                    <div class="faq-item border-b border-gray-700 pb-2">
                        <strong class="text-lg text-white"
                            >Is FindMyStuff free?</strong
                        >
                        <p class="text-gray-300 text-lg">
                            Yes, it's completely free for everyone. There are no
                            hidden charges or fees.
                        </p>
                    </div>
                    <div class="faq-item border-b border-gray-700 pb-2">
                        <strong class="text-lg text-white"
                            >How long do posts stay up?</strong
                        >
                        <p class="text-gray-300 text-lg">
                            Posts remain active for 30 days. You can mark your
                            post as resolved if the item is found before that.
                        </p>
                    </div>
                    <div class="faq-item border-b border-gray-700 pb-2">
                        <strong class="text-lg text-white"
                            >How do I contact the person who posted an
                            item?</strong
                        >
                        <p class="text-gray-300 text-lg">
                            We have a secure messaging system on our platform.
                            You can contact the poster directly through the
                            website without revealing your personal information.
                        </p>
                    </div>
                    <div class="faq-item">
                        <strong class="text-lg text-white"
                            >What happens if I find the item I lost
                            elsewhere?</strong
                        >
                        <p class="text-gray-300 text-lg">
                            Please update your post as resolved. This will
                            remove it from the listings and prevent others from
                            contacting you.
                        </p>
                    </div>
                </div>
            </section>

            <section
                class="bg-gray-900 rounded-lg shadow-lg p-6 border border-gray-700"
            >
                <h2 class="text-2xl font-semibold text-purple-400 mb-4">
                    More Ways We Can Help
                </h2>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-gray-300"
                >
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Community Support
                        </h3>
                        <p class="text-lg">
                            FindMyStuff is more than just a website; it's a
                            community. Connect with others in your area to help
                            each other find lost items.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Lost Pet Recovery
                        </h3>
                        <p class="text-lg">
                            We have a dedicated section for lost and found pets.
                            Post details and photos of your lost pet or a found
                            pet to help reunite them with their owner.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Found Item Storage
                        </h3>
                        <p class="text-lg">
                            If you've found an item and are willing to store it
                            safely until the owner is found, you can indicate
                            this in your post.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Partnerships
                        </h3>
                        <p class="text-lg">
                            We partner with local businesses, schools, and
                            organizations to expand our reach and help more
                            people.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Volunteer Opportunities
                        </h3>
                        <p class="text-lg">
                            Learn about volunteer opportunities to help support
                            FindMyStuff and our mission.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-purple-300">
                            Success Stories
                        </h3>
                        <p class="text-lg">
                            Read heartwarming stories of how FindMyStuff has
                            helped people reunite with their lost items.
                        </p>
                    </div>
                </div>
            </section>
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
                    © 2025 FindMyStuff. All rights reserved.
                </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    </body>
</html>