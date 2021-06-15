$(function() {
    setup()
    refresh_board();
    window.setInterval(function () {
        refresh_board();
    }, 1);
});


let tiles;
let player = "x";
let game_end = false;

const index = (i, j) => 3 * i + j

const o_tile = `<p style="font-size: 100px; color: blue;">o</p>`

const x_tile = `<p style="font-size: 100px; color: red;">x</p>`

function setup(){
    tiles = $(".cell")
}

function post(tilespot) {
    if (!game_end) {
        /* console.log(document.getElementById(tilespot).valueOf()) */
        if (document.getElementById(tilespot).innerHTML == "") {
            $.post('scripts/process.php', {player:player, tiles:tilespot},
                function(data) {
                    $('#result').html(data);
                });
        }
        if (winner()) {
            $(".winner").html("Winner: " + winner().toUpperCase())
            game_end = true;

        }
    }
}

function reset() {
    game_end = false
    player = "x"
    for (let t of tiles) {
        t = $(t)
        t.val("")
        t.html("")
    }
    $(".winner").html("")
    $(".turn").html("X's Turn")
}

function remove_json() {
    $.post('scripts/reset.php', {call_now: true},
        function(data) {
            $('#result').html(data);
        });
}

function refresh_board() {
    var moves = [];
    $.getJSON("data/data.json", function (data) {
        for (i = 0; i < 10; i++) {
            $.each(data[i], function (key, val) {
                moves.push([val, key])
            })
        }
        for (i = 0; i < 10; i++) {
            $.each(moves[i], function () {
                if (moves[i][0] == 'x') {
                    document.getElementById(moves[i][1]).innerHTML = (x_tile)
                    player = 'o'
                    $(".turn").html(player)
                }

                if (moves[i][0] == 'o') {
                    document.getElementById(moves[i][1]).innerHTML = (o_tile)
                    player = 'x'
                    $(".turn").html(player)
                }
            });
        }

    })
    return moves

}




function getvals() {
    let r = []
    for (let t of tiles) {
        r.push($(t).val())
    }
    return r
}
function winner() {
    const board = getvals()
    //first diagonal check
    let first = board[0]
    let diagonal = first != ""
    for (let i = 0; i < 3; i++) {
        if (board[index(i, i)] != first) {
            diagonal = false
            break
        }
    }
    if (diagonal) return first

    //second diagonal check
    first = board[index(0, 2)]
    let back_diag = first != ""
    for (let i = 1; i < 4; i++) {
        if (board[index(i - 1, 3 - i)] != first) {
            back_diag = false
            break
        }
    }
    if (back_diag) return first

    //horizontal and vertical checks
    for (let i = 0; i < 3; i++) {
        first = board[index(i, 0)]
        let sideways = first != ""
        for (let j = 0; j < 3; j++) {
            if (board[index(i, j)] != first) {
                sideways = false
                break
            }
        }
        if (sideways) return first
    }

    for (let i = 0; i < 3; i++) {
        first = board[index(0, i)]
        let sideways = first != ""
        for (let j = 0; j < 3; j++) {
            if (board[index(j, i)] != first) {
                sideways = false
                break
            }
        }
        if (sideways) return first
    }

    return board.filter(v => v == "").length == 0 ? "tie" : undefined
}