if (document.getElementById('playWrapper')) {
    var gameButton = document.getElementById("nextGame");
    var gameContent = document.getElementById("gameContent");
    var games = ['mixer', 'compounder', 'libs'];

    function nextGame(){

        var randomGame = games[Math.floor(Math.random()*games.length)];
        
        if(randomGame == null){
            nextGame();
        }

        if(randomGame == 'compounder'){
            var playModes = ['noun', 'verb', 'adjective', 'adverb'];
            var randomWord1 = list.words[Math.floor(Math.random()*list.words.length)];
            var randomWord2 = list.words[Math.floor(Math.random()*list.words.length)];
            var randomMode = playModes[Math.floor(Math.random()*playModes.length)];
            gameContent.innerHTML = '<div class="big">' + randomWord1 + '-' + randomWord2 + '</div><div class="little">' + randomMode + '</div>';
        }
        
        if(randomGame == 'mixer'){
            var playModes = ['noun', 'verb', 'adjective', 'adverb'];
            var randomWord = list.words[Math.floor(Math.random()*list.words.length)];
            var randomMode = playModes[Math.floor(Math.random()*playModes.length)];
            gameContent.innerHTML = '<div class="big">' + randomWord + '</div><div class="little">' + randomMode + '</div>';
        }
        
        if(randomGame == 'libs'){
            var playModes = ['noun', 'verb', 'adjective', 'adverb'];
            var randomWord = list.words[Math.floor(Math.random()*list.words.length)];
            var randomMode = playModes[Math.floor(Math.random()*playModes.length)];
            var libs = [
                'If (x) were horses, (x) would ride; if (x) were watches, I would wear one by my side.',
                'A (x) shower, won\'t last half an hour.',
                'As the (x) lengthen, so the (x) strengthen.',
                'As the (x) grow longer, the (x) grow stronger.',
                'He that would thrive must (x) at five; he that hath thriven may (x) till seven.'
            ]
            var lib = libs[Math.floor(Math.random()*libs.length)];
            var count = (lib.match(/(x)/g) || []).length;
            for (i = 0; i < count; i++) {
                randomWord = list.words[Math.floor(Math.random()*list.words.length)];
                lib = lib.replace("(x)", "<em>" + randomWord + "</em>");
            }
            gameContent.innerHTML = '<div class="libs"><p>' + lib + '</p></div>';
        }
        
        
    }

    nextGame();
}