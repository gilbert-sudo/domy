async function addpoint(player, score) {
    let res = [];
    try {
        res = await ((await fetch("php/addpoint.php?id=p" + player + "&score=" + score)).json());
    } catch (e) {
        console.group("Error!");
        console.log(e);
    }
    return res;
}


function addscore(player) {
    const line = `
    `;

    Swal.fire({
        text: 'Ampina firy?',
        input: 'number'
    }).then(function (result) {
        if (result.value) {
            let response = addpoint(player, result.value);
            response.then((value2) => {
                if (value2.victory == 1) {
                    window.location.href = "victory/index.php?id=" + player;
                } else {
                        location.reload();
                }
            });
        }
    })
}
