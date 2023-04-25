const app = Vue.createApp({
    data() {
        return {
            count: 1
        }
    }, methods: {
        moveNext() {
            this.count++
            if (this.count > 5) {
                this.count = this.count - 5
            }
        },
        movePrev() {
            this.count--
            if (this.count < 1) {
                this.count = this.count + 5
            }
        },
        
    }, watch: {
        slideShow() {
            var item = "item"+this.count
            slide = document.getElementsById(item)
        }
    }
});
app.mount('#carousel');