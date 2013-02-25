/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $('.encerrarconta').click(function (){
        var answer = confirm("Tem certeza que deseja encerrar essa conta?");
        if (answer) {
            return true;
        }else{
            return false;
        }
    });
});
