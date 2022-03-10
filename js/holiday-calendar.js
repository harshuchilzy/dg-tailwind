document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("holiday_calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
  });
  calendar.render();
});