<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div v-if="errors" class="alert alert-danger" role="alert">
                    <ul class="mb-0 list-inline">
                        <li v-for="error in errors">- {{ error }}</li>
                    </ul>
                </div>
                <h1 class="page-title float-left">
                  Produtos
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateProduct($event)">
                    <div class="card">
                        <div class="card-header">Editar Produto</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" id="name" v-model="product.name" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="form-label">Categoria</label>
                                    <select v-model="product.category.id" class="form-control">
                                        <option v-for="category in categories" v-bind:value="category.id">
                                        {{ category.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price" class="form-label">Preço</label>
                                    <input type="number" id="price" v-model="product.price" class="form-control" placeholder="100.00" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="description" class="form-label">Descrição</label>
                                    <textarea id="description" v-model="product.description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <router-link :to="{ name: 'product.index' }" class="btn btn-link">Cancelar</router-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading: false,
                errors: null,
                categories: null,
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
            getcategories(){
                axios.get('/api/categories').then(response => {
                    this.categories = response.data.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            getProduct(id){
                axios.get('/api/products/'+id).then(response => {
                    this.product = response.data.data;
                }).catch(error => {
                    console.log(error)
                });
            },
            updateProduct(event){
                const data = {
                    category_id: this.product.category.id,
                    name: this.product.name,
                    price: this.product.price,
                    description: this.product.description
                };

                axios.put('/api/products/'+this.product.id, data).then((response) => {
                    this.$router.push({ name: 'product.index', params: { msg: 'Produto atualizado com sucesso!' } })
                }).catch(error => {
                    if (error.response.status == 422){
                        this.errors = Object.values(error.response.data.errors).flat();
                    } else {
                        console.log(error);
                    }
                })
            }

        },
        mounted() {
            this.getcategories();
            this.getProduct(this.$route.params.id);
        }
    }
</script>
