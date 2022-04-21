class Szakdoga {
    constructor(elem, adat) {
        this.elem = elem;
        this.adat = adat;

        this.cim = this.elem.find(".szakdoga_nev");
        this.nev = this.elem.find(".tagokneve");
        this.oldal = this.elem.find(".oldallink");
        this.github = this.elem.find(".githublink");
        this.modosit = this.elem.find(".szerk");
        this.torol = this.elem.find(".torles");
        this.setAdat(adat);

        this.modosit.on("click", () => {
            this.modositTrigger(this.adat);
        });

        this.elem.children(".torles").on("click", () => {
            this.TorolTrigger();
        });

    }

    setAdat(adat) {
        this.adat = adat;
        this.cim.text(adat.szakdoga_nev);
        this.nev.text(adat.tagokneve);
        this.oldal.text(adat.oldallink);
        this.github.text(adat.githublink);
    }

   /*  kattintasTrigger(adat) {
        let event = new CustomEvent("kuldKattintas", {
            detail: adat,
        });
        window.dispatchEvent(event);
    } */


    TorolTrigger() {
        let esemeny = new CustomEvent("torles", { detail: this.adat });
        console.log("kattintottal a gombra");
        window.dispatchEvent(esemeny);
    }

    modositTrigger() {
        let event = new CustomEvent("modositKattintas", {
            detail: adat,
        });
        window.dispatchEvent(event);
    }

}