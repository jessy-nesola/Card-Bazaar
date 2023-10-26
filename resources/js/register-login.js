function toggleLogin() {

    let btnLogin = document.getElementById("btnLogin")
    let textBtnLogin = document.getElementById("textBtnLogin")
    let btnRegistrazione = document.getElementById("btnRegistrazione")
    let textBtnRegistrazione = document.getElementById("textBtnRegistrazione")


    btnLogin.style.transition = "background-color 0.4s"
    btnLogin.style.backgroundColor = "white"
    textBtnLogin.style.color = "black"
    btnRegistrazione.style.transition = "background-color 0.1s"
    btnRegistrazione.style.backgroundColor = "black"
    textBtnRegistrazione.style.color = "white"

    let divLogin = document.getElementById("divLogin")
    let divRegistrazione = document.getElementById("divRegistrazione")

    divRegistrazione.style.transition = "opacity 0.4s"
    divRegistrazione.style.opacity = 0

    setTimeout(function () {
        divRegistrazione.style.display = "none"
        divLogin.style.transition = "opacity 0.4s"
        divLogin.style.opacity = 0
        divLogin.style.display = "flex"

        setTimeout(function () {
            divLogin.style.opacity = 1

        }, 200)
    }, 200)
}

function toggleRegistrazione() {
    let btnRegistrazione = document.getElementById("btnRegistrazione")
    let textBtnRegistrazione = document.getElementById("textBtnRegistrazione")
    let btnLogin = document.getElementById("btnLogin")
    let textBtnLogin = document.getElementById("textBtnLogin")

    btnRegistrazione.style.transition = "background-color 0.1s"
    btnRegistrazione.style.backgroundColor = "white"
    textBtnRegistrazione.style.color = "black"
    btnLogin.style.transition = "background-color 0.4s"
    btnLogin.style.backgroundColor = "black"
    textBtnLogin.style.color = "white"

    let divLogin = document.getElementById("divLogin")
    let divRegistrazione = document.getElementById("divRegistrazione")

    divLogin.style.transition = "opacity 0.4s"
    divLogin.style.opacity = 0

    setTimeout(function () {
        divLogin.style.display = "none"
        divRegistrazione.style.transition = "opacity 0.4s"
        divRegistrazione.style.opacity = 0
        divRegistrazione.style.display = "flex"

        setTimeout(function () {
            divRegistrazione.style.opacity = 1

        }, 200)
    }, 200)
}
