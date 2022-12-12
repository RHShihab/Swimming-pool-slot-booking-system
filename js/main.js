const slotBtn = document.getElementsByClassName("slot");
const slotGroup = document.getElementsByClassName("slot-group");

for (let i = 0; i < slotBtn.length; i++) {
    slotBtn[i].addEventListener("click", handleSlotChange);
}

function handleSlotChange(e) {
    e.preventDefault();

    if(e.target.id === "Morning"){
        document.getElementById("Morning-slot").classList.remove("d-none");
        document.getElementById("Afternoon-slot").classList.add("d-none");
        document.getElementById("Evening-slot").classList.add("d-none");
        document.getElementById("book").classList.remove("disabled");
    }
    else if(e.target.id === "Afternoon"){
        document.getElementById("Morning-slot").classList.add("d-none");
        document.getElementById("Afternoon-slot").classList.remove("d-none");
        document.getElementById("Evening-slot").classList.add("d-none");
        document.getElementById("book").classList.remove("disabled");

    }
    else if(e.target.id === "Evening"){
        document.getElementById("Morning-slot").classList.add("d-none");
        document.getElementById("Afternoon-slot").classList.add("d-none");
        document.getElementById("Evening-slot").classList.remove("d-none");
        document.getElementById("book").classList.remove("disabled");

    }
}