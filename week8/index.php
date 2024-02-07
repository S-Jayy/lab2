<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction - Sandro Jay Pardines</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
		/* Updated CSS */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    background-image: url('https://images7.alphacoders.com/133/1330752.png');
    background-size: cover;
    background-position: center;
}

.sidebar {
    position: fixed;
    top: 20px;
    right: 20px;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    z-index: 999; /* Ensure it's on top of other content */
}

.sidebar a {
    text-decoration: none;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
	transition: color 0.3s ease;
    margin-left: 10px; /* Add margin between icons */
}

.sidebar a i {
    margin-right: 5px;
}

.sidebar a span {
    display: inline-block;
}

.sidebar a:hover {
    color: yellow;
}

.content {
    margin-left: 80px;
    padding: 70px 20px 20px;
    text-align: center;
}

.profile-frame {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #333;
    margin: 5px auto 10px;
}

.profile-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

h1 {
    margin: 0;
    color: #fff;
    font-size: 28px;
}

h2 {
    color: #ffffff;
}

p {
    color: #555;
    margin-bottom: 10px;
    font-size: 18px;
    margin-top: 5px;
}

.intro-container,
.hobbies-container {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.intro-container p {
    color: #fff;
}

.interest-card,
.hobby-card {
    flex-basis: 22%;
    padding: 20px;
    border-radius: 10px;
}

.interest-card i,
.hobby-card i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #fff;
}

.interest-card h2,
.hobby-card h2 {
    margin: 0;
    font-size: 24px;
    color: #fffff;
}

.game-card {
    margin-right: 20px;
    margin-bottom: 20px;
    box-shadow: none;
}

.intro-container.games-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.game-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}

#hobbies h1,
#games h1 {
    color: #fff;
    font-size: 50px;
    text-align: center;
    margin-top: 20px;
}

.hobbies-description,
.games-description {
    color: #ffffff;
    font-size: 28px;
}

.hobbies-container h2,
.games-container h2 {
    color: #fff;
    font-size: 24px;
    text-align: center;
}

.social-links {
    position: fixed;
    top: 20px;
    right: 20px;
}

.social-links a {
    color: #333;
    font-size: 36px;
    margin-left: 10px;
    transition: transform 0.3s ease;
}

.social-links a:hover {
    color: #555;
    transform: scale(1.2);
}



    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#about-me">
            <i class="fas fa-info-circle fa-lg"></i>
            <span>About Me</span>
        </a>
        <a href="#hobbies">
            <i class="fas fa-hiking fa-lg"></i>
            <span>Hobbies</span>
        </a>
        <a href="#games">
            <i class="fas fa-gamepad fa-lg"></i>
            <span>Games</span>
        </a>
    </div>

    <div class="content" id="about-me">
        <h1>Every damn night, and yet, I am still here.</h1>
        <h1>I'm the Goddam Batman.</h1>

        <div class="profile-frame">
            <img src="https://i.pinimg.com/originals/8c/07/a7/8c07a7c9b457fb64b6a9f5b91d4801ad.jpg" alt="Batman">
        </div>

        <div class="intro-container">
            <p><?php echo "I'm Sandro Jay Pardines, a student at Asia Pacific College."; ?></p>
            <p><?php echo "WEBPROG SS221"; ?></p>
        </div>
    </div>

    <div class="content" id="hobbies" style="display: none;">

        <h1>Hobbies</h1>

        <div class="hobbies-container">
            <div class="interest-card">
                <i class="fas fa-music"></i>
                <h2>Music</h2>
            </div>
            <div class="interest-card">
                <i class="fas fa-gamepad"></i>
                <h2>Play Games</h2>
            </div>
            <div class="interest-card">
                <i class="fas fa-film"></i>
                <h2>Watch Movies and Anime</h2>
            </div>
            <div class="interest-card">
                <i class="fas fa-book"></i>
                <h2>Reading</h2>
            </div>
        </div>

    </div>

    <div class="content" id="games" style="display: none;">

        <h1>Games</h1>

        <div class="intro-container games-container">
            <div class="game-card">
                <img src="https://yt3.googleusercontent.com/ytc/AIf8zZQskdbpL9wlq1y-N5sHZY1L__ap1g-e6rxFJYmoPQ=s900-c-k-c0x00ffffff-no-rj"
                    alt="Riot Games">
                <h2>Riot Games</h2>
            </div>
            <div class="game-card">
                <img src="https://sm.ign.com/t/ign_me/review/r/red-dead-r/red-dead-redemption-2-review_1za8.1200.jpg"
                    alt="Red Dead Redemption">
                <h2>Red Dead Redemption</h2>
            </div>
            <div class="game-card">
                <img src="https://posterplus.com.au/files/2020/06/b15669.jpg" alt="Assassin Creed">
                <h2>Assassin Creed</h2>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to toggle visibility of content based on clicked sidebar link
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.querySelectorAll('.content').forEach(content => {
                    content.style.display = 'none';
                });
                document.getElementById(targetId).style.display = 'block';
            });
        });
    </script>
