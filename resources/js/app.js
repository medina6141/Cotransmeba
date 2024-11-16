import "./bootstrap";
import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import Clipboard from "@ryangjchandler/alpine-clipboard";

Alpine.plugin(Clipboard);

Alpine.data("app", () => {
    return {
        dark: false,
        stickyMenu: false,
        init() {
            this.stickyMenu = window.pageYOffset > 20 ? true : false;
            this.setLogo();
        },
        setLogo() {
            setTimeout(() => {
                this.dark =
                    JSON.parse(window.localStorage.getItem("mary-theme")) ==
                    "dark";
                console.log(this.dark);
                const checkBox = document.getElementById("logoCheck_1");
                checkBox.checked = !this.dark;
                const checkBox2 = document.getElementById("logoCheck_2");
                checkBox2.checked = !this.dark;
            }, 10);
            //checkBox.dispatchEvent(new Event("input", { bubbles: true }));
        },
    };
});

Alpine.data("slider", (slides) => {
    return {
        slides: [],
        autoplayIntervalTime: 4000,
        currentSlideIndex: 1,
        isPaused: false,
        autoplayInterval: null,
        init() {
            this.slides = slides;
            this.autoplay();
        },
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1;
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length;
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1;
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1;
            }
        },
        autoplay() {
            this.autoplayInterval = setInterval(() => {
                if (!this.isPaused) {
                    this.next();
                }
            }, this.autoplayIntervalTime);
        },
        // Updates interval time
        setAutoplayInterval(newIntervalTime) {
            clearInterval(this.autoplayInterval);
            this.autoplayIntervalTime = newIntervalTime;
            this.autoplay();
        },
    };
});

Livewire.start();
