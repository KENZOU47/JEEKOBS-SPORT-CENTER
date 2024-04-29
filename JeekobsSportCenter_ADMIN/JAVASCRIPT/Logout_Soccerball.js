document.querySelector("#show-logout").addEventListener("click",function(){
    document.querySelector(".Form").classList.add("active");
});
document.querySelector(".Form .close-btn").addEventListener("click",function(){
    document.querySelector(".Form").classList.remove("active");
});

