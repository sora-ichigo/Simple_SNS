$(function () {
    var like = $('.toggle_like')
    var thing_id

    like.click( function () {
        var $this = $(this)
        thing_id = $this.data('thing')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'like',  //routeの記述
            type: 'GET', //受け取り方法の記述（GETもある）
            data: {
                'thing_id': thing_id //コントローラーに渡すパラメーター
            },
        })

            // Ajaxリクエストが成功した場合
            .done(function (data) {
            //lovedクラスを追加
                $this.toggleClass('like')

            //.likesCountの次の要素のhtmlを「data.postLikesCount」の値に書き換える

                $this.find('span').html(data.likes_count );

            })
            // Ajaxリクエストが失敗した場合
            .fail(function (data, xhr, err) {
            //ここの処理はエラーが出た時にエラー内容をわかるようにしておく。
            //とりあえず下記のように記述しておけばエラー内容が詳しくわかります。笑
                console.log('エラー')
                console.log(err)
                console.log(xhr)
            })

        return false
    });
})
