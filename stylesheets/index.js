var dow = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var today = new Date();
var day = document.getElementById("day");
day.textContent = dow[today.getDay()];