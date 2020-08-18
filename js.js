$(document).ready(function() {
    $('#add-tag').click(function() {

        let input = $('#tag-input').val();
        input = input.replace(/\s/g , "-");
        if(input == ""){
            alert("Unesite tag...");
        }
        else {
            $('#tag-list')
                .append('<div class="form-check col-6 col-lg-4">' +
                    '<input type="checkbox" checked class="form-check-input" name="tags[]" value=' + input + '>' +
                    '<label class="form-check-label" for="defaultCheck1"">' + input + '</label></div>')
                .append(`<br>`);
        }
    })

});