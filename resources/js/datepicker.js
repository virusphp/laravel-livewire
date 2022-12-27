import Datepicker from "flowbite-datepicker/Datepicker";

const datePickerEl = document.getElementById("tanggal-datepicker");

new Datepicker(datePickerEl, {
    autohide: true,
    format: "yyyy-mm-dd",
});

datePickerEl.onchange = (e) => {
    console.log(e.target.value, "DI SINI");
};
// @import 'node_modules/pikaday/css/pikaday.css';
