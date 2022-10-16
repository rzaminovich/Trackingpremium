$(document).ready(function(){
    $('#btnNext').unbind('click').click(function(e){
        let anychecked = false;
        let name = "";
        $('input[type="radio"]').each(function(){
            if(this.checked == true) {
                anychecked = true;
                name = this.value;
            }
        });
        if(anychecked)
            alert('Usted seleccionó la empresa ' + name);
        else
            alert('Debe seleccionar una empresa')
    })

    $('input[type="radio"]').change(function(e){
        $('#companiSelect').text(this.value);
        $('#blockName').css('display', 'block')
    })
})