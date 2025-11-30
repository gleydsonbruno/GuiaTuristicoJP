let info_1 = document.getElementById("add-packet-form");
let info_2 = document.getElementById("nothing");
let info_3 = document.getElementById("access-packet-info");

function add_packet() {
    info_1.style.display = "block";
    info_2.style.display = "none";
    info_3.style.display = "none";
};

function access_packet() {
    info_1.style.display = "none";
    info_2.style.display = "none";
    info_3.style.display = "block";
}

document.getElementById("add-packet").addEventListener("click", add_packet);


document.querySelectorAll(".access-packet-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        document.getElementById("packetIdInput").value = btn.dataset.id;
        document.getElementById("showPacketForm").submit();
    });
});