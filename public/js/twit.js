new Vue({
    el: '#timeline',
    data: {
        post: '',
        posts: [],
        limit: 2,
        total: 0
    },
    methods: {
        postStatus: function (e) {
            e.preventDefault();
            $.ajax({
                url: '/posts',
                type: 'post',
                dataType: 'json',
                data: {
                    'body': this.post
                }
            }).done(function (data) {
                this.post = '';
                this.posts.unshift(data);
            }.bind(this));
        },

        getPosts: function () {
            $.ajax({
                url: '/posts',
                type: 'get',
                dataType: 'json',
                data: {
                    limit: this.limit
                }
            }).done(function (data) {
                this.posts = data.posts;
                this.total = data.total
            }.bind(this));
        },
        getMorePost: function (e) {
            e.preventDefault();
            this.limit = this.limit + this.limit;
            this.getPosts();

        }
    },
    mounted: function () {
        this.getPosts();

        setInterval(function () {
            this.getPosts();
        }.bind(this), 10000);
    }
});

