const signUpBUtton = document.getElementById("signUp");
const signInBUtton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpBUtton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInBUtton.addEventListener("click", () => [
  container.classList.remove("right-panel-active")
]);
document.getElementById('eye').remove();
function pass(){
  document.getElementById('eye').add();
}