</body>
=======

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduction - Sandro Jay Pardines</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      background-image: url('https://images7.alphacoders.com/133/1330752.png');
      background-size: cover;
      background-position: center;
    }

    .sidebar {
      width: 80px;
      height: 100%;
      background-color: #333;
      position: fixed;
      left: 0;
      top: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .sidebar a {
      text-decoration: none;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px 0;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .sidebar a i {
      margin-bottom: 5px;
    }

    .sidebar a:hover {
      background-color: #555;
    }

    .sidebar a span {
      display: none;
    }

    .sidebar a:hover span {
      display: block;
      margin-top: 5px;
    }

    .content {
      margin-left: 80px;
      padding: 70px 20px 20px;
      text-align: center;
    }

    .profile-frame {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      border: 5px solid #333;
      margin: 5px auto 10px;
    }

    .profile-frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      margin: 0;
      color: #fff;
      font-size: 28px;
    }
	
	h2 {
      color: #ffffff;
    }

    p {
      color: #555;
      margin-bottom: 10px;
      font-size: 18px;
      margin-top: 5px;
    }

    .intro-container,
    .hobbies-container {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }
	
	.intro-container p {
      color: #fff;
    }

    .interest-card,
    .hobby-card {
      flex-basis: 22%;
      padding: 20px;
      border-radius: 10px;
    }

    .interest-card i,
    .hobby-card i {
      font-size: 40px;
      margin-bottom: 10px;
	  color: #fff;
    }

    .interest-card h2,
    .hobby-card h2 {
      margin: 0;
      font-size: 24px;
      color: #fffff;
    }

    .game-card {
      margin-right: 20px; 
      margin-bottom: 20px; 
      box-shadow: none;
    }

    .intro-container.games-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between; 
    }
	
    .game-card img {
      width: 100%;
      height: 200px; 
      object-fit: cover;
      border-radius: 5px;
    }
	  
	
    #hobbies h1,
    #games h1 {
      color: #fff;
      font-size: 50px; 
      text-align: center; 
	  margin-top: 20px;
    }
	
	.hobbies-description,
    .games-description, {
	  color: #ffffff;
	  font-size: 28px; 
	}

    .hobbies-container h2,
    .games-container h2 {
     color: #fff; 
     font-size: 24px; 
     text-align: center; 
    }

  </style>
</head>

<body>
  <div class="sidebar">
    <a href="#about-me">
      <i class="fas fa-info-circle fa-lg"></i>
      <span>About Me</span>
    </a>
    <a href="#hobbies">
      <i class="fas fa-hiking fa-lg"></i>
      <span>Hobbies</span>
    </a>
    <a href="#games">
      <i class="fas fa-gamepad fa-lg"></i>
      <span>Games</span>
    </a>
  </div>

  <div class="content" id="about-me">
    <h1>Every damn night, and yet, I am still here.</h1>
    <h1>I'm the Goddam Batman.</h1>

    <div class="profile-frame">
      <img src="https://i.pinimg.com/originals/8c/07/a7/8c07a7c9b457fb64b6a9f5b91d4801ad.jpg" alt="Batman">
    </div>

    <div class="intro-container">
      <p>I'm Sandro Jay Pardines, a student at Asia Pacific College.</p>
      <p>WEBPROG SS221</p>
    </div>
  </div>

  <div class="content" id="hobbies" style="display: none;">
  
    <h1>Hobbies</h1>
  
    <div class="hobbies-description">
      Im Batman
    </div>
	
    <div class="hobbies-container">
      <div class="interest-card">
        <i class="fas fa-music"></i>
        <h2>Music</h2>
      </div>
      <div class="interest-card">
        <i class="fas fa-gamepad"></i>
        <h2>Play Games</h2>
      </div>
      <div class="interest-card">
        <i class="fas fa-film"></i>
        <h2>Watch Movies and Anime</h2>
      </div>
      <div class="interest-card">
        <i class="fas fa-book"></i>
        <h2>Reading</h2>
      </div>
    </div>
    
  </div>

  <div class="content" id="games" style="display: none;">
  
    <h1>Games</h1>
  
    <div class="games-description">
      Im Batman
    </div>
	
    <div class="intro-container games-container">
      <div class="game-card">
        <img src="https://yt3.googleusercontent.com/ytc/AIf8zZQskdbpL9wlq1y-N5sHZY1L__ap1g-e6rxFJYmoPQ=s900-c-k-c0x00ffffff-no-rj"
          alt="Riot Games">
        <h2>Riot Games</h2>
      </div>
      <div class="game-card">
        <img src="https://sm.ign.com/t/ign_me/review/r/red-dead-r/red-dead-redemption-2-review_1za8.1200.jpg"
          alt="Red Dead Redemption">
        <h2>Red Dead Redemption</h2>
      </div>
      <div class="game-card">
        <img src="https://posterplus.com.au/files/2020/06/b15669.jpg" alt="Assassin Creed">
        <h2>Assassin Creed</h2>
      </div>
    </div>
  </div>

  <script>
    // JavaScript to toggle visibility of content based on clicked sidebar link
    document.querySelectorAll('.sidebar a').forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        document.querySelectorAll('.content').forEach(content => {
          content.style.display = 'none';
        });
        document.getElementById(targetId).style.display = 'block';
      });
    });
  </script>
</body>

>>>>>>> eec4786e4624ccfa7d2d4b6a2e42a747047dc0aa
</html>
