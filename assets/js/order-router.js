document.querySelectorAll('.hoButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../../index.php";
    });
});

document.querySelectorAll('.coButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../cart.php";
    });
});

document.querySelector('.sioButton').addEventListener('click', ()=>{
    window.location.href = "../sign/sign-in.php";
});

document.querySelector('.suoButton').addEventListener('click', ()=>{
    window.location.href = "../sign/sign-up.php";
});

document.querySelector('.boButton').addEventListener('click', ()=>{
    window.location.href = "billing.php";
});