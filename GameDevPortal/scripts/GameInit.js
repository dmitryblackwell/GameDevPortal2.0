/**
 * Created by veret on 09.10.2017.
 */
function GameInit() {
    PositionX=PositionY=10;// Позиция змейки по х и у
    VelocityX=1; // ее скорость и направление движения
    VelocityY=0; // ее скорость и направление движения

    AppleX=AppleY=15; //  положение яблака
    GreedSize=TileCount=20; // размер поля
    trail=[]; //масив с хвостом
    tail=5;//длинна хвоста

    // я прикинул, что игра без яда будет скучной...
    poison = [];// массив с ядом
    PoisonCount = 5; //его количество на поле

    score=0; //счет
    helth=10; //здоровье

    for (var i=0;  i<PoisonCount; ++i){// инициализируем массив с ядом
        RandX=Math.floor(Math.random() * TileCount);
        RandY=Math.floor(Math.random() * TileCount);
        if (RandY == PositionY) // чтобы яд не спамился там где змейка в начале игры
            RandY++;
        poison.push({x:RandX, y:RandY});
    }
}