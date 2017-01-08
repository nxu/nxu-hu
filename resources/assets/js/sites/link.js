$(document).ready(() => {
    const $input = $('.shorten-input');
    const $resultInput = $('#result-input');
    const $form = $('#shorten-form');
    const $loader = $('.loader');

    $loader.hide();

    $resultInput.click((e) => {
        $resultInput.select();
    });

    $form.on('submit', (e) => {
        e.preventDefault();

        if ($input.val().length < 8 ||
            $input.val().substr(0, 4) != 'http'
        ) {
            $input.focus();
            return false;
        }

        $('.result').addClass('is-visible');
        $loader.show();

        $.ajax('/internal-api/links', {
            method: 'post',
            data: $form.serialize(),
            success(data) {
                $loader.hide();
                $resultInput.val(data.url).select();
            }
        });
    });
});
