let classbtnRight = document.querySelector(".btnRight")
//Берем слайды
let varslides = document.querySelectorAll("img")
//объявляем бвзовую переменную для условия перещелкивания слайдов

let i=0;
// созд функци
classbtnRight.addEventListener("click", function(){
    
    ++i;
    if(i>=varslides.length){
        varslides[i-1].classList.remove("block")
        let i = 0;
        //даем флажок - перед блок нов изобр
        varslides[i].classList.add("block")
    
}else{
    varslides[i-1].classList.remove("block")
    varslides[i].classList.add("block")

}


})
