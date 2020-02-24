const app = new Vue({
    el: '#app',
    data: {

    },
    methods: {
        addCart: function (id) {

            $.ajax({
                type: 'POST',
                data: {
                    id: id
                },
                url: '/ajax/cart/add',
                success: function (data) {
                    $("#alert").html(data);
                }
            });
        },
        showCart: function () {
            $.ajax({
                type: 'POST',
                url: '/ajax/cart/show',
                success: function (data) {
                    $("#showCart").html(data);
                },
                error: function (data) {
                    console.log(data)
                }
            });
        }
    },
    mounted(){

        this.showCart();

    }
});




