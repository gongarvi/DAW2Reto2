const vue=new Vue({
    el:"#game-cards-controller",
    methods: {
        checkImages(event) {
            console.log(event);
            event.target.src = "image/placeholder.png"
        },
    },
});
