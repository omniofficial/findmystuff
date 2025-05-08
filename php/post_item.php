<?php

include 'config.php';

// Initialize variables for error messages
$name_error = $description_error = $location_error = $image_error = "";
$isFormValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = mysqli_real_escape_string($conn, $_POST["item-name"]);
    $description = mysqli_real_escape_string($conn, $_POST["item-description"]);
    $location = mysqli_real_escape_string($conn, $_POST["item-location"]);
    $image_url = ""; // Initialize image URL

    // Perform validation
    if (empty($name)) {
        $name_error = "Please enter item name.";
        $isFormValid = false;
    }
    if (empty($description)) {
        $description_error = "Please enter item description.";
        $isFormValid = false;
    }
    if (empty($location)) {
        $location_error = "Please enter the location where the item was lost or found.";
        $isFormValid = false;
    }

    // Handle image upload (if an image was provided)
    if (isset($_FILES["item-image"]) && $_FILES["item-image"]["error"] == 0) {
        $allowed_types = array("image/jpeg", "image/png", "image/gif");
        if (in_array($_FILES["item-image"]["type"], $allowed_types)) {
            $upload_dir = "../images/"; // Corrected path
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);  //create the uploads directory if it does not exist
            }
            $image_name = uniqid() . "_" . $_FILES["item-image"]["name"];
            $image_path = $upload_dir . $image_name;
            if (move_uploaded_file($_FILES["item-image"]["tmp_name"], $image_path)) {
                $image_url = $image_path; // Save the path to the database
            } else {
                $image_error = "Failed to upload image."; // error message
                $isFormValid = false;
            }
        } else {
            $image_error = "Invalid file type. Please upload a JPEG, PNG, or GIF image."; // error message
            $isFormValid = false;
        }
    } else {
        $image_error = "Please upload an image.";
        $isFormValid = false;
    }


    if ($isFormValid) {
        // Insert data into the database
        $sql = "INSERT INTO items (name, description, location, image_url)
                VALUES ('$name', '$description', '$location', '$image_url')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Item posted successfully!');</script>";
            // Redirect back to the post_item.php page to clear the form
            header("Location: post_item.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Post an Item - FindMyStuff</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link href="../styles.css" rel="stylesheet" />
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
                            href="../index.php"  // Corrected path
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="../php/find_items.php" // Corrected path
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Find</a
                        >
                    </li>
                    <li>
                        <a
                            href="../php/post_item.php"  // Corrected path
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >Post</a
                        >
                    </li>
                    <li>
                        <a
                            href="../php/about.php"
                            class="hover:text-purple-300 transition duration-300 text-lg"
                            >About</a
                        >
                    </li>
                </ul>
            </nav>
        </header>

        <main class="container mx-auto mt-8 p-4">
            <form class="post-item-form" id="post-item-form" method="POST" action="post_item.php" enctype="multipart/form-data">
                <h1>Post an Item</h1>
                <div class="form-group">
                    <label for="item-name">Item Name</label>
                    <input
                        type="text"
                        id="item-name"
                        name="item-name"
                        class="form-control"
                        placeholder="Enter item name"
                        required
                        value="<?php echo isset($_POST['item-name']) ? htmlspecialchars($_POST['item-name']) : ''; ?>"
                    />
                    <div id="item-name-error" class="text-danger"><?php echo $name_error; ?></div>
                </div>
                <div class="form-group">
                    <label for="item-description">Item Description</label>
                    <textarea
                        id="item-description"
                        name="item-description"
                        class="form-control"
                        placeholder="Enter item description"
                        required
                        ><?php echo isset($_POST['item-description']) ? htmlspecialchars($_POST['item-description']) : ''; ?></textarea>
                    <div id="item-description-error" class="text-danger"><?php echo $description_error; ?></div>
                </div>
                <div class="form-group">
                    <label for="item-location">Location</label>
                    <input
                        type="text"
                        id="item-location"
                        name="item-location"
                        class="form-control"
                        placeholder="Enter the location where the item was lost or found"
                        required
                        value="<?php echo isset($_POST['item-location']) ? htmlspecialchars($_POST['item-location']) : ''; ?>"
                    />
                    <div id="item-location-error" class="text-danger"><?php echo $location_error; ?></div>
                </div>
                <div class="form-group">
                    <label for="item-image">Item Image</label>
                    <input
                        type="file"
                        id="item-image"
                        name="item-image"
                        class="form-control-file"
                        accept="image/*"
                        required
                    />
                    <div id="item-image-error" class="text-danger"><?php echo $image_error; ?></div>
                </div>
                <div class="preview-container" id="image-preview-container">
                    <img
                        id="image-preview"
                        src="#"
                        alt="Image preview"
                        style="display: none"
                    />
                    <p id="image-preview-text" style="display: none"></p>
                </div>
                <button type="submit" class="btn btn-primary" id="post-button">
                    Post Item
                </button>
            </form>
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
        <script>
            const postItemForm = document.getElementById("post-item-form");
            const itemNameInput = document.getElementById("item-name");
            const itemDescriptionInput =
                document.getElementById("item-description");
            const itemLocationInput = document.getElementById("item-location");
            const itemImageInput = document.getElementById("item-image");
            const postButton = document.getElementById("post-button");

            const itemNameError = document.getElementById("item-name-error");
            const itemDescriptionError = document.getElementById(
                "item-description-error"
            );
            const itemLocationError = document.getElementById(
                "item-location-error"
            );
            const itemImageError = document.getElementById("item-image-error");

            const imagePreview = document.getElementById("image-preview");
            const imagePreviewContainer = document.getElementById(
                "image-preview-container"
            );
            const imagePreviewText =
                document.getElementById("image-preview-text");

            function validateInput(inputElement, errorMessageElement, message) {
                if (!inputElement.value.trim()) {
                    errorMessageElement.textContent = message;
                    return false;
                } else {
                    errorMessageElement.textContent = "";
                    return true;
                }
            }

            function validateImage(inputElement, errorMessageElement) {
                if (!inputElement.files || inputElement.files.length === 0) {
                    errorMessageElement.textContent = "Please upload an image.";
                    return false;
                } else {
                    const file = inputElement.files[0];
                    const validImageTypes = [
                        "image/jpeg",
                        "image/png",
                        "image/gif",
                    ];

                    if (!validImageTypes.includes(file.type)) {
                        errorMessageElement.textContent =
                            "Invalid file type. Please upload a JPEG, PNG, or GIF image.";
                        return false;
                    } else if (file.size > 2 * 1024 * 1024) {
                        errorMessageElement.textContent =
                            "Image size exceeds 2MB. Please upload a smaller image.";
                        return false;
                    } else {
                        errorMessageElement.textContent = "";
                        return true;
                    }
                }
            }

            itemImageInput.addEventListener("change", function () {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        imagePreview.style.display = "block";
                        imagePreviewText.style.display = "none";
                        imagePreview.src = e.target.result;
                    };

                    reader.readAsDataURL(this.files[0]);
                } else {
                    imagePreview.style.display = "none";
                    imagePreviewText.style.display = "block";
                    imagePreview.src = "";
                }
            });

            postItemForm.addEventListener("submit", (event) => {
                let isFormValid = true;
                event.preventDefault();


                isFormValid = isFormValid && validateInput(
                    itemNameInput,
                    itemNameError,
                    "Please enter item name."
                );
                isFormValid = isFormValid && validateInput(
                    itemDescriptionInput,
                    itemDescriptionError,
                    "Please enter item description."
                );
                isFormValid = isFormValid && validateInput(
                    itemLocationInput,
                    itemLocationError,
                    "Please enter the location where the item was lost or found."
                );
                isFormValid = isFormValid && validateImage(itemImageInput, itemImageError);


                if (isFormValid) {
                    postButton.disabled = true;
                    postItemForm.submit(); // Submit the form
                   //No Alert message
                }
            });
        </script>
    </body>
</html>