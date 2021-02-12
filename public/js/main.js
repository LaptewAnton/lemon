window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}
$( document ).ready(function() {

    //Админ панель
    // $('table').hide();
    //
    // $('#recipesBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#recipesBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#recipes').show('slow');
    // });
    // $('#recipeCategoresBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#recipeCategoresBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#recipeCategores').show('slow');
    // });
    // $('#usersBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#usersBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#users').show('slow');
    // });
    // $('#userStatusesBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#userStatusesBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#userStatuses').show('slow');
    // });
    // $('#tagsBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#tagsBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#tags').show('slow');
    // });
    // $('#filesBtn').click(function (){
    //     // $(':radio').removeClass('active');
    //     // $('#filesBtn').addClass('active');
    //     $('table').hide('slow');
    //     $('#files').show('slow');
    // });
});
