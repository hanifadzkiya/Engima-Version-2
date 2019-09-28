<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="nav">
        <div class="nav_content">
            <div class="engi"><b>Engi</b>ma</div>
            <div class="search-container">
                <form action="/action_page.php"><!--GANTI NANTI-->
                    <input type="text" placeholder="Search Movie" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="link">
                <a href="#">Logout</a>
                <a href="#">Transactions</a>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="schedules-reviews">
            <div class="schedules-movie">
                <div class="schedules">
                    <h3>Schedules</h3>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Available Seats</th>
                        </thead>
                        <tbody id="table-body">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="reviews-movie">
                <div>
                    <h3>Reviews</h3>
                    <div class="review">
                        <div class="profil-image">
                            <img src="img/jokowi.jpeg">
                        </div>
                        <div class="review-detail">
                            <p>Jokowi</p>
                            <img class="star-icon" width="10px" height="10px" src="img/star-icon.svg">
                            <p>8/10</p>
                            <p>Sangat menyenangkan menjadi presiden sembari menonton film. Seru.</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="profil-image">
                            <img src="img/jokowi.jpeg">
                        </div>
                        <div class="review-detail">
                            <p>Jokowi</p>
                            <img class="star-icon" width="10px" height="10px" src="img/star-icon.svg">
                            <p>8/10</p>
                            <p>Sangat menyenangkan menjadi presiden sembari menonton film. Seru.</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="profil-image">
                            <img src="img/jokowi.jpeg">
                        </div>
                        <div class="review-detail">
                            <p>Jokowi</p>
                            <img class="star-icon" width="10px" height="10px" src="img/star-icon.svg">
                            <p>8/10</p>
                            <p>Sangat menyenangkan menjadi presiden sembari menonton film. Seru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>