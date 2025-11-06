// Weather API Integration
document.addEventListener("DOMContentLoaded", () => {
  const weatherBox = document.getElementById("weather-box");

  // Example: OpenWeatherMap API (replace with your key)
  const apiKey = "YOUR_API_KEY"; 
  const city = "Goa"; // You can make this dynamic

  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`)
    .then(res => res.json())
    .then(data => {
      weatherBox.innerHTML = `
        <p>${data.name}: ${data.weather[0].description}</p>
        <p>🌡️ Temp: ${data.main.temp} °C</p>
        <p>💨 Wind: ${data.wind.speed} m/s</p>
      `;
    })
    .catch(() => {
      weatherBox.innerHTML = "⚠️ Unable to load weather data.";
    });
});
