@extends('_layout')

@section('content')
    <div class="page-pubs" id="page-pubs">
        <div class="container">
            <ul class="side">
                <li v-for="(pubs, category) in publications" v-bind:class="{ active: category === selectedCategory }"><a href="javascript:void(0)" v-on:click="changeCategory(category)" v-text="category"></a></li>
            </ul>
            <div class="content">
                <h2 v-text="selectedCategory"></h2>
                <div class="timeline">
                    <div class="item" v-for="(items, year) in selectedPubs">
                        <div class="year" v-text="year"></div>
                        <div class="item-detail">
                            <div v-for="item in items">
                                <h4 v-text="item.type"></h4>
                                <p>
                                    @{{ item.title }}<br>
                                    @{{ item.author }}<br>
                                    @{{ item.conference }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/vue"></script>
    <script>
        var page = new Vue({
            el: '#page-pubs',
            data: {
                publications: {
                    'Representative Papers': {
                        2017: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2016: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2015: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    },
                    'International Conference': {
                        2017: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    },
                    'Domestic Conference': {
                        2016: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2015: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    },
                    'Domestic Journal': {
                        2017: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2015: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    },
                    'Patents': {
                        2017: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2016: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2015: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    },
                    'Others': {
                        2017: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2016: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }, {
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                        2015: [{
                            type: 'International Conference',
                            title: 'Fast and Scalable Distributed Boolean Tensor Factorization',
                            author: 'Namyong Park, Sejoon Oh, and U Kang',
                            conference: '33rd IEEE International Conference on Data Engineering (ICDE) 2017, San Diego, CA, USA.'
                        }],
                    }
                },
                selectedCategory: null,
                selectedPubs: null
            },
            methods: {
                changeCategory: function(cat) {
                    this.selectedCategory = cat;
                    this.selectedPubs = this.publications[cat];
                }
            },
            created: function() {
                this.changeCategory('Representative Papers');
            }
        })
    </script>
@endsection