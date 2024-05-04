document.querySelectorAll('.hcButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../index.php";
    });
});

document.querySelector('.scButton').addEventListener('click', ()=>{
    window.location.href = "shop.php";
});

document.querySelector('.sicButton').addEventListener('click', ()=>{
    window.location.href = "sign/sign-in.php";
});

document.querySelector('.sucButton').addEventListener('click', ()=>{
    window.location.href = "sign/sign-up.php";
});

document.querySelector('.cocButton').addEventListener('click', ()=>{
    window.location.href = "processes/billing.php";
});