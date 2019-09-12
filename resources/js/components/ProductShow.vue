<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title float-left">
                  Produtos
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Visualizar Produto</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="form-label">Nome</label>
                                <p class="text-muted">{{ product.name }}</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="form-label">Categoria</label>
                                <p class="text-muted">{{ product.category.name }}</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="price" class="form-label">Preço</label>
                                <p class="text-muted">R$ {{ product.price }}</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="description" class="form-label">Descrição</label>
                                <p class="text-muted">{{ product.description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <router-link :to="{ name: 'product.index' }" class="btn btn-link">Voltar</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading: false,
                product: {
                    id: null,
                    name: "",
                    price: "",
                    category: {
                        id: null,
                        name: ""
                    }
                }
            };
        },
        methods: {
            getProduct(id){
                axios.get('/api/products/'+id).then(response => {
                    this.product = response.data.data;
                }).catch(error => {
                    console.log(error)
                });
            }
        },
        mounted() {
            this.getProduct(this.$route.params.id);
        }
    }
</script>
