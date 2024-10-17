<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nice To Cu - Authentic Ghanaian and Continental Restaurant in Tema Community 25</title>
    <meta name="description" content="Nice To Cu is a restaurant in Tema Community 25 serving authentic Ghanaian dishes, continental meals, and non-alcoholic drinks. Dine-in, takeaway, and delivery options available. Experience the best local and global flavors with us!">
    <meta name="keywords" content="Nice To Cu, Ghanaian restaurant, Tema Community 25, local dishes, continental meals, non-alcoholic drinks, dine-in, takeaway, delivery, food delivery, Ghana food">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Nice To Cu">
    <meta property="og:title" content="Nice To Cu - Authentic Ghanaian and Continental Restaurant in Tema">
    <meta property="og:description" content="Enjoy authentic Ghanaian dishes and global meals at Nice To Cu. Located in Tema Community 25, we offer dine-in, takeaway, and delivery services, with non-alcoholic drinks available.">
    <meta property="og:url" content="https://nicetocurestaurant.com/">
    <meta property="og:type" content="restaurant">
    <meta property="og:locale" content="en_GH">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo.png" sizes="180x180" type="image/jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/logo.png">
    <link rel="stylesheet" href="./css/base.css">
</head>

<body>
<div class="index_all">
<div class="logo">
        <img src="./images/logo__.png" alt="">
    </div>
    <div class="coming_soon">
        <h1>Coming Soon</h1>
        <p>Exciting flavors are coming soon! Stay tuned for the launch of Nice To Cu restaurant, where authentic Ghanaian and continental dishes meet in Tema Community 25.</p>
    </div>
    <div class="notify">
        <form id="notifyForm" action="notify.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Notify</button>
        </form>
    </div>
</div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>You will be notified as soon as the website is updated!</p>
        </div>
    </div>

    <script>
    // Get modal element
    var modal = document.getElementById("myModal");
    var closeModal = document.getElementsByClassName("close")[0];

    // Handle form submission
    document.getElementById("notifyForm").onsubmit = function (event) {
        event.preventDefault(); // Prevent default form submission

        // Make AJAX request
        var formData = new FormData(this);
        fetch('notify.php', {
            method: 'POST',
            body: formData
        }).then(function (response) {
            return response.text();
        }).then(function (text) {
            // Show modal
            modal.style.display = "block";
        });

        // Close modal on click of close button and refresh page
        closeModal.onclick = function () {
            modal.style.display = "none";
            location.reload(); // Refresh the page
        }

        // Close modal if user clicks outside of it and refresh page
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                location.reload(); // Refresh the page
            }
        }
    };
</script>

</body>

</html>
