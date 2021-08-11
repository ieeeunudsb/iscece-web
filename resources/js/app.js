// import {hello} from './printer'
//
// let count = 0
//
// async function doGetPosts() {
//     try {
//         const posts = await $.ajax({url: "http://localhost:8080/wp-json/wp/v2/pages"});
//         const htmlPosts = posts.map(res => {
//             return res.content.rendered;
//         })
//         $("#post_list").html(htmlPosts)
//         console.log("fn ke -->", ++count)
//         // hello();
//         console.log(window.location)
//     } catch (e) {
//         console.log(e)
//         alert(e?.responseJSON.message)
//     }
// }
// doGetPosts()
//
// function getPath(){
//     return window.location;
// }
//
// // getPath()
//
// // $("#post_list").html()