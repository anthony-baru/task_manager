function build() {
    $('#log').load('log.php?mode=build');
    $('#tally').load('log.php?mode=tally');
    tally();
}

function tally() {
    $('#tally').load('log.php?mode=tally');

}

$(document).ready(function() {

    build();

    $('#form-new').submit(function(event) {
        event.preventDefault(); //prevent default action

        var form = $(this); //get the form
        var task = $('#task').val(); //get value of form input field
        console.log(task); //log above value in console

        var data = form.serialize();

        $.ajax({
            url: 'log.php?mode=new',
            data: data,
            success: function() {
                build();
            }

        });
    });
    // $('#tally').load('log.php?mode=tally');
    // $('#log').load('log.php?mode=build');
    $('#log').on('click', '.btn-stop', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'log.php?mode=stop&id=' + id,
            success: function() {
                build();
            }
        });
    });
});