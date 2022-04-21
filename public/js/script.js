$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);

    const szakdogak = [];

    let apiVegpont = "http://localhost:8000/api/szakdogak";

    const szuloElem = $(".szuloelem");
    const sablonElem = $(".sablon");

    szuloElem.empty();

    myAjax.getAdat(apiVegpont, szakdogak, listazas);

    function listazas() {
        szuloElem.show();

        szakdogak.forEach(function (elem) {
            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujSzakdoga = new Szakdoga(ujElem, elem);
        });
        sablonElem.hide();
    }

    $(window).on("modositKattintas", (event) => {
        console.log("katt");
        let adat = event.detail;
        $("#szakdoga_nev").val(adat.szakdoga_nev);
        $("#tagokneve").val(adat.tagokneve);
        $("#oldallink").val(adat.oldallink);
        $("#githublink").val(adat.githublink);
    });

    $("#uj").on("click", () => {
        const adat = {
            szakdoga_nev: $("#szakdoga_nev").val(),
            tagokneve: $("#tagokneve").val(),
            oldallink: $("#oldallink").val(),
            githublink: $("#githublink").val(),
        };
        console.log(adat);
    });

    $(window).on("torles", (event) => {
        console.log(event.detail.id);
        myAjax.deleteAdat(apiVegpont, event.detail.id);
    });
});