const CONFIGURING = 1;
const PLAYING = 2;
const DONE = 3;
var state = CONFIGURING;
var size = 10;
var nrCellsMe = 0;
var nrCellsOther = 0;
var boatSize = 0;
var tabBoat = [1,2,2,3,4];
function makeCellDiff(board, x, y) {
    return "<div data-forbidden='" + false + "'data-board='" + board + "' data-x='" + x + "' data-y='" + y + "' class='cell'></div>";
}
function makeContent(board, size) {
    var content = "";
    for (var i = 0; i < size; i++) {
        content += "<div>";
        for (var j = 0; j < size; j++) {
            content += makeCellDiff(board, i, j);
        }
        content += "</div>";
    }
    return content;
}
document.getElementById("other").innerHTML = makeContent('other', size);
document.getElementById("me").innerHTML = makeContent('me', size);
var cellList = document.getElementsByClassName('cell');
for(var i=0; i < cellList.length; i++) {
    cellList[i].addEventListener('click', cellClicked);
}

function cellClicked(ev) {
    var board = ev.target.getAttribute('data-board');
    if(board === 'me') {    
        meCellClicked(ev);
    } else {
        otherCellClicked(ev);
    }
}

function meCellClicked(ev) {
    if(state === CONFIGURING && ev.target.style.backgroundColor !== "white") {
        ev.target.innerHTML = '<div id="' + boatSize + '">"' + for(var i=0; i++; i<tabBoat.length){ + '"<select>"' + tabBoat[i] + '"</select>"' + } + '"</div>'
        nrCellsMe++;
        ev.target.setAttribute('data-boat', true);
        ev.target.style.backgroundColor = "white";
    }
}

function otherCellClicked(ev) {
    switch(state) {
        case CONFIGURING:
            initOtherBoard(nrCellsMe);
            state = PLAYING;
            setStatus(state);
            fire(ev.target);
            if(state !== DONE)
                pcFire();
            break;
        case PLAYING:
            fire(ev.target);
            if(state !== DONE)
                pcFire();
            break;
        case DONE:
            break;
        default:
            console.log("default of switch " + state);
    }
}

function victory(){
    if(nrCellsMe===0)
        document.getElementById("victory").innerHTML = "Computer WIN";
    else
        document.getElementById("victory").innerHTML = "You WIN";
}

function error(){
    document.getElementById("error").innerHTML = "Cell already clicked - Click another one!";
}

function deleteError(){
    document.getElementById("error").innerHTML = "";
}

function fire(cellEl) {
    if(cellEl.style.backgroundColor === 'red' || cellEl.style.backgroundColor === 'gray'){
        error();
        fire(ev.target);
    }
    else{
        deleteError();
        if(nrCellsOther !== 0){
            if(cellEl.getAttribute('data-boat') === "true") {
               cellEl.style.backgroundColor = 'red';
               nrCellsOther--;
               cellEl.setAttribute('data-boat',false);
          } else if(cellEl.style.backgroundColor !== 'red') {
              cellEl.style.backgroundColor = 'gray';
          }
        }
     if(nrCellsOther === 0){
            state = DONE;
            setStatus(state);
        }
    }
}

function pcFire() {
    var cellEl = selectCell('me');
    while(cellEl.style.backgroundColor === 'red' || cellEl.style.backgroundColor === 'gray'){
        cellEl = selectCell('me');
    }
    if(nrCellsMe !== 0){
        if(cellEl.getAttribute('data-boat') === "true") {
            cellEl.style.backgroundColor = 'red';
            nrCellsMe--;
            cellEl.setAttribute('data-boat',false);
        } else if(cellEl.style.backgroundColor !== 'red'){
            cellEl.style.backgroundColor = 'gray';
        }
    }
    if(nrCellsMe === 0){
                state = DONE;
                setStatus(state);
    }
}

function selectCell(board) {
        var x = Math.floor(Math.random() * size);
        var y = Math.floor(Math.random() * size);
        return document.querySelector('#' + board + ' div[data-x="' + x + '"][data-y="' + y + '"]');
}

function initOtherBoard(nrCells) {
    var n = nrCells;
    var antiHangup = 1000;
    while(n > 0 && antiHangup-- > 0) {
        var cellEl = selectCell('other');
        if(cellEl === null) {
            throw new Error('cell not found x=' + cellEl.getAttribute('data-x') + ' - y=' + cellEl.getAttribute('data-y'));;
        }
        if(!cellEl.getAttribute('data-boat')) {
            cellEl.setAttribute('data-boat', true);
            console.log('Add a boat at ' + cellEl.getAttribute('data-x') + "," + cellEl.getAttribute('data-y'));
            n--;
            nrCellsOther++;
        }
    }
    if(antiHangup === 0) {
        throw new Error('No end loop');
    }
}

var stateElement = document.getElementById('state');
function setStatus(state) {
    switch(state) {
        case CONFIGURING:
            stateElement.innerHTML = "CONFIGURING";
            break;
        case PLAYING:
            stateElement.innerHTML = "PLAYING";
            break;
        case DONE:
            stateElement.innerHTML = "DONE";
            victory();
            break;
        default:
            stateElement.innerHTML = "error unknown state " + state;
    }
}