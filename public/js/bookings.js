function show_question_2(){
    document.getElementById('question_2').style.display = 'block';
    document.getElementById('reserve_form').style.display = 'none';
}
function hide_question_2(){
    document.getElementById('question_2').style.display = 'none';
    document.getElementById('yes_become_member').checked = false;
    document.getElementById('no_become_member').checked = false;
    document.getElementById('yes_all_three').checked = false;
    document.getElementById('no_all_three').checked = false;
    document.getElementById('reserve_form').style.display = 'block';
    document.getElementById('confirm_business').style.display = 'none';
    document.getElementById('form-heading-member').style.display = 'block';
    document.getElementById('form-heading-non-member').style.display = 'none';
}
function confirm_business(){
    document.getElementById('confirm_business').style.display = 'block';
    document.getElementById('reserve_form').style.display = 'none';
}
function reserve_form(){
    document.getElementById('reserve_form').style.display = 'block';
    document.getElementById('confirm_business').style.display = 'none';
    document.getElementById('yes_all_three').checked = false;
    document.getElementById('no_all_three').checked = false;
    document.getElementById('form-heading-member').style.display = 'none';
    document.getElementById('form-heading-non-member').style.display = 'block';
}
function yes_business_reserve_form(){
    document.getElementById('reserve_form').style.display = 'block';
    document.getElementById('form-heading-member').style.display = 'block';
    document.getElementById('form-heading-non-member').style.display = 'none';
}
function no_business_reserve_form(){
    document.getElementById('reserve_form').style.display = 'block';
    document.getElementById('form-heading-member').style.display = 'none';
    document.getElementById('form-heading-non-member').style.display = 'block';
}
