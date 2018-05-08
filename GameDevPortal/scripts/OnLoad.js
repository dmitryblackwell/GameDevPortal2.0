    /**
 * Created by veret on 09.10.2017.
 */


// при загрузки windows...
window.onload = function () {//шучу страницы
    CanvasView= document.getElementById("canvas");// наш канвас
    ctx = CanvasView.getContext ("2d");// и 2Д контекст
    document.addEventListener("keydown",KeyPush);//слушатель нажатей
    GameInit();//инициализируем все переменные
    setInterval(GamePlay,100);//gameplay будет вызываться каждые 0.1 секунды
};

//функция которая проверяет вылезла ли наша змейка за пределы поля
function PositionCheck() {
    if (PositionX <0 ){
        PositionX = TileCount-1;
    }
    if (PositionX > TileCount-1){
        PositionX = 0;
    }
    if (PositionY <0 ){
        PositionY = TileCount-1;
    }
    if (PositionY > TileCount-1){
        PositionY = 0;
    }
}
