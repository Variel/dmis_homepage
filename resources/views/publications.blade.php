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
    @php
        $categories = $pubs->groupBy('type');
    @endphp
    <script src="https://unpkg.com/vue"></script>
    <script>
        var page = new Vue({
            el: '#page-pubs',
            data: {
                publications: {
                    @foreach($categories as $category => $pubList)
                        '{{ $category }}': {
                            @php
                                $yearGroup = $pubList->groupBy('year');
                            @endphp
                            @foreach($yearGroup as $year => $yearPubList)
                                '{{ $year }}': [
                                    @foreach($yearPubList as $pub)
                                        {
                                            type: '{{ $pub->detailType }}',
                                            title: '{{ $pub->title }}',
                                            author: '{{ $pub->authors }}',
                                            conference: '{{ $pub->journal }}'
                                        },
                                    @endforeach
                                ],
                            @endforeach
                        },
                    @endforeach
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