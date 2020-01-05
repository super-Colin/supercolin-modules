// vertical_ticker v1.0.0
let ticker__ul = document.getElementById('vertical-ticker__ul');

if(ticker__ul.hasChildNodes()){
    let children = ticker__ul.children;
    // we'll make our own for loop since setTimeout() is non-blocking

    i = 0;
    function ticker__loop(){

        setTimeout(function (){

            if(i == 0){
                children[0].style.cssText = 'background-color:red;';

                children[children.length-1].style.cssText = 'top:-5em;width:auto';
                // children[i].style.cssText = 'background-color:red;top:-5em;width:auto;';

            }else if(i == 1){
                children[i-1].style.cssText = 'top:-5em;width:auto;';
                children[children.length-1].style.cssText = 'top:5em;';
            }else{
                children[i-1].style.cssText = 'top:-5em;width:auto;';
            }

            children[i].style.cssText = 'top:0;width:auto;';
            
            i++;
            if(i == children.length){

                for(i=0;i<children.length-1;i++){
                    children[i].style.cssText = 'top: 5em;'
                }
                i=0;
                ticker__loop();
            }else{
                ticker__loop();
            }

        },3000)
    }
    ticker__loop()
}

// /vertical_ticker
