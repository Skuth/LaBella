$(document).ready(() => {

    $(".offerImg .imgBox").each((i, v) => { 
         $(v).css("background-image", "url("+ $(v).attr("data-img") +")")
    });

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

    if($(window).width() <= 560) {
        const nav = $(".navStart ul")[0]
        const navBtn = $("#mobileNav")

        $("#mobileNav").click(() => {
            if($(nav).hasClass("open")) {
                $(nav).removeClass("open")
                $(navBtn).html("&#9776;")
                $("body").css("overflow", "scroll")
            } else {
                $(nav).addClass("open")
                $(navBtn).html("&#10006;")
                $("body").css("overflow", "hidden")
            }
        })
    }

})

function setImg(box) {
    const imgBox = $("#productImg")[0]
    const src = $(box).attr("src")
    
    $(imgBox).attr("src", src)
}

function buyProduct(id) {
    $.ajax({
        type: "POST",
        url: `${window.location.origin}/produto/${id}/comprar`,
        success: function (r) {}
    });
}