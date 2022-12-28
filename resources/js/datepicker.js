import Datepicker from "flowbite-datepicker/Datepicker";

const datePickerEl = document.getElementById("tanggal-datepicker");

new Datepicker(datePickerEl, {
    autohide: true,
    format: "yyyy-mm-dd",
    defaultDate: new Date(),
});

// @import 'node_modules/pikaday/css/pikaday.css';
