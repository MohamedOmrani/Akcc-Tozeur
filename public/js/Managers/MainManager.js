var MainManager={
}

MainManager.init = function (){
    $("#tab1btn").click(async function(){

        let tab = await  $.get("http://127.0.0.1:8000/tab1");
        $(".content-tab").html(tab)
    })
    $("#tab2btn").click(async function(){

        let tab = await  $.get("http://127.0.0.1:8000/tab2");
        $(".content-tab").html(tab)
    })
    $("#tab3btn").click(async function(){

        let tab = await  $.get("http://127.0.0.1:8000/tab3");
        $(".content-tab").html(tab)
    })
}
$(document).ready(MainManager.init)