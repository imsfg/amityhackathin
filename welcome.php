<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<style>
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Signika Negative', sans-serif;
    list-style: none;
    text-decoration: none;
}

:root{
    --bg-color:#222327;
    --text-color:#fff;
    --main-color:#29fd53;
    --special-color:#DDA15E;
}
body{
    min-height: 100vh;
    background-color: var(--bg-color);
    color: var(--text-color);
}
header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 28px 12%;
    background: transparent;
    transition: all 0.5s ease;
}
.logo{
    display: flex;
    align-items: center;

}
.logo i{
    color: var(--main-color);
    font-size: 28px;
    margin-right: 3px;
}
.logo span{
    font-size: 1.6rem;
    color: var(--text-color);
    font-weight: 600;
}
.navbar{
    display: flex;
}
.navbar a{
    font-size: 1.2rem;
    font-weight: 500;
    color: var(--text-color);
    padding: 5px 0px;
    margin: 0px 30px;
    transition: all 0.5s ease;
}
.navbar a:hover{
    color: var(--main-color);
}
.navbar a.active{
    color: var(--main-color);
}
.main{
    display: flex;
    align-items: center;
}
.main a{
    margin-right: 2px;
    color: var(--text-color);
    font-size: 1.2rem;
    font-weight: 500;
    margin-right: 25px;
    margin-left: 10px;
    transition: all 0.5s ease;
}
.user{
    display: flex;
    align-items: center;
}
.user i{
    color: var(--main-color);
    font-size: 28px;
    margin-right: 7px;
}
.main a:hover{
    color: var(--main-color);
}
#menu-icon{
    font-size: 34px;
    cursor: pointer;
    z-index: 1001;
    display: none;
    color: var(--text-color);
}

@media(max-width:1280px){
    header{
        padding: 14px 2%;
        transition: 0.2s;
    }
    .navbar a{
        padding: 5px 0px;
        margin: 0px 20px;
    }

}

@media(max-width:1090px){
    #menu-icon{
        display:block;
    }
    .navbar{
        position: absolute;
        top: 100%;
        right: -1000%;
        width: 270px;
        height: 21vh;
        background: var(--main-color);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        border-radius: 10px;
        transition: all 0.5s ease;
    }
    .navbar a{
        display: block;
        margin: 12px 0px;
        padding: 0px 25px;
        transition: all 0.5s ease;
    }
    .navbar a:hover{
        color: var(--text-color);
        transform: translateY(5px);
    }
    .navbar a.active{
        color: var(--text-color);
    }
    .navbar.open{
        right: 2%;
    }
}
.w1{
    min-height: 10vh;
}
.table2{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.table{
    display: flex;
    flex-direction: row;
    text-align: center;
    
}
.a1{
    height: 250px;
    width: 250px;
    margin-left: 20px;
    background:var(--text-color);
    color: var(--bg-color);
}
.w2{
    min-height: 60vh;
}

@media(max-width:900px){
    .table{
        flex-direction: column;
    }
    .table2{
        position: absolute;
        top:20%;
        left: 50%;
    transform: translate(-50%, -10%);
    }
    .a1{
        height: 180px;
        width: 250px;
        margin-left: 0px;
        margin-top: 10px;
        background:var(--text-color);
    }
    #a11{
        display: none;
    }
    .w2{
        min-height: 70vh;
    }
}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    margin: auto;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 7px;
  }
  
  #customers tr:nth-child(even){background-color: var(--bg-color);}
  
  #customers tr:hover {background-color: var(--main-color);}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }


h1{
    text-align: center;
    /* justify-content: center; */
}
.heading{
    background: var(--special-color);
    padding-bottom: 10px;
    padding-top: 10px;
    text-align: center;
    justify-content: center;
}
.heading2{
    padding-top: 30px;
    font-size: 20px;
}

input[type=text] {
    float: right;
    padding: 4px;
    border: none;
    margin-right: 16px;
    font-size: 17px;
  }
  .search{
    display: flex;
  }
.search i{
    margin-top: 6px;
    cursor: pointer;
}
</style>
<body>
<section class="w1">
        <header>
            <a href="#" class="logo"><i class="ri-hospital-fill"></i><span>Logo</span></a>
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Health parameter</a></li>
                <li><a href="#">Disease predictor</a></li>
            </ul>
            <div class="main">
                <a href="logout.php" class="user"><i class="ri-user-fill"></i><span>logout <?php echo $_SESSION['username']?></span></a>
            <div class="bx bx-menu" id="menu-icon"></div>
                <div class="bx bx-menu" id="menu-icon"></div>
                <div class="search">
                    <input type="text" id="city" placeholder="Search.."><i class="ri-search-line" id="buttton"></i></div>
            </div>
        </header>
    </section>
    <section class="w2">
        <div class="table2">
            <h1>Weather For <span id="cityname">Delhi</span> </h1>
            <div class="table">
                <div class="a1">
                    <div class="heading">
                        <h1>Temprature</h1>
                    </div>
                    <div class="heading2">
                        <span id="temp">348C</span>
                        <p>max_temp is <span id="max_temp"></span></p>
                        <p>min_temp is <span id="min_temp"></span></p>
                        <p>feels_like is <span id="feels_like"></span></p>
                    </div>
                </div>
                <div class="a1">
                    <div class="heading">
                        <h1>Humidity</h1>
                    </div>
                    <div class="heading2">
                        <span id="humidity">348*C</span>
                        <p>cloud_pct <span id="cloud_pct"></span></p>
                        <p>wind_degrees <span id="wind_degrees"></span></p>
                        <p>wind_speed <span id="wind_speed"></span></p>
                    </div>
                </div>
                <div class="a1" id="a11">
                    <div class="heading">
                        <h1>Alert</h1>
                    </div>
                    <div class="heading2">
                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="data">
        <h1>Weather for other common places</h1>
        <table id="customers">
            <tr>
                
                <th>Cities</th>
                <th>feels_like</th>
                <th>humidity</th>
                <th>max_temp</th>
                <th>min_temp</th>
                <th>sunrise</th>
                <th>sunset</th>
                <th>temp</th>
                <th>wind_degrees</th>
                <th>wind_speed</th>
            </tr>
            <tr>

                <td><b>Mumbai</b></td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td><b>Bengalaru</b></td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td><b>Kolkata</b></td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td><b>Hyderabad</b></td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td><b>Chennai</b></td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </table>

    </div>
    <script>
      let menu=document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');
menu.onclick= () =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '52e551d50bmsh4771f8afe5f0773p134901jsn9c0b9c4ae08e',
		'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
	}
};

const getweather=(city)=>{
	cityname.innerHTML=city;
fetch('https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city='+city, options)
	.then(response => response.json())
	.then((response) => { 
		console.log(response)
		cloud_pct.innerHTML=response.cloud_pct;
		feels_like.innerHTML=response.feels_like;
		humidity.innerHTML=response.humidity;
		max_temp.innerHTML=response.max_temp;
		min_temp.innerHTML=response.min_temp;		
		temp.innerHTML=response.temp;
		wind_degrees.innerHTML=response.wind_degrees;
		wind_speed.innerHTML=response.wind_speed;
	})
	.catch(err => console.error(err));
}
let buttton=document.querySelector('#buttton');
buttton.addEventListener("click",(e)=>{
	e.preventDefault; 
	 getweather(city.value)
})
getweather("Delhi")
    </script>
</body>
</html>



