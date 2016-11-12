new Vue({
    el: '#timeline',
    data: {
        post: '',
        posts: []
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

        }
    }
});

