/**
 * Created by msd on 9/14/16.
 */
var AllMats;
var AllTags;
function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4) {
            if (rawFile.status === 200 || rawFile.status == 0) {
                var allText = rawFile.responseText;
                callback(allText);
            }
        }
    }
    rawFile.send(null);
}

readTextFile("./js/tempJson.txt", function (data) {
    AllMats = JSON.parse(data);
});
readTextFile("./js/temptagsJson.txt", function (data) {
    AllTags = JSON.parse(data);
});

function TagsLength(DictArray) {
    var Count = 0;
    for (var T in DictArray) {
        Count += DictArray[T].length;
    }
    return Count;
}