new Vue({
    el: '#timeline',
    data: {
        post: '',
        posts: [],
        limit: 20
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
                console.log(data);
            }.bind(this));
        }
    },
    mounted: function () {
        setInterval(function () {
            this.getPosts();
        }.bind(this), 10000);
    }
});

