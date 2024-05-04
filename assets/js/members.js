let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main-container");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

let list = document.querySelectorAll(".navigation li");
function activeLink() {
  list.forEach((item) => item.classList.remove("hovered"));
  this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("mouseover", activeLink));

function showMember1() {
  const member1 = document.getElementById("card1");
  member1.style.opacity = "100";
  member1.style.pointerEvents = "all";
}

function closeMember1() {
  const member1 = document.getElementById("card1");
  member1.style.opacity = "0";
  member1.style.pointerEvents = "none";
}

function showMember2() {
  const member1 = document.getElementById("card2");
  member1.style.opacity = "100";
  member1.style.pointerEvents = "all";
}

function closeMember2() {
  const member1 = document.getElementById("card2");
  member1.style.opacity = "0";
  member1.style.pointerEvents = "none";
}

function showMember3() {
  const member1 = document.getElementById("card3");
  member1.style.opacity = "100";
  member1.style.pointerEvents = "all";
}

function closeMember3() {
  const member1 = document.getElementById("card3");
  member1.style.opacity = "0";
  member1.style.pointerEvents = "none";
}

function showMember4() {
  const member1 = document.getElementById("card4");
  member1.style.opacity = "100";
  member1.style.pointerEvents = "all";
}

function closeMember4() {
  const member1 = document.getElementById("card4");
  member1.style.opacity = "0";
  member1.style.pointerEvents = "none";
}
