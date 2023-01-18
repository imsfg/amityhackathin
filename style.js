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