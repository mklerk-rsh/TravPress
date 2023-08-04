<!DOCTYPE html>
<html>
<head>
  <title>TravPress</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style type="text/css">
  	body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #0072BB;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
  color: #00A388;
}

h2 {
  margin: 0;
  color: #00A388;
}

.image-container {
  position: relative;
  height: 500px;
  background-image: url('img/cover.jpg'); /* Replace 'your-image-url.jpg' with the actual image URL */
  background-size: cover;
  background-position: center;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 600px;
  padding: 20px;
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  text-align: center;
}

.buttons {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
}

a {
  margin: 5px;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none;
}

.get-started {
  background-color: #FFD700;
  color: white;
  text-decoration: none;
}

.log-in {
  background-color: #00A388;
  color: white;
}

.section {
		  background-image: url('images/about-img.jpg');
		  background-size: cover;
		  height: 750px;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: center;
		  align-items: center;
		  padding: 20px;
		  box-sizing: border-box;
		  background-color: rgba(0, 0, 0, 1.5);
		}
		
		.story-section {
		  background-color: #fff;
		  display: flex;
		  flex-direction: column;
		  align-items: center;
		  padding: 20px;
		}

		.story-list {
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: center;
		}

		.story-item {
		  /*margin: 20px;
		  
		  width: 300px;
		  border: 1px solid #ccc;
		  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		  text-align: center;
		  background-color: black;*/
		  width: calc(33.33% - 20px);
		  margin: 20px;
		  background-color: #f2f2f2;
		  padding: 20px;
		  border-radius: 5px;
		  text-align: center;
		  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.story-item img {
		  /*width: 100%;
		  height: auto;
		  margin-bottom: 10px;*/
		  width: 100%;
		  height: 200px;
		  object-fit: cover;
		  border-radius: 5px;
		  margin-bottom: 10px;
		}

		.story-item h3 {
		  color: #00A388;
		  font-size: 24px;
		  margin-bottom: 5px;
		}

		.story-item p {
		  margin: 5px;
		  color: #fff
		}

		

		.view-button {
		  display: block;
		  margin-top: 15px;
		  color: #FFD700;
		  text-decoration: none;
		}

		.view-button i {
		  margin-right: 5px;
		}

		@media screen and (max-width: 768px) {
		  .story-item {
			width: 100%;
		  }
		}

		footer {
            background-color: #0072BB;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        .footer-text {
            font-size: 1.8rem;
            text-align: center;
        }



  </style>

</head>
<body>
  <header>
    <h1 style="color: #fff; font-size: 3.3rem;"><b>Welcome to TravPress<b></h1>
  </header>

  <div class="image-container">
    <div class="content">
      <h1>"Your Journey, Our Press: <span>TravPress</span> Unveils the World!"</h1>	
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id augue a elit
        varius eleifend. In vel ante at magna bibendum vulputate. Nunc mollis finibus
        turpis, quis posuere justo aliquet in. Nulla facilisi. In interdum eros ut metus
        lacinia, a consectetur eros cursus. Vivamus nec ultricies felis. Proin eget odio
        vitae purus gravida venenatis non et sem. Nulla facilisi. Sed facilisis, ligula
        quis venenatis tristique, elit elit pharetra lorem, a euismod lectus felis eu erat.
        Nullam et interdum sapien. Ut ut tortor vel mi scelerisque eleifend. Nulla at
        iaculis orci. Vivamus eget volutpat lectus. Nullam a nunc et mauris feugiat
        ullamcorper.
      </p>
    </div>
    <div class="buttons">
      <a href="reader-reg.php" class="get-started">Get Started</a>
      <a href="reader-login.php" class="log-in">Log in</a>
    </div>
  </div>

  <section class="story-section">
	  <h2>Our recent posts activity</h2>
	  <div class="story-list">

		<div class="story-item">
		  <img src="img/trav.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
		
		<div class="story-item">
		  <img src="img/trav1.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
		
		<div class="story-item">
		  <img src="img/trav2.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
		
		<div class="story-item">
		  <img src="img/trav3.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
		
		<div class="story-item">
		  <img src="img/trav4.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
		
		<div class="story-item">
		  <img src="img/trav5.jpg" alt="Story 2">
		  <h3>Post title</h3>
		  <a href="#" class="view-button">
	        <i class="fa fa-eye"></i> View
	      </a>
		</div>
	
		
		
	  </div>
	</section>


  <footer>
    <center>
    	<p style="color: #fff"><b>Developed by </b><a href="www.2banje.wordpress.com">TUBANJE TECHNOLOGIES</a></p>
    </center>
  </footer>



</body>
</html>


          