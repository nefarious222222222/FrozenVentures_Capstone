document.querySelectorAll(".ciButton").forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = "pages/cart.php";
  });
});

document.querySelector(".siButton").addEventListener("click", () => {
  window.location.href = "pages/shop.php";
});

if (document.querySelector(".soiButton")) {
  document.querySelector(".soiButton").addEventListener("click", () => {
    window.location.href = "server/signout.php";
  });
} else {
  document.querySelector(".siiButton").addEventListener("click", () => {
    window.location.href = "pages/sign/sign-in.php";
  });

  document.querySelector(".suiButton").addEventListener("click", () => {
    window.location.href = "pages/sign/sign-up.php";
  });
}

document.querySelectorAll(".biButton").forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = "pages/processes/order.php";
  });
});
