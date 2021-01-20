import axios from 'axios'
import Noty from 'noty'
import jquery from 'jquery'

// function generate(message, type, time) {
    Noty.overrideDefaults({
        text: 'NOTY - a dependency-free notification library!',
        layout: 'topRight',
        theme: 'mint',
        closeWith: ['click', 'button'],
        animation: {
            open: 'animated fadeInRight',
            close: 'animated fadeOutRight'
        }
    });
// }

// $('.content').on('submit', '.form-ajax', function (event) {
//     event.preventDefault();
//     let form = $(this);
//     let action = $(this).attr('action');
//     let data = new FormData($(this)[0]);
//
//     axios.post(action, data)
//         .then(function (response) {
//             let result = response.data;
//
//             if (result.success === true) {
//                 $('.close').click();
//                 generate('sdfsdf', 'success', 5000);
//             } else {
//                 generate(response.data.message, 'warning', 5000);
//             }
//         })
//         .catch(function (error) {
//             console.log(error);
//         });
//
//     return false;
// });
