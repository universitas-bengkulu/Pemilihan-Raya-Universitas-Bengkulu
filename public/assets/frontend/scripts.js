AOS.init();


const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
    let scrollY = window.pageYOffset;

    sections.forEach((current) => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 250;
        sectionId = current.getAttribute("id");
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document
                .querySelector(".menu-navbar a[href*=" + sectionId + "]")
                .classList.add("active-menu");
        } else {
            document
                .querySelector(".menu-navbar a[href*=" + sectionId + "]")
                .classList.remove("active-menu");
        }
    });
}

function animation() {
    return {
        counter: 0,
        animate(finalCount) {
            let time = 1000; /* Time in milliseconds */
            let interval = 9;
            let step = Math.floor((finalCount * interval) / time);
            let timer = setInterval(() => {
                this.counter = this.counter + step;
                if (this.counter >= finalCount + step) {
                    this.counter = finalCount;
                    clearInterval(timer);
                    timer = null;
                    return;
                }
            }, interval);
        },
    };
}
