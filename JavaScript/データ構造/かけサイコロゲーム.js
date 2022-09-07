function diceStreakGamble(player1,player2,player3,player4){

    const score = [
        countPoint(player1),
        countPoint(player2),
        countPoint(player3),
        countPoint(player4)
    ];
    let maxScore = score[0].length;
    let index = 0;

    for(let i = 0; i < score.length; i++) {
        if(maxScore < score[i].length) {
            maxScore = score[i].length;
            index = i;
        }
    }

    return `Winner: Player ${index+1} won $${score[index].length * 4} by rolling [${score[index]}]`

}

function countPoint(player){
    let count = [];
    count.push(player[0]);
    for (let i = 1; i < player.length; i++){
        if (count[count.length - 1] > player[i]) {
            while (count.length != 0){
                count.pop();
            }
        }
        count.push(player[i]);
    }
    return count;
}