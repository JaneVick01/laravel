<!DOCTYPE html>
<html>
<head>
    <title>Cat Image</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #FFB7CE;
            font-family: 'Arial', sans-serif;
        }

        .cat-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;
            margin-top: 1rem;
        }

        .cat-image {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 1rem;
            margin-bottom: 1rem;
            border: 4px solid #A0A0A0;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        }

        .top-left {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }

        .top-right {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        .button-container {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .button-container > * {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-4xl font-bold">
        Welcome to my Cat API&nbsp;
        <span style="font-size: 24px;">✨🐱</span>
    </h1>
    <a href="/bars" class="top-left">
        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
            MAIN CRUD PAGE
        </button>
    </a>
    <div class="button-container">
        <button id="new-cat" class="top-right bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Refresh button
        </button>
        <div class="mt-4">
            <label for="cat-count" class="text-lg font-semibold">Number of Cat Images (max 3):</label>
            <input type="number" id="cat-count" class="ml-2 p-2 border border-gray-300 rounded">
            <button id="cat-count-button" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded ml-2">
                Show Cats
            </button>
        </div>
    </div>
    <div id="cat-container" class="cat-container mt-4"></div>
</div>

<script>
    const newCatButton = document.getElementById('new-cat');
    const catContainer = document.getElementById('cat-container');
    const catCountInput = document.getElementById('cat-count');
    const catCountButton = document.getElementById('cat-count-button');

    function fetchNewCat() {
        fetch("https://cataas.com/cat")
            .then(response => response.blob())
            .then(blob => {
                const imageUrl = URL.createObjectURL(blob);
                const img = document.createElement("img");
                img.src = imageUrl;
                img.classList.add('cat-image');
                catContainer.appendChild(img);
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }

    newCatButton.addEventListener('click', () => {
        location.reload();
    });

    catCountButton.addEventListener('click', () => {
        const count = parseInt(catCountInput.value);
        const maxCount = Math.min(count, 3); // Maximum of 3 cat images
        if (!isNaN(maxCount)) {
            catContainer.innerHTML = '';
            for (let i = 0; i < maxCount; i++) {
                fetchNewCat();
            }
        }
    });

    // Load initial cat image
    fetchNewCat();
</script>
</body>
</html>
