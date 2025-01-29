import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

const btnAppValidMsg = document.querySelector(".app-run-valid-msg");

if (btnAppValidMsg) {
    btnAppValidMsg.addEventListener("click", function () {
        window.axios.post("/messages/valid");
    });
}
