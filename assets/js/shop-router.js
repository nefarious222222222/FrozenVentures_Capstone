document.querySelectorAll('.hsButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../index.php";
    });
});

document.querySelectorAll('.csButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "cart.php";
    });
});

document.querySelectorAll('.bsButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "processes/order.php";
    });
});

document.querySelector('.sisButton').addEventListener('click', ()=>{
    window.location.href = "sign/sign-in.php";
});

document.querySelector('.susButton').addEventListener('click', ()=>{
    window.location.href = "sign/sign-up.php";
});