document.querySelectorAll('.hbButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../../index.php";
    });
});

document.querySelectorAll('.cbButton').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "../cart.php";
    });
});

document.querySelector('.sibButton').addEventListener('click', ()=>{
    window.location.href = "../sign/sign-in.php";
});

document.querySelector('.subButton').addEventListener('click', ()=>{
    window.location.href = "../sign/sign-up.php";
});

document.querySelector('.obButton').addEventListener('click', ()=>{
    window.location.href = "order.php";
});