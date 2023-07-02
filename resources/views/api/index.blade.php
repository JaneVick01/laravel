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
        .cat-image {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-top: 1rem;
            border: 4px solid #A0A0A0;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        }
        .top-left {
            position: absolute;
            top: 1rem;
            left: 1rem;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-4xl font-bold">
        Welcome to my Cat API&nbsp;
        <span style="font-size: 24px;">✨🐱</span>
    </h1>
    <button id="new-cat" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
        New Cat Image
    </button>
    <a href="/bars" class="top-left">
        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
            MAIN CRUD PAGE
        </button>
    </a>
    <div id="cat-container" class="mt-4"></div>
</div>

<script>
    const newCatButton = document.getElementById('new-cat');
    const catContainer = document.getElementById('cat-container');

    function fetchNewCat() {
        fetch("https://cataas.com/cat")
            .then(response => response.blob())
            .then(blob => {
                const imageUrl = URL.createObjectURL(blob);
                const img = document.createElement("img");
                img.src = imageUrl;
                img.classList.add('cat-image');
                catContainer.innerHTML = '';
                catContainer.appendChild(img);
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }

    newCatButton.addEventListener('click', fetchNewCat);

    // Load initial cat image
    fetchNewCat();
</script>
</body>
</html>
