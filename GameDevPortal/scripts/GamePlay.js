/**
 * Created by veret on 09.10.2017.
 */

function GamePlay() {
    PositionX+=VelocityX;//двигаем змейку по х
    PositionY+=VelocityY;// и по у

    ctx.fillStyle = "#FFFAFA";// заполняем наше поле таким цветом
    ctx.fillRect(0,0,CanvasView.width,CanvasView.height);

    PositionCheck();// проверяем не вышла ли змейка за пределы поля

    ctx.fillStyle = "#A141FF";// змейка будет этого цвета
    for (var i =0;i<trail.length;++i){//рисуем все квадратики змейки
        ctx.fillRect(trail[i].x*GreedSize,trail[i].y*GreedSize,GreedSize-2,GreedSize-2);
        if (trail[i].x == PositionX && trail[i].y== PositionY){// если змейка укусила сама себя
            GameOver();
        }
    }
    trail.push({x:PositionX,y:PositionY});//добавляем элемент в массив
    while (trail.length>tail){// если элементов больше чем нужно, то удалаяем первый
        trail.shift();
    }
    if (AppleX == PositionX && AppleY == PositionY){ // если змейка скушала яблоко
        tail++;//увеличиваем хвост
        score++;// и счет
        AppleX=Math.floor(Math.random()*TileCount);// а такжу генерируем новое яблоко по х
        AppleY=Math.floor(Math.random()*TileCount);//и по у
    }
    for (var i =0; i<PoisonCount;++i) {// проходим по массиву с ядом
        if (PositionX == poison[i].x && PositionY == poison[i].y) {//если мы столкнулись с хоть одним ядом
            helth--;//отнимаем хп
            poison[i].x = Math.floor(Math.random() * TileCount);// и генерируем новый яд
            poison[i].y = Math.floor(Math.random() * TileCount);
        }
        ctx.fillStyle = "red";// ну а также рисуем его
        ctx.fillRect(poison[i].x*GreedSize,poison[i].y*GreedSize,GreedSize-2,GreedSize-2);
    }
    if (helth<=0){
        GameOver();
        //GameInit();
    }
    ctx.fillStyle = "green";//и рисуем наше яблоко
    ctx.fillRect(AppleX*GreedSize,AppleY*GreedSize,GreedSize-2,GreedSize-2);

    ctx.fillStyle = "#000";
    ctx.font = "30px Arial";
    ctx.fillText(score,10,30);
    ctx.fillText(helth,10,60);
}