import "./bootstrap";

import Alpine from "alpinejs";

import Datepicker from "flowbite-datepicker/Datepicker";

const datePickerEl = document.getElementById("tanggal-datepicker");
// new Datepicker(datePickerEl, {});

window.Alpine = Alpine;

Alpine.start();
