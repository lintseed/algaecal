xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "https://www.algaecal.com/wp-json/acf/v3/options/options", false);
xmlhttp.send();
var data = JSON.parse(xmlhttp.responseText);
var phone = data.acf.default_phone_number;
var hours = data.acf.office_hours;

var day = new Date();
var hours = day.getHours();
var minutes =  (day.getMinutes()<10?'0':'') + day.getMinutes();
var strTime = hours.toString() + minutes.toString();

var thisTime = parseInt(strTime);
var startTime = parseInt(data.acf.office_hours[day.getDay()].starting_time);
var endTime = parseInt(data.acf.office_hours[day.getDay()].closing_time);

jQuery(document).ready(function() {
  document.getElementById("phone").innerHTML = phone;
  if (thisTime >= startTime && thisTime <= endTime) {
    $('#phoneDisplay').show();
  }
});

//document.getElementById("insertContents").innerHTML = modalContent;
