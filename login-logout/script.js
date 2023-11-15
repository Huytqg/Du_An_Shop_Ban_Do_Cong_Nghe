const login_logout=document.getElementById('login_logout')
const registerBtn =document.getElementById('register')
const LoginBtn =document.getElementById('login')

registerBtn.addEventListener('click',()=>{
    login_logout.classList.add("active")
});
LoginBtn.addEventListener('click', ()=>{
    login_logout.classList.remove("active")
})