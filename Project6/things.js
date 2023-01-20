function loadFunction() {
    var randNumber = Math.floor(Math.random() * 3);
    var request = new XMLHttpRequest();
    request.open('GET', 'things.html', true);
    request.onload = function () {
        if (this.status == 200) {
            if (randNumber == 0) {
                document.getElementById("part1").className = "specialImgs";

            } else if (randNumber == 1) {
                document.getElementById("part2").className = "specialImgs";

            } else if (randNumber == 2) {
                document.getElementById("part3").className = "specialImgs";
            }
        }
    }
    request.onerror = function () {
        console.log('Here is a error in your request');
    }

    request.send();
}