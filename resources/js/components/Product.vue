<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div v-if="msg" class="alert alert-success" role="alert">
                  {{ msg }}
                </div>
                <h1 class="page-title float-left">
                  Produtos
                </h1>
                <router-link :to="{ name: 'product.create' }" class="btn btn-primary float-right">Adicionar</router-link>
                <button class="btn btn-success float-right mr-2">Importar CSV</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Listagem de produtos
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                    <th width="260">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in products">
                                    <td>{{ product.id }}</td>
                                    <td>{{ product.name }}</td>
                                    <td>R$ {{ product.price }}</td>
                                    <td>
                                        <router-link :to="{ name: 'product.show', params: { id: product.id } }" class="btn btn-primary">Visualizar</router-link>
                                        <router-link :to="{ name: 'product.edit', params: { id: product.id } }" class="btn btn-primary">Editar</router-link>
                                        <button @click.prevent="removeProduct(product)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <div class="pagination">
                            <button :disabled="! prevPage" @click.prevent="goToPrev" class="btn btn-primary">Anterior</button>
                            <span class="ml-3 mr-3 mt-2">{{ paginatonCount }}</span>
                            <button :disabled="! nextPage" @click.prevent="goToNext" class="btn btn-primary">Próximo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const getProducts = (page, callback) => {
        const params = { page };

        axios.get('/api/products', { params }).then(response => {
            callback(null, response.data);
        }).catch(error => {
            callback(error, error.response.data);
        });
    };

    export default {
        data() {
            return {
                msg: null,
                products: null,
                meta: null,
                links: {
                    first: null,
                    last: null,
                    next: null,
                    prev: null,
                },
                error: null,
            };
        },
        beforeRouteEnter(to, from, next) {
            getProducts(to.query.page, (error, data) => {
                next(vm => vm.setData(error, data));
            });
        },
        beforeRouteUpdate(to, from, next) {
            this.users = this.links = this.meta = null
            getProducts(to.query.page, (error, data) => {
                this.setData(error, data);
                next();
            });
        },
        computed: {
            nextPage() {
                if (!this.meta || this.meta.current_page == this.meta.last_page) {
                    return;
                }

                return this.meta.current_page + 1;
            },
            prevPage() {
                if (!this.meta || this.meta.current_page == 1) {
                    return;
                }

                return this.meta.current_page - 1;
            },
            paginatonCount() {
                if (!this.meta) {
                    return;
                } else {
                    return `${this.meta.current_page} de ${this.meta.last_page}`;
                }
            },
        },
        methods: {
            goToNext() {
                this.$router.push({
                    query: {
                        page: this.nextPage,
                    },
                });
            },
            goToPrev() {
                this.$router.push({
                    query: {
                        page: this.prevPage,
                    }
                });
            },
            setData(error, { data: products, links, meta }) {
                if (error) {
                    this.error = error.toString();
                } else {
                    this.products = products;
                    this.links = links;
                    this.meta = meta;
                }
            },
            removeProduct(product){
                const confirmation = confirm('Deseja remover o produto '+product.name+'?')

                if(confirmation){
                    axios.delete('/api/products/'+product.id).then(response => {
                        const page = this.products.length == 1 ? this.meta.current_page-1 : this.meta.current_page;
                        this.msg = 'Produto removido com sucesso!';

                        getProducts(page, (error, data) => {
                            this.setData(error, data);

                            this.$router.replace({
                                query: {
                                    page: page,
                                },
                            }).catch(err => {});
                        });
                    }).catch(error => {
                        console.log(error);
                    });
                }
            }
        },
        mounted() {
            if(this.$route.params.msg){
                this.msg = this.$route.params.msg;
            }
        }
    }
</script>
