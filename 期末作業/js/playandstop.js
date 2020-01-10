
//播放
            var grsplay = document.querySelector("#grs");
            var grsmynoisli = document.querySelector("#grsnoisli");
            grsplay.onclick = function () {

                grsmynoisli.play();
                

            };
            var trplay = document.querySelector("#tr");
            var trplay2 = document.querySelector("#tr2");
            var trmynoisli = document.querySelector("#trnoisli");
            trplay.onclick = function () {

                trmynoisli.play();
                
                
            }
            trplay2.onclick = function () {
      
                trmynoisli.play();
                
                
            };
            var teplay = document.querySelector("#te");
            var temynoisli = document.querySelector("#tenoisli");
            teplay.onclick = function () {
           
                temynoisli.play();
                
            };



            var waplay = document.querySelector("#wa");
            var wamynoisli = document.querySelector("#wanoisli");
            waplay.onclick = function () {
         
                wamynoisli.play();
                
                
            };
            var splay = document.querySelector("#sun");
            var smynoisli = document.querySelector("#snoisli");
            splay.onclick = function () {
          
                smynoisli.play();
                
                
            };
            var rplay = document.querySelector("#rain");
            var rmynoisli = document.querySelector("#rnoisli");
            rplay.onclick = function () {
      
                rmynoisli.play();
                
                
            };
            var tplay = document.querySelector("#thunder");
            var tmynoisli = document.querySelector("#tnoisli");
            tplay.onclick = function () {
    
                tmynoisli.play();
                
                
            };
//暫停
            var stop = document.querySelector("#stop");
            stop.onclick = function () {
                smynoisli.pause();
                rmynoisli.pause();
                tmynoisli.pause();
                grsmynoisli.pause();
                wamynoisli.pause();
                trmynoisli.pause();
                temynoisli.pause();


            };
