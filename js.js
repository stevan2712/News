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
    });


    $('input[type="file"]').change(function(e){
        $('label[id*=custom-file-label]').empty();
        var fileName = e.target.files[0].name;
        console.log(fileName);
        //$('#custom-file-label').html('');
        $('#custom-file-label')
            .append('<span>'+ fileName +'</span>');
    });
    $('#date-test').val(new Date().toDateInputValue());


 /*   $('p').contents().filter(function(){
        return this.nodeType == 3 // Text node
    }).each(function(){
        this.data = this.data.replace('\u00a0',' ');
    });*/




});

Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});

// function openPicker(e) {
//     //alert('hii')
//     let dateInput = document.getElementById('date-test');
//     var ev = dateInput.createEvent('KeyboardEvent');
//     console.log('init', ev.initKeyboardEvent('keydown', true, true, document.defaultView, 'F4', 0));
//     console.log('dispatchEvent', inputDateElem.dispatchEvent(ev));
//     setTimeout(function () {
//         console.log('init', ev.initKeyboardEvent('keydown', true, true, document.defaultView, '5', 0));
//         console.log('init', ev.initKeyboardEvent('keydown', true, true, document.defaultView, '5', 0));
//         console.log('init', ev.initKeyboardEvent('keydown', true, true, document.defaultView, '5', 0));
//         console.log(document.getElementById('date-test').dispatchEvent(new KeyboardEvent('keypress',{'key':'5'})));
//     }, 1000)
//
// }