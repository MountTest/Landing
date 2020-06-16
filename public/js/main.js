// window.onload = function () {
//     let preloader = document.getElementById('preloader');
//     preloader.style.display = 'none';
// };
let preload = () => {
    const blocks = document.querySelectorAll('.preloader ');
    const body = document.querySelector('body');
    body.style.overflow = "hidden";
    let interval = 0;
    blocks.forEach((block, i) => {
        setTimeout(() => {
            animate(block, i);
        }, interval);
        interval += 500;
    });


};
preload();
const preloader = document.querySelector('.preloader');
const body = document.querySelector('body');
function finishedLoading() {
    preloader.style.opacity = "0";
    $(".explore-furniture").addClass("jello-vertical");
    $(".text-header").addClass("focus-in-expand-fwd");
    $(".header-title").addClass("focus-in-expand-fwd");
    setTimeout(() => {
        preloader.style.display = "none";
        body.style.overflow = "auto";

    }, 500);

}
window.onload = function () {
    setTimeout(() => {
        finishedLoading();
    }, 3000);
};
