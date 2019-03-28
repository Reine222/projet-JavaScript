(function($){
    var $btn= $('#btn');
    if('webkitSpeechRecognition' in window){
        var recognition= new webkitSpeechRecognition();
        recognition.lang= 'fr-FR';
        recognition.continuous= false;
        recognition.interimResults= false;

        $btn.click(function(e){
            e.preventDefault();
            recognition.start();
        });

        recognition.onresult= function(event){
            for(var i= event.resultIndex; i< event.results.length; i++){
                recognition.stop();
                var transcript= event.results[i][0].transcript;
                $('#result').text(transcript);
            }
        }
    }else{
        $btn.hide();
    }
})(jQuery);