require("./bootstrap");

/// codice per modale delete

const idOne = document.querySelector("#button-1");
const modalOne = document.querySelector(".modal-1");
const reset_btn = document.querySelector("button.reset");

idOne.addEventListener("click", () => {
    modalOne.classList.remove("d-none");
    modalOne.classList.add("d-block");
});

reset_btn.addEventListener("click", () => {
    modalOne.classList.remove("d-block");
    modalOne.classList.add("d-none");
});
