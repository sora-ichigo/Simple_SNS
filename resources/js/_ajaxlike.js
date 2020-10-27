$(function () {
    $('.toggle_like').click(function () {
        const thing_id = $(this).attr('thing_id')
        const click_btn = $(this)

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  //基本的にはデフォルトでOK
            },
            url: '/like',  //route.phpで指定したコントローラーのメソッドURLを指定
            type: 'POST',   //GETかPOSTメソットを選択
            data: { 'thing_id': thing_id },
        })

            .done(function () {
                click_btn.toggleClass('like');
            })

            .fail(function () {
                alert('failed like.');

            })
    })
})
