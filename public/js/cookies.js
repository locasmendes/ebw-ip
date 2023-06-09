function avisoCookiesEBW({
    message='Clicando em "Entendi", você aceita nossa política de cookies com objetivo de melhorar sua navegação. Conheça nossa <a href="https://www.ebwinvest.com.br/politica-de-privacidade" target="_blank">política de privacidade</a>',
    backgroundColor='rgba(43,43,43,0.95)',
    textColor='#ffffff',
    buttonBackgoundColor='#cc883f',
    buttonHoverBackgoundColor='#d49a5c',
    buttonTextColor='#ffffff'
}){
    var check = localStorage.getItem('avisoCookies')
    if(!check){
        var body = document.getElementsByTagName('body')[0];
        body.innerHTML += `
        <style>
            #aviso-cookies{z-index:100000;display:flex;width:100%;position:fixed;bottom:0;left:0;background-color:${backgroundColor};padding:20px;box-sizing:border-box;box-shadow:0 0 7px rgb(0 0 0 / 50%);justify-content:center;align-items:center}
            #texto-cookies{font-family:'Open Sans', 'Arial',sans-serif;font-size:14px;margin:0 20px 0 0;line-height:1.25rem;color:${textColor}}
            #texto-cookies * {font-family:'Open Sans', 'Arial',sans-serif;font-size:14px;line-height:1.25rem;color:${textColor}}
            #entendi-cookies{background:${buttonBackgoundColor};transition: 0.3s all ease;-o-transition: 0.3s all ease;-ms-transition:0.3s all ease;-moz-transition:0.3s all ease;-webkit-transition:0.3s all ease;color:${buttonTextColor};text-shadow:0 1px 1px rgb(0 0 0 / 20%);border-radius: 2px;border: 1px solid rgba(0,0,0,0.1);border-bottom-color: rgba(0,0,0,0.2);font-size: 14px;padding: 6px 14px;cursor: pointer;line-height:19px}
            #entendi-cookies:hover{background-color: ${buttonHoverBackgoundColor};}
        </style>
        <div id="aviso-cookies">
            <span id="texto-cookies">${message}</span>
            <button id="entendi-cookies">Entendi</button>
        </div>`;
        document.getElementById('entendi-cookies').addEventListener('click', function(){
            localStorage.setItem("avisoCookies", "accept");
            document.getElementById('aviso-cookies').remove()
        })
    }
}
