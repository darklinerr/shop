
<div id="modal" class="container">
    <div class="title h1">Cart</div>
    @forelse($products as $product)
        <div class="row p-3">
            <div  class="img text-center col-3 py-5 bg-danger">
                <i class="fas fa-file-image mx-auto" style="font-size: 50px; color: white"></i>
            </div>
            <div class="text col-9 pl-4">
                <div class="row">
                    <div id="name" product="{{ $product->id }}" price="{{ $product->price }}" quantity="{{ $quantity[$product->id] }}"  class="name col-10"><a href="{{ route('product', $product->id) }}">{{ $product->name }}</a></div>
                    <div @click="deleteItem({{$product->id}})" class="col-2"><span class="delete">X</span></div>
                </div>

                <div class="row">
                    <div class="price col-8">
                        <div class="py-2 px-3 mt-4 bg-warning d-inline-block">{{ number_format($product->price, 2, '.', '.') }}$</div>
                    </div>
                    <div class="quantity col-4">
                        <input id="total" type="number" class="w-50 mt-4 quantity" min="1" @change="change({{ $product->id }}, $event)" value="{{ $quantity[$product->id] }}">
                    </div>
                </div>

            </div>
        </div>

    @empty
        <div class="row">
            <h1>Cart Empty</h1>
        </div>

    @endforelse
        <div class="row justify-content-between">
            <h1 class="">Total</h1>
            <div total="{{ $total }}" ><h1>@{{ total }}$</h1></div>
        </div>
</div>

<script>
    new Vue({
        el: '#modal',
        data:{
            total: 0,
            product: []
        },
        methods:{
            change: function (id, event) {
                this.product.forEach((i) => {
                    if(id == i.id){
                        i.quantity = event.target.value;
                    }
                });
                this.changeCart(id, event.target.value);
                this.changeTotal();
            },
            changeTotal: function () {
                this.total = 0;
                this.product.forEach((i) => {
                    this.total += i.quantity * i.price;
                });
            },
            changeCart: function (id, qua) {
                $.ajax({
                    type: 'GET',
                    data: {
                        id: id,
                        quantity: qua
                    },
                    url: '/ajax/cart/change',
                    success: function (data) {

                    }
                });
            },
            deleteItem: function (id) {
                $.ajax({
                    type: 'GET',
                    data: {
                        id: id
                    },
                    url: '/ajax/cart/delete',
                    success: function (data) {
                         $("#showCart").html(data);
                        // console.log(data);
                    }
                });

                this.changeTotal();
            }

        },
        mounted(){

            let a = this;

            $("#modal #name").each(function () {
                a.product.push({
                    id: $(this).attr("product"),
                    price: $(this).attr("price"),
                    quantity: $(this).attr("quantity"),
                });
            });

            this.changeTotal();

        }
    });
</script>

