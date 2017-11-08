/**
 * Created by veret on 09.10.2017.
 */
function KeyPush(event) {
    //aGGalert(event.keyCode);
    key = event.keyCode;
    if ( (key == 37 || key == 65) && VelocityX != 1 && VelocityY !=0){//left
        VelocityX=-1; VelocityY=0;
    }
    if ( (key == 38 || key == 87) && VelocityX != 0 && VelocityY !=1){//up
        VelocityX=0; VelocityY=-1;
    }
    if ( (key == 68 || key == 39) && VelocityX != -1 && VelocityY !=0){//right
        VelocityX=1; VelocityY=0;
    }
    if ( (key == 40 || key == 83) && VelocityX != 0 && VelocityY !=-1){//down
        VelocityX=0; VelocityY=1;
    }
    /*
    switch (event.keyCode){
        // left
        case 37:
                VelocityX=-1; VelocityY=0;
            break;
        case 65:
              VelocityX=-1; VelocityY=0;
            break;
        //up
        case 38:
                VelocityX=0; VelocityY=-1;
            break;
        case 87:
                 VelocityX=0; VelocityY=-1;
            break;
        //right
        case 68:
                VelocityX=1; VelocityY=0;
            break;
        case 39:
               VelocityX=1; VelocityY=0;
            break;
        //down
        case 40:
                VelocityX=0; VelocityY=1;
            break;
        case 83:
                VelocityX=0; VelocityY=1;
            break;
    }
    */
}