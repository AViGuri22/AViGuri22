
<html>
<head>
    
    <title>Library Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1em 0;
            text-align: center;
        }
        ul{
 list-style-type: none;
 margin: 0;
padding: 0;
 	 overflow: hidden;
 background-color:black;
}
li {
 float: left;
 border-right:1px solid #bbb;
}
li:last-child {
 border-right: none;
}
li a {
 display: block;
 color: white;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
}

 a {
            color: white;
            background-color: #990;
            text-decoration: none;
        }

        nav {
            background: #333;
        }

        nav>ul {
            margin: 0 auto;
            width: 80px;
        }

      

       

        nav ul a:hover {
            background: #090;
        }

        nav ul li ul li {
            float: none;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            background: #333;
            top: 42px;
        }

        nav ul li:hover>ul {
            display: block;
        }

        nav ul li a {
            display: block;
        }

        .gfg {
            font-size: 40px;
            font-weight: bold;
            color: #009900;
            Text-align: center;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
    </header>
    <ul>
 <li><a class=”active” href=”#home”>Home</a></li>
        <li><a href="#">Catalog/Search</a></li>
		<li><a href="adminlog1.php">Admin login</a></li>
		
		<li>User
		<div class="dropdown">
		<!--<ul>
		<li>User login</li>
        <li>User  Regester</li>
		</ul>
		<label for="cars">Choose a car:</label>

<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>-->
<nav>
 <ul>
            <li class="Lev-1">
                <a href="">Level-1</a>
                <ul>
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </li>
        </ul>
		</nav>
		</div>
		</li>
       <li> <a href="#">About Us</a></li>
       <li> <a href="#">Contact Us</a></li>
       <li> <a href="#">Help/FAQ</a></li>
    </ul>
    <div class="container">
        <h2>Welcome to Our Library</h2>
        <div class="search-bar">
            <input type="text" placeholder="Search the catalog...">
        </div>
        <div class="content">
            <div class="section">
                <h3>Featured Books</h3>
                <p>Check out our new arrivals and popular books.</p>
            </div>
            <div class="section">
                <h3>Announcements</h3>
                <p>Stay updated with the latest news and events.</p>
            </div>
            <div class="section">
                <h3>Upcoming Events</h3>
                <p>Join us for exciting events and workshops.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>Contact us: nsti@library.com | 985-225-4442</p>
        <p>&copy; 2024 Library Management System</p>
    </footer>
</body>
</html>