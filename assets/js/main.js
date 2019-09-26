$(document).ready(() => {
    $(".filters li").click((e) => {
        let ul = e.target.children[0]
        let btn = e.target
        
        $(btn).toggleClass("active")

        if($(btn).hasClass("active")) {
            $(ul).css("display", "block")
            $(ul).addClass("animated fadeIn")

            setTimeout(() => {
                $(ul).removeClass("animated fadeIn")
            }, 500)
        } else {
            $(ul).addClass("animated fadeOut")

            setTimeout(() => {
                $(ul).removeClass("animated fadeOut")
                $(ul).css("display", "none")
            }, 500)
        }
    })
})