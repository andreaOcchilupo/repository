function createCell(x, y, board){
    var content = "<div x=" + x + " y=" + y + " board= '" + board + "' class='cell'></div>";
    return content;
}

function createBoard(board, size){
    var content = "";
    for(var i=0; i<size; i++){
        content+="<div>";
        for(var j=0; j<size; j++){
            content += createCell(i,j,board);
        }
        content+="</div>";
    }
    return content;
}

document.getElementById('other').innerHTML = createBoard('other', 10);
document.getElementById('me').innerHTML = createBoard('me', 10